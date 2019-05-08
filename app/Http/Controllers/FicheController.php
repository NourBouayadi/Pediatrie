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


        $fiches = Maladie::paginate(5);


        return view('ficheMaladie', compact(['fiches']) );

    }

    public function create()
    {
        $symptomes = Symptome::all();


        return view('fiche.create', compact(['symptomes']) );
    }

    public function store(Request $request)
    {
        $fiche = new Maladie();
        $fiche->nom = $request->input('nom');
        $fiche->description = $request->input('description');


        $fiche->sexe = $request->input('sexe')=='femme'?true:false;
        //$fiche->categorie_id = $request->input('categorie_id');
        $fiche->traitement_medical = $request->input('traitement_medical');
        $fiche->traitement_nonmedical = $request->input('traitement_nonmedical');
        //$fiche->recommendation = $request->input('recommendation');


        $fiche->pediatre_id = \Auth::user()->id;
        $fiche->save();
/*la selection des symptomes peut etre multiple donc une boucle pour récuperer tous les choix, puis persister dans la table
maladies_syptomes chaque maladie avec SES symtpomes sous forme de tuple */
        foreach ($request->input('symptomes') as $id_symprome){
            $symptome=new Maladies_symptome();
            $symptome->maladie_id=$fiche->id;
            $symptome->symptome_id=$id_symprome;
            $symptome->save();
        }

        return redirect('ficheMaladie');
    }

    public function edit( $id)
    {
        $fiche = Fiche::find($id);
        return view('fiche.edit', ['fiche' => $fiche]);
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

        return view('fiche.show', compact(['fiche','symptomes']));

    }
   

    public function search (Request $request){
        $fiches=Maladie::where('titre', 'like', '%' . $request->get('search') . '%')
            ->orWhere('description', 'like', '%' . $request->get('search') . '%')
            ->paginate(5);
        return view('ficheMaladie', compact( 'fiches'));
    }

    public function indexSymptomes(Request $request)
    {
        $symptomes = Symptome::all();


        return view('fiche.create', compact(['symptomes']) );
    }

}
