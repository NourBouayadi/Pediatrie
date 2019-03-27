<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Pediatre;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('inscrire');
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        //$this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    public function registerPediatre(Request $request)
    {
        $this->validatorPediatre($request->all())->validate();

        event(new Registered($user = $this->createPediatre($request->all())));
        //$this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    protected function validatorPediatre(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function createPediatre(array $data)
    {
        $user=new User();
        $user->name=$data['name'];
        $user->email= $data['email'];
        $user->password = Hash::make($data['password']);
        $user->isPediatre=true;
        $user->save();
        $pediatre=new Pediatre();
        $pediatre->id=$user->id;
        $pediatre->description=$data['description'];
        $pediatre->date_debut_carriere=$data['date_debut_carriere'];
        $pediatre->specialite=$data['specialite'];
        $pediatre->tel1=$data['tel1'];
        $pediatre->tel2=$data['tel2'];
        $pediatre->adresse_cabinet=$data['adresse_cabinet'];
        $pediatre->latitude=$data['latitude'];
        $pediatre->longitude=$data['longitude'];
        $pediatre->save();
        $file=Input::file('attestation');
        $file->move("attestations","".$user->id.".pdf");
        return $user;
    }
}
