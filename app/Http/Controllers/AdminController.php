<?php

namespace App\Http\Controllers;
use App\Categorie_moderateur;
use App\User;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
/** Methode Index pour afficher la liste des pédiatres non- approuvés **/
    public function index()
    {
        if (\Auth::user()->type() == "admin") {
            $d=new DateTime('today -30 days');
            $d->format('Y-m-d H:i:s');
             User::where('created_at', '<',  $d)->where('isPediatre','=',1)->where('isActive','=',0)->delete();

        $pediatres = User::where('isActive', '=', 0)
            ->where('isPediatre', '=',1)
            ->paginate(3);
        //\Barryvdh\Debugbar\Facade::info($pediatres);
            $categories= DB::table('categorie_moderateurs')
                ->join('categories', 'categorie_moderateurs.categorie_id', '=','categories.id')
                ->selectRaw('categories.name, categories.id, count(user_id) as num')
                ->groupBy('categorie_moderateurs.categorie_id')->get();
            $moderateurs= DB::table('categorie_moderateurs')
                ->join('categories', 'categorie_moderateurs.categorie_id', '=','categories.id')
                ->join('users','categorie_moderateurs.user_id', '=', 'users.id' )
                ->selectRaw('users.name, users.id, categorie_moderateurs.categorie_id')//,MAX(discussions.created_at) as discussion,discussions.user_id')
                //->join('discussions', 'users.id', '=','discussions.user_id')
                //->join('messages', 'users.id', '=','messages.user_id')
                //->groupBy('discussions.user_id')
                ->get();
                \Debugbar::info($moderateurs);


            $mamans = DB::table('users')

                    ->select('users.id','users.name')
                    ->where('isActive','=','0')
                    ->where('isPediatre','=','0')
                    ->where('users.id','!=','0')
                    ->get();
            $cats = DB::table('categories')
                     ->select('categories.id','categories.name')
                  ->get();
        return view('admin.dashboard', compact(['pediatres','categories','moderateurs', 'mamans', 'cats']));
    }else return redirect('/');

    }

 /** Méthode approve (change l'attribut isActive de pédiatre de 0 en 1 ) pour valider la demande d'un pédiatre **/

 /*   public function approve(Pediatre $pediatre)
    {
        $pediatre->update(['isActive' => '1']);

        return redirect()->route('/admin/dashboard')->with('success', 'Pediatre apprové!'); // if you want to redirect to a list of all trainings and would need an index action
        // return redirect()->route('trainings', ['training' => $training])->with('success', 'Training Approved'); // if you want redirect to detail page of this training
    }*/


    public function approve($id){
        if (\Auth::user()->type() == "admin") {
            $pediatre = User::find($id);
            $pediatre->isActive = 1;
            $pediatre->save();
            return redirect('/dashboard');
        }else return redirect('/');
    }
    public function destroy($id)
    {
        if (\Auth::user()->type() == "admin") {
            $pediatre = User::find($id);
            $pediatre->delete();
            return redirect('/dashboard');
        }else return redirect('/');
    }
    public function retrait(Request $request)
     {
         if (\Auth::user()->type() == "admin") {
             $user = User::find($request->get('user_id'));

             $moderateur = Categorie_moderateur::where('categorie_id', '=', $request->get('categorie_id'))
                 ->where('user_id', '=', $request->get('user_id'))->delete();
             if (Categorie_moderateur::where('user_id', '=', $request->get('user_id'))->doesntExist()) {
                 $user->isActive = 0;
                 $user->save();
             }


             return redirect('/dashboard');
         }else return redirect('/');
    }

    public function attribuer (Request $request)
    {
        if (\Auth::user()->type() == "admin") {
            $user = User::find($request->get('user_id'));
            $user->isActive = 1;
            $user->save();
            foreach ($request->input('categories') as $categorie_id) {
                $categorie = new Categorie_moderateur();
                $categorie->categorie_id = $categorie_id;
                $categorie->user_id = $request->get('user_id');
                $categorie->save();
            }
            return redirect('/dashboard');
        }else return redirect('/');


    }


}
