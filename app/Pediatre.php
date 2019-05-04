<?php

namespace App;

use App\Notifications\PediatreResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pediatre extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $ville = [1=>"Adrar",  ];
    protected $fillable = [
            'name', 'email', 'password','description','date_debut_carriere', 'tel1', 'tel2','specialite','adresse_cabinet', 'longitude', 'latitude'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PediatreResetPassword($token));
    }

   

    public function reponses()
    {
        return $this->hasMany('App\Reponse');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }


}
