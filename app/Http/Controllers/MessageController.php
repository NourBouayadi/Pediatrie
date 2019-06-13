<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Favori;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        if (\Auth::user()->type() == "mom" || \Auth::user()->type() == "modratrice" || \Auth::user()->type() == "pediatre") {
            $discussion = Discussion::find($request->input('discussion_id'));
            if (!$discussion->isLocked) {
                $message = new Message();

                $message->description = $request->input('description');
                $message->discussion_id = $request->input('discussion_id');
                $message->user_id = \Auth::user()->id;

                $message->save();
                // récupérer les discussions ayant une nvl notif (veririfer que l'auth connecté n'est pas celui qui a ecrit la discussion
                $discussion = Discussion::find($message->discussion_id);
                if (\Auth::user()->id != $discussion->user_id) {
                    $discussion->isRead = 0;
                    $discussion->save();
                    $fav = Favori::where('discussion_id', '=', $message->discussion_id)->where('user_id', '!=', \Auth::user()->id)
                        ->update(['isRead' => 0]);


                }
            }
            session()->flash('success', 'la message a été bien enregistrée');
        }//TODO notify favoris
        return redirect()->back();

    }

    public function edit($id)
    {
        $message = Message::find($id);
        $discussion = Discussion::find($message->discussion_id);
        if (\Auth::user()->id == $message->user_id && !$discussion->isLocked) {
            return view('message.edit', ['message' => $message]);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        //$discussion = Discussion::where('id', '=', $id)->get();
        $discussion = Discussion::find($message->discussion_id);
        if (\Auth::user()->id == $message->user_id && !$discussion->isLocked) {
            $message->description = $request->input('description');
            $message->save();
        }
        return redirect('/forum/show/' . $message->discussion_id);
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $discussion = Discussion::find($message->discussion_id);
        $discussion_id = $message->discussion_id;
        if(!$discussion->isLocked) {
            if(\Auth::user()->id == $message->user_id || \Auth::user()->type() == "modratrice") {
                $message->delete();
            }
        }
        return redirect('forum/show/' . $discussion_id);
    }
}
