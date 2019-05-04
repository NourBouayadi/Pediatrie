<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
 
    public function pediatre()
    {
        return $this->belongsTo('App\Pediatre');
    }

    public function getAuthor()
    {
        return User::find($this->user_id)->name;
    }
      public function getReponse()
    {
        return Reponse::where("pediatre_id","=",$this->id)->get();
    }
}
