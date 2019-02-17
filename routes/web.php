<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/forum', function () {
    return view('forum');
});
Route::get('/inscrire', function () {
    return view('inscrire');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/charte', function () {
    return view('charte');
});
Route::get('contact', function () {
    return view('contact');
});