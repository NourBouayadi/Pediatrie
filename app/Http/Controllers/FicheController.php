<?php

namespace App\Http\Controllers;

use App\Fiche;
use Illuminate\Http\Request;
use Auth;
use App\Pediatre;


class FicheController extends Controller
{

    public function index()
    {


        $fiches = Fiche::paginate(5);


        return view('ficheMaladie', compact(['fiches']) );

    }

    public function create()
    {
        return view('fiche.create');
    }

    public function store(Request $request)
    {

        $fiche = new Fiche();
        $fiche->titre = $request->input('titre');
        $fiche->description = $request->input('description');
        

        $fiche->symptomes = $request->input('symptomes');
        $fiche->age = $request->input('age');
        $fiche->sexe = $request->input('sexe');
        $fiche->categorie_id = $request->input('categorie_id');
        $fiche->traitementMedicaux = $request->input('traitementMedicaux');
        $fiche->traitementNonMedicaux = $request->input('traitementNonMedicaux');
        $fiche->recommendation = $request->input('recommendation');


        $fiche->user_id = \Auth::user()->id;
        $fiche->save();

        session()->flash('success', 'la fiche maladie a été bien enregistrée');

        return redirect('ficheMaladie');
    }

    public function edit( $id)
    {
        $fiche = Fiche::find($id);
        return view('fiche.edit', ['fiche' => $fiche]);
    }

    public function update(Request $request, $id)
    {
        $fiche = Fiche::find($id);
        $fiche->titre = $request->input('titre');
        $fiche->description = $request->input('description');

        
        $fiche->symptomes = $request->input('symptomes');
        $fiche->age = $request->input('age');
        $fiche->sexe = $request->input('sexe');
        $fiche->traitementMedicaux = $request->input('traitementMedicaux');
        $fiche->traitementNonMedicaux = $request->input('traitementNonMedicaux');
        $fiche->recommendation = $request->input('recommendation');


        $fiche->pediatre_id = \Auth::user()->id;
        $fiche->save();

        return redirect('ficheMaladie')->with('success', ' mise à jour de la fiche');;
    }

    public function destroy($id)
    {
        $fiche = Fiche::find($id);
        $fiche->delete();
        return redirect('ficheMaladie');
    }
    public function show($id) {
        $fiche = Fiche::find($id);
        if (\Auth::user()->id==$fiche->user_id){
            $fiche->isRead=1;
            $fiche->save();
        }
        return view('fiche.show', compact(['fiche']));

    }
   

    public function search (Request $request){
        $fiches=Fiche::where('titre', 'like', '%' . $request->get('search') . '%')
            ->orWhere('description', 'like', '%' . $request->get('search') . '%')
            ->paginate(5);
        return view('ficheMaladie', compact( 'fiches'));
    }
  
}
