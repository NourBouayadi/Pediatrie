<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = new Message();
        $message->description = $request->input('description');
        $message->discussion_id = $request->input('discussion_id');
        $message->mom_id = \Auth::guard('mom')->user()->id();
        $mom_name = \Auth::guard('mom')->user()->id();
        $message->save();
        // récupérer les discussions ayant une nvl notif
        $discussion = Discussion::find($message->discussion_id);
        $discussion->isRead= 1 ;
        $discussion->save();

        session()->flash('success', 'la message a été bien enregistrée');

        return redirect()->back();

    }

    public function edit( $id)
    {
        $message = Discussion::find($id);
        return view('discussion.edit', ['discussion' => $message]);
    }

    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        $message->titre = $request->input('titre');
        $message->description = $request->input('description');

        $message->categorie_id = $request->input('categorie_id');
        $message->pediatre_id = $request->input('pediatre_id');
        $message->admin_id = $request->input('admin_id');
        $message->mom_id = $request->input('admin_id');

        $message->save();
        return redirect('messages')->with('success', ' mise à jour étudiant');
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $discussion_id=$message->discussion_id;
        $message->delete();
        return redirect('forum/show/'.$discussion_id);
    }
}
