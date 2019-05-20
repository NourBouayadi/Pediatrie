<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Likes_message;
use App\Message;
use Illuminate\Http\Request;
use Auth;
use App\Mom;
use App\Favori;
use Illuminate\Support\Facades\DB;
class DiscussionController extends Controller
{
    public function index()
    {


        $discussions = Discussion::paginate(5);


        return view('forum', compact(['discussions']) );

    }
    //TODO

    public function indexParCategorie($id){
        $discussions = Discussion::where('categorie_id', '=', $id)->paginate(5);//->get();
        return view('forum', compact(['discussions']));
    }

    public function indexParSujet(){



     /*   $discussions = DB::select('(SELECT discussions.`*`,COUNT(messages.`id`) AS num from `messages`,`discussions` WHERE messages.`discussion_id`= discussions.`id` group by messages.`discussion_id` )
UNION ALL
(SELECT discussions.`*`,0 AS favorisnum FROM `discussions` WHERE `id` NOT IN (SELECT DISTINCT `discussion_id` FROM `messages`) ) ORDER BY  `isRead` ASC , `num` DESC;
');*/

        $q1 = DB::select('SELECT DISTINCT `discussion_id` FROM `messages`');
        $list=[];
        foreach ($q1 as $discussion){
            array_push($list,$discussion->discussion_id);
        }

        $q2 = DB::table('discussions')
                    ->join('messages', 'discussions.id', "=", 'messages.discussion_id')
                    ->selectRaw('discussions.*, count(messages.id) as num ')
                    ->where('discussions.user_id','=',\Auth::user()->id)
                    ->groupBy('messages.discussion_id');

      
        $q3 = DB::table('discussions')
                 ->selectRaw('discussions.*, 0 as num')
                 ->whereNotIn('id',$list)
                 ->where('discussions.user_id','=',\Auth::user()->id)
                 ->unionAll($q2)
                 ->orderBy('isRead','asc')
                 ->orderBy('num','desc');
        $discussions=$q3->paginate(5);
        /*(SELECT discussions.`*`,COUNT(messages.`id`) AS num from `messages`,`discussions` WHERE messages.`discussion_id`= discussions.`id` group by messages.`discussion_id` )
        UNION ALL
        (SELECT discussions.`*`,0 AS favorisnum FROM `discussions` WHERE `id` NOT IN (SELECT DISTINCT `discussion_id` FROM `messages`) ) ORDER BY  `isRead` ASC , `num` DESC;

        */
       return view('forum', compact(['discussions']));
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
        $discussion->views++;
        if (\Auth::user()->id==$discussion->user_id && !$discussion->isRead){
            $discussion->isRead=1;
            $unread=true;
        }
        $discussion->save();
        \Debugbar::info($discussion->views);
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

    public function article(){

        $discussions = DB::table('discussions')
                       ->join('users' , 'discussions.user_id', 'users.id')
                       ->where('isPediatre','=', 1)
                       ->paginate(5);
        return view('forum', compact(['discussions']));

    }
    public function discussion(){

        $discussions = DB::table('discussions')
            ->join('users' , 'discussions.user_id', 'users.id')
            ->where('isPediatre','=', 0)
            ->paginate(5);
        return view('forum', compact(['discussions']));

    }
}