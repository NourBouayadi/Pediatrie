<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Likes_message;
use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\Mom;
use App\Favori;

class DiscussionController extends Controller
{
    public function index()
    {


        $discussions = Discussion::paginate(5);


        return view('forum', compact(['discussions']) );


    }
    public function indexParCategorie($id){
        $discussions = Discussion::where('categorie_id', '=', $id)->paginate(5);//->get();
        return view('forum', compact(['discussions']));
    }

    public function indexParSujet(){

          /*  $discussions = Discussion::where('user_id', '=', \Auth::user()->id )->orderBy('isRead', 'asc')->get();
                                       ->where
        >join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
SELECT discussions.`*`,COUNT(messages.`id`) as num from `messages`,`discussions` WHERE messages.`discussion_id`= discussions.`id` group by messages.`discussion_id`
        */return view('forum', compact(['discussions']));
    }
    public function indexParFavoris(){
        $favoris=Favori::where('user_id','=',\Auth::user()->id)
            ->where('favori','=','discussion_id')->paginate(5);

        return view('forum', compact(['discussions']));
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

        $discussion->user_id = \Auth::user()->id;
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
        $discussion->user_id = \Auth::user()->id;


        $discussion->save();
        return redirect('forum')->with('success', ' mise à jour étudiant');;
    }

    public function destroy($id)
    {
        $discussion = Discussion::find($id);
        $discussion->delete();
        return redirect('forum');
    }

    public function fav ($id) {
        \Debugbar::disable();
        if(Discussion::where('id','=',$id)->where('user_id', '=',\Auth::user()->id )->first()==null ){
            $fav=Favori::where('user_id','=',\Auth::user()->id)->where('discussion_id','=',$id)->first();
            if($fav==null) {
                $fav = new Favori();
                $fav->user_id = \Auth::user()->id;
                $fav->discussion_id = $id;
                $fav->save();
                return "fa fa-star";
            }
            else {
                $fav->delete();
            }
        }
        return "fa fa-star-o";
    }
    public function like ($id){
        \Debugbar::disable();
        $like=Likes_message::where('user_id','=',\Auth::user()->id)->where('message_id','=',$id)->first();
        if($like==null) {
            $like = new Likes_message();
            $like->user_id = \Auth::user()->id;
            $like->message_id = $id;
            $like->save();
            return "fa fa-thumbs-up";
        }
        else {
            $like->delete();
            return "fa fa-thumbs-o-up";
        }
    }

    public function search (Request $request){
        $discussions=Discussion::where('titre', 'like', '%' . $request->get('search') . '%')
            ->orWhere('description', 'like', '%' . $request->get('search') . '%')
            ->paginate(5);//->get();
        return view('forum', compact( 'discussions'));
    }
    public function show($id) {
        //TODO isRead favoris
        $discussion = Discussion::find($id);
        $unread=false;
        if (\Auth::user()->id==$discussion->user_id && !$discussion->isRead){
            $discussion->isRead=1;
            $discussion->save();
            $unread=true;
        }
        \Debugbar::info($unread);
        return view('discussion.show', compact(['discussion','unread']));

    }
    public function cloturer($id){
        $discussion = Discussion::find($id);
        if($discussion->isLocked)
            $discussion->isLocked=0;
        else
            $discussion->isLocked=1;
        $discussion->save();
        return redirect()->back();

    }
}