<?php

namespace App\Http\Controllers;

use App\Pediatre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PediatreController extends Controller
{
    public function index()
    {

    //table annuaire des pediatres pour afficher les champs: nom, date_carriere, specialite, ville & feedback
        $pediatres = DB::table('pediatres')
            ->join('users', 'pediatres.id', '=','users.id')
            ->select('users.name','users.points', 'pediatres.specialite', 'pediatres.ville', 'pediatres.date_debut_carriere')
            ->where('isActive','=',1)
            ->where('isPediatre','=',1)->orderBy('users.points', 'desc')->paginate(5);


        return view('pediatre.annuaire', compact(['pediatres']) );

    }
    public function search (Request $request){
       /* $pediatres=Pediatre::where('specialite', 'like', '%' . $request->get('specialite') . '%')
            ->orWhere('ville', 'like', '%' . $request->get('ville') . '%')
            ->orWhere('name', 'like', '%'.$request->get('name'))
            ->paginate(5);*/
      $query = DB::table('pediatres')

          ->join('users', 'pediatres.id', '=','users.id')
                    ->select('users.name', 'users.points', 'pediatres.specialite', 'pediatres.ville', 'pediatres.date_debut_carriere')
                    ->where('isActive','=',1)
                    ->where('isPediatre','=',1);
        if($request->get('specialite')!==null && !empty($request->get('specialite'))){
            $query->where('pediatres.specialite', 'like', '%' . $request->get('specialite') . '%');
        }if($request->get('ville')!==null && !empty($request->get('ville'))){
            $query->Where('pediatres.ville', 'like', '%' . $request->get('ville') . '%');
        }if($request->get('name')!==null && !empty($request->get('name'))){
            $query->Where('users.name', 'like', '%'.$request->get('name'));
        }
        $pediatres =$query->orderBy('users.points', 'desc')
            ->paginate(5);
         return view('pediatre.annuaire', compact(['pediatres']));
    }

}
