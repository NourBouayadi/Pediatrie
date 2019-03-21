<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;
use Auth;
use App\Mom;
use App\Favori;
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

        return redirect('forum');

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
        return redirect('forum')->with('success', ' mise à jour étudiant');;
    }

    public function destroy($id)
    {
        $discussion = Discussion::find($id);
        $discussion->delete();
        return redirect('forum');
    }
    public function show($id) {
        $discussion = Discussion::find($id);
        if (\Auth::guard('mom')->user()->id()==$discussion->mom_id){
            $discussion->isRead=1;
            $discussion->save();
        }
        return view('discussion.show', compact(['discussion']));

    }
    public function fav ($id) {
        \Debugbar::disable();
        $fav=Favori::where('mom_id','=',\Auth::guard('mom')->user()->id())->where('discussion_id','=',$id)->first();
        if($fav==null) {
            $fav = new Favori();
            $fav->mom_id = \Auth::guard('mom')->user()->id();
            $fav->discussion_id = $id;
            $fav->save();
            return "fa fa-star";
        }
        else {
            $fav->delete();
            return "fa fa-star-o";
        }
    }

    public function search (Request $request){
        $discussions=Discussion::where('titre', 'like', '%' . $request->get('search') . '%')
            ->orWhere('description', 'like', '%' . $request->get('search') . '%')
            ->get();
        return view('forum', compact( 'discussions'));
    }
}
