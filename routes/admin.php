<?php

Route::get('/home', function () {
    // récupere l'utilisateur courant authentifié...

    $users[] = Auth::user();

    $users[] = Auth::guard()->user();
    //spécifier l'instance du guard à utiliser
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('forum');
});

