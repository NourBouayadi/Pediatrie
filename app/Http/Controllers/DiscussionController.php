<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;
use Auth;
use App\Mom;
class DiscussionController extends Controller
{
    public function index()
    {


        $discussions = Discussion::all();


        return view('forum', compact(['discussions']) );


    }

    public function create()
    {
        return view('discussion.create');
    }

    public function store(Request $request)
    {

        $discussion = new Discussion();
        $discussion->titre = $request->input('titre');
        $discussion->description = $request->input('description');

        $discussion->categorie_id = $request->input('categorie_id');

        $discussion->mom_id = \Auth::guard('mom')->user()->id();
        $mom_name = \Auth::guard('mom')->user()->id();
        $discussion->save();

        session()->flash('success', 'la discussion a été bien enregistrée');

        return redirect('discussions');

    }

    public function edit( $id)
    {
        $discussion = Discussion::find($id);
        return view('discussion.edit', ['discussion' => $discussion]);
    }

    public function update(Request $request, $id)
    {
        $discussion = Discussion::find($id);
        $discussion->titre = $request->input('titre');
        $discussion->description = $request->input('description');

        $discussion->categorie_id = $request->input('categorie_id');
        $discussion->pediatre_id = $request->input('pediatre_id');
        $discussion->admin_id = $request->input('admin_id');
        $discussion->mom_id = $request->input('admin_id');

        $discussion->save();
        return redirect('discussions')->with('success', ' mise à jour étudiant');;
    }

    public function destroy($id)
    {
        $discussion = Discussion::find($id);
        $discussion->delete();
        return redirect('discussions');
    }
    public function show($id) {
        $discussion = Discussion::find($id);
        return view('discussion.show', compact(['discussion']));

    }
}
