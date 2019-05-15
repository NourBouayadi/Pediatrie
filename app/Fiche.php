<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
   

    protected $fillable = [
        'titre', 'description','date_pub', 'created_at'
    ];

    public function fiches()
    {
        return $this->hasMany('App\Fiche');
    } 
    public function pediatre()
    {
        return $this->belongsTo('App\Pediatre');
    }
  
    public function getFiches()
    {
        return Fiche::where("fiche_id","=",$this->id)->get();
    }
    public function getAuthor()
    {
        return User::find($this->user_id)->name;
    }
}
