<?php

namespace App;

use App\Notifications\MomResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mom extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
        $this->notify(new MomResetPassword($token));
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
    public function discussions()
    {
        return $this->hasMany('App\Discussion');
    }
    public function id(){
        return $this->id;
    }
    public function name(){
        return $this->name;
    }
}
