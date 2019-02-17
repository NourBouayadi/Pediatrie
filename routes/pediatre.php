<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('pediatre')->user();

    //dd($users);

    return view('pediatre.home');
})->name('home');

