<?php

namespace App\Http\Controllers\PediatreAuth;

use App\Pediatre;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Barryvdh\Debugbar\Facade as Debugbar;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/pediatre/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('pediatre.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:pediatres',
            'password' => 'required|min:6|confirmed',
            'description' => 'nullable|alpha_dash|max:255',
            'date_debut_carriere' => 'required',
            'tel1' => 'required|digits_between:9,10',
            'tel2' => 'digits_between:9,10',
            'specialite' => 'required',
            'adresse_cabinet' => 'nullable',
            'latitude' => 'numeric|nullable',
            'longitude' => 'numeric|nullable',
            'attestation' => 'required|mimes:pdf'

        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Pediatre
     */
    protected function create(array $data)
    {
        Debugbar::info($data);
        $file = Input::file('attestation');
        $file->move("attestations",str_replace('@','.',$data['email']).'.pdf');
        return Pediatre::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'description' => $data['description'],
            'date_debut_carriere' => $data['date_debut_carriere'],
            'tel1' => $data['tel1'],
            'tel2' => $data['tel2'],
            'specialite' => $data['specialite'],
            'adresse_cabinet' => $data['adresse_cabinet'],
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],

        ]);
    }
/** index**/



    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('pediatre.auth.register');
    }


    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('pediatre');
    }
}
