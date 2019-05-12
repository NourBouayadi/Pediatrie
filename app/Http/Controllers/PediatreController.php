<?php

namespace App\Http\Controllers;

use App\Pediatre;
use App\Evaluation;
use App\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PediatreController extends Controller
{


    //Method index to list all Pediatres
    public function index()
    {

    //table annuaire des pediatres pour afficher les champs: nom, date_carriere, specialite, ville & feedback
        $pediatres = DB::table('pediatres')
            ->join('users', 'pediatres.id', '=','users.id')
            ->select('users.id','users.name','users.points', 'pediatres.specialite', 'pediatres.ville', 'pediatres.date_debut_carriere')
            ->where('isActive','=',1)
            ->where('isPediatre','=',1)->orderBy('users.points', 'desc')->paginate(5);

        $tops=  DB::table('pediatres')
            ->join('users', 'pediatres.id', '=','users.id')
            ->select('users.id','users.name','users.points', 'pediatres.specialite', 'pediatres.ville', 'pediatres.date_debut_carriere')
            ->where('isActive','=',1)
            ->where('isPediatre','=',1)->orderBy('users.points', 'desc')->limit(5);
        return view('pediatre.annuaire', compact(['pediatres', 'tops','reponses']) );

    }
    //Method search in Annuaire
    public function search (Request $request){
       /* $pediatres=Pediatre::where('specialite', 'like', '%' . $request->get('specialite') . '%')
            ->orWhere('ville', 'like', '%' . $request->get('ville') . '%')
            ->orWhere('name', 'like', '%'.$request->get('name'))
            ->paginate(5);*/
      $query = DB::table('pediatres')

          ->join('users', 'pediatres.id', '=','users.id')
                    ->select('users.id','users.name', 'users.points', 'pediatres.specialite', 'pediatres.ville', 'pediatres.date_debut_carriere')
                    ->where('isActive','=',1)
                    ->where('isPediatre','=',1);
        if($request->get('specialite')!==null && !empty($request->get('specialite'))){
            $query->where('pediatres.specialite', 'like', '%' . $request->get('specialite') . '%');
        }if($request->get('ville')!==null && !empty($request->get('ville'))){
            $query->Where('pediatres.ville', 'like', '%' . $request->get('ville') . '%');
        }if($request->get('name')!==null && !empty($request->get('name'))){
            $query->Where('users.name', 'like', '%'.$request->get('name').'%');
        }
        $pediatres =$query->orderBy('users.points', 'desc')
            ->paginate(5);
         return view('pediatre.annuaire', compact(['pediatres']));
    }
    //Method index($id) to list the pediatre with id
    public function indexPediatre($id)
    { 
        $pediatre = Pediatre::find($id);
        //tables des commentaire sur un profile

        $reponses = DB::table('reponses')
            ->join('users', 'reponses.user_id', '=', 'users.id')
            ->select('reponses.description', 'users.name')
            ->where('reponses.pediatre_id', '=', $id)->get();

        return view('profile', compact(['pediatre', 'reponses']) );
    }

//fonction stars pr recuperer les notes données au pediatres //
    public function stars($id,Request $request){
        echo "pediatre id:".$id." value:".$request->value;
        $note= new Evaluation;
        $note->point = $request->value;
        $note->pediatre_id = $id;
        $note->user_id = \Auth::user()->id;
        $note->save();

        $points= DB::table('evaluations')
            ->groupBy('pediatre_id')
            ->having('pediatre_id','=',$id)
            ->AVG('point');
        DB::table('users')
            ->where('id', $id)
            ->update(['points' => $points]);
    }


    public function modify($id)
    {
        $pediatre = Pediatre::find($id);
        return view('editprofile', compact(['pediatre']) );

    }
    public function storeCommentaire($id, Request $request)
    {
        $reponses = new Reponse();
        $reponses->description= $request->input('description');
        $reponses->pediatre_id= $id;
        $reponses->user_id= \Auth::user()->id;
        $reponses->save();
            return redirect('profile/'.$id);
    }

}
