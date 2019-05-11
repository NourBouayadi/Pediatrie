<?php

namespace App\Http\Controllers;

use App\Pediatre;
use App\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{


    public function indexReponse($id)
    { 
        $reponse = Reponse::find($id);
        return view('profile', compact(['reponse']) );
    }
    


    public function store(Request $request)
    {
        $reponse = new Reponse();
        $reponse->description = $request->input('description');
        $reponse->pediatre_id = $request->input('pediatre_id');
        $reponse->user_id = \Auth::user()->id;

        $reponse->save();

        
        
       
        session()->flash('success', 'la reponse a été bien enregistrée');

        return redirect()->back();

    }

   /* public function edit( $id)
    {
        $reponse = Pediatre::find($id);
        return view('reponse.edit', ['reponsefiche' => $reponse]);
    }*/

    public function update(Request $request, $id)
    {
        $reponse = Reponse::find($id);
      
       
       
        $reponse->description = $request->input('description');
        $reponse->user_id= \Auth::user()->id;

        $reponse->save();
        return redirect('profile')->with('success', ' mise à jour reponse');
    }

    public function destroy($id)
    {
        $reponse = Reponse::find($id);
        $pediatre_id=$reponse->pediatre_id;
        $reponse->delete();
        return redirect('profile/'.$pediatre_id);
    }
}



