<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('mom')->user();

    //dd($users);

    return view('mom.home');
})->name('home');

