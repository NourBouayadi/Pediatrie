<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
 
    public function pediatre()
    {
        return $this->belongsTo('App\Pediatre');
    }

    public function getAuthor(){
        return User::find($this->profil_id)->name;
    }
      public function getProfil()
    {
        return Reponse::where("profil_id","=",$this->id)->get();
    }
}
