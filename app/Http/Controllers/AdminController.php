<?php

namespace App\Http\Controllers;
use App\User;

use DateTime;
use Illuminate\Http\Request;

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


        return view('admin.dashboard', compact(['pediatres']));
    }else return redirect('forum');

    }

 /** Méthode approve (change l'attribut isActive de pédiatre de 0 en 1 ) pour valider la demande d'un pédiatre **/

 /*   public function approve(Pediatre $pediatre)
    {
        $pediatre->update(['isActive' => '1']);

        return redirect()->route('/admin/dashboard')->with('success', 'Pediatre apprové!'); // if you want to redirect to a list of all trainings and would need an index action
        // return redirect()->route('trainings', ['training' => $training])->with('success', 'Training Approved'); // if you want redirect to detail page of this training
    }*/

    public function approve($id){
        $pediatre = User::find($id);
        $pediatre->isActive = 1;
        $pediatre->save();
        return redirect('/dashboard');
    }
    public function destroy($id)
    {
        $pediatre = User::find($id);
        $pediatre->delete();
        return redirect('/dashboard');
    }


}
