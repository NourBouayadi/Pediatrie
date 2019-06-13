<?php

namespace App\Http\Controllers;

use App\Fiche;
use App\Maladie;
use App\Maladie_Symptome;
use App\Maladies_symptome;
use App\Symptome;
use Illuminate\Http\Request;
use Auth;
use App\Pediatre;
use Illuminate\Support\Facades\DB;


class FicheController extends Controller
{

    public function index()
    {

        $symptomes = Symptome::all();

        //$fiches = Maladie::all();
          $fiches = DB::table('maladies')
                    ->join('users', 'maladies.pediatre_id','=','users.id')
                    ->select('maladies.*', 'users.name')->get();
        return view('fiche.index', compact(['fiches', 'symptomes']) );

    }
    //afficher les fiches crées par chaque pediatre
        public function indexParFiche()
        {
            if (\Auth::user()->type() == "pediatre") {
                $symptomes = Symptome::all();
                $fiches = DB::table('maladies')
                    ->join('users', 'maladies.pediatre_id', '=', 'users.id')
                    ->select('maladies.*', 'users.*')
                    ->where('maladies.pediatre_id', '=', \Auth::user()->id)
                    ->orderBy('maladies.vue', 'desc')
                    ->orderBy('maladies.created_at', 'desc')
                    ->paginate(5);
                return view('fiche.index', compact(['fiches', 'symptomes']));
            }
            else return redirect('/ficheMaladie');
        }

    public function create()
    {
        if (\Auth::user()->type() == "pediatre") {
            $symptomes = Symptome::all();


            return view('fiche.create', compact(['symptomes']));
        }
        else return redirect('/ficheMaladie');
    }

    public function store(Request $request)
    {
        if (\Auth::user()->type() == "pediatre") {
            $fiche = new Maladie();
            $fiche->nom = $request->input('nom');
            $fiche->description = $request->input('description');
            $fiche->sexe = $request->input('sexe');
            $fiche->categorie_id = $request->input('categorie_id');
            $fiche->traitement_medical = $request->input('traitement_medical');
            $fiche->traitement_nonmedical = $request->input('traitement_nonmedical');
            $fiche->recommendation = $request->input('recommendation');
            $fiche->pediatre_id = \Auth::user()->id;
            $fiche->save();
            /*la selection des symptomes peut etre multiple donc une boucle pour récuperer tous les choix, puis persister dans la table
            maladies_syptomes chaque maladie avec SES symtpomes sous forme de tuple */
            foreach ($request->input('symptomes') as $id_symprome) {
                $symptome = new Maladies_symptome();
                $symptome->maladie_id = $fiche->id;
                $symptome->symptome_id = $id_symprome;
                $symptome->save();
            }
        }
        return redirect('ficheMaladie');
    }

    public function edit( $id)
    {

        $fiche = Maladie::find($id);
        if($fiche->pediatre_id == \Auth::user()->id) {
            $symptomes = Symptome::all();
            $selectSymptome = Maladies_symptome::select('symptome_id')->where('maladie_id', '=', $id)->get();
            \Debugbar::info($selectSymptome);
            return view('fiche.edit', ['fiche' => $fiche, 'symptomes' => $symptomes, 'selectSymptome' => $selectSymptome]);
        }else
            return redirect('ficheMaladie/show/' . $id);
    }
    public function update(Request $request){

        $fiche = Maladie::find($request->input('id'));
        if($fiche->pediatre_id == \Auth::user()->id) {
            $fiche->nom = $request->input('nom');
            $fiche->description = $request->input('description');
            $fiche->sexe = $request->input('sexe');
            $fiche->categorie_id = $request->input('categorie_id');
            $fiche->traitement_medical = $request->input('traitement_medical');
            $fiche->traitement_nonmedical = $request->input('traitement_nonmedical');
            $fiche->recommendation = $request->input('recommendation');
            $fiche->save();
            DB::table('maladies_symptomes')->where('maladies_symptomes.maladie_id', '=', $request->input('id'))->delete();
            foreach ($request->input('symptomes') as $id_symprome) {
                $symptome = new Maladies_symptome();
                $symptome->maladie_id = $fiche->id;
                $symptome->symptome_id = $id_symprome;
                $symptome->save();
            }
            return redirect('ficheMaladie/show/' . $request->input('id'));
        }else
            return redirect('ficheMaladie/show/' . $request->input('id'));
    }

    public function destroy($id)
    {
        $fiche = Maladie::find($id);
        $fiche->delete();
        return redirect('ficheMaladie');
    }
    public function show($id) {
        $fiche = Maladie::find($id);
        //
        $symptomes = DB::table('maladies_symptomes')
            ->join('symptomes', 'maladies_symptomes.symptome_id', '=','symptomes.id')
            ->select('symptomes.nom','maladies_symptomes.symptome_id')->where('maladie_id', '=',$id)->get();
        if(\Auth::user()!=null&&$fiche->pediatre_id != \Auth::user()->id)

        {$fiche->vue++;}
        $fiche->save();
        return view('fiche.show', compact(['fiche','symptomes']));

    }

    public function search (Request $request){
        $symptomes=$request->get('symptomes');
        $query = DB::table('maladies')
            ->join('users', 'maladies.pediatre_id','=','users.id')
            ->selectRaw('maladies.*,users.name');

        if($request->get('nom')!==null && !empty($request->get('nom'))){
            $query->where('nom', 'like', '%' . $request->get('nom') . '%');
        }if($request->get('symptomes')!==null && sizeof($request->get('symptomes'))>0){
            $query
                ->join('maladies_symptomes', 'maladies.id', '=', 'maladies_symptomes.maladie_id')
                ->whereIn('symptome_id',$symptomes )
                ->groupBy('maladie_id');
                //->havingRaw('count(symptome_id)  >= ? ',array(sizeof($symptomes)));
        }
        $fiches =$query->orderBy('vue', 'desc')->get();

        $symptomes = Symptome::all();
        if($request->get('symptomes')!==null && sizeof($request->get('symptomes'))>0) {
            foreach ($fiches as $fiche) {
                $n = 0;
                $missing = false;
                $num = Maladies_symptome::groupBy('maladie_id')->having('maladie_id', '=', $fiche->id)->count();
                foreach ($request->get('symptomes') as $symptome) {
                    if (Maladies_symptome::where('symptome_id', '=', $symptome)->where('maladie_id', '=', $fiche->id)->exists()) {
                        $n++;
                    } else {
                        $missing = true;
                    }
                    $fiche->taux = $n * 100 / $num;
                    $fiche->missing = $missing;
                }
            }
            $fiches = $fiches->sortByDesc('taux')->sortBy('missing');
        }else{
            foreach ($fiches as $fiche) {
                $fiche->taux =0;
                $fiche->missing = false;
            }
        }
        \Debugbar::info($fiches);
        return view('fiche.search', compact(['fiches','symptomes']));}

    public function indexParCategorie($id){
        $symptomes = Symptome::all();

        //$fiches = Maladie::all();
        $fiches = DB::table('maladies')
            ->join('users', 'maladies.pediatre_id','=','users.id')
            ->select('maladies.*', 'users.name')
            ->where('categorie_id','=',$id)
            ->get();
        return view('fiche.index', compact(['fiches', 'symptomes']) );

    }
}
