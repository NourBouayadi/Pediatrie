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


Route::get('/ficheMaladie', function () {
    return view('ficheMaladie');
});

Route::get('/forum', function () {
    return view('forum');
});


/*Route::get('/login', function () {
    return view('login');
});
*/
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/charte', function () {
    return view('charte');
});


/*Route::get('contact', function () {
    return view('contact');
});
*/

Auth::routes();
Route::post('registerPediatre', 'Auth\RegisterController@registerPediatre')->name('registerPediatre');

Route::get('propos', function () {
    return view('propos');
});

Route::get('/dashboard', 'AdminController@index')->middleware('auth');
Route::get('/dashboard/{id}', ['as' => 'dashboard', 'uses' => 'AdminController@approve'])->middleware('auth');
Route::delete('dashboard/{id}', 'AdminController@destroy')->middleware('auth');
Route::get('forum/show/{id}','DiscussionController@show')->middleware('auth');
Route::get('form/fav/{id}', 'DiscussionController@fav')->middleware('auth');
Route::get('search/', 'DiscussionController@search')->middleware('auth');


Route::resource('forum', 'DiscussionController')->middleware('auth');
Route::post('forum/show/{id}', 'MessageController@store')->middleware('auth');
Route::delete('forum/show/{id}', 'MessageController@destroy')->middleware('auth');



Route::resource('ficheMaladie', 'FicheController')->middleware('auth');
Route::post('ficheMaladie/show/{id}', 'FicheController@store')->middleware('auth');
Route::delete('ficheMaladie/show/{id}', 'FicheController@destroy')->middleware('auth');



/**Route pour le profile pediatre*/
Route::resource('/forum/profile/{id}','DiscussionController')->middleware('auth');

/**Routes pour les catégories*/
Route::get('/forum/categorie/{id}','DiscussionController@indexParCategorie')->middleware('auth');

/***/
/*Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');



});

Route::group(['prefix' => 'pediatre'], function () {
  Route::get('/login', 'PediatreAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'PediatreAuth\LoginController@login');
  Route::post('/logout', 'PediatreAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'PediatreAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'PediatreAuth\RegisterController@register');

  Route::post('/password/email', 'PediatreAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'PediatreAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'PediatreAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'PediatreAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'mom'], function () {
  Route::get('/login', 'MomAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MomAuth\LoginController@login');
  Route::post('/logout', 'MomAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MomAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MomAuth\RegisterController@register');

  Route::post('/password/email', 'MomAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MomAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MomAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MomAuth\ResetPasswordController@showResetForm');
});

*/