<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function discussion()
    {
        return $this->belongsTo('App\Discussion');
    }
    public function mom()
    {
        return $this->belongsTo('App\Mom');
    }
    public function pediatre()
    {
        return $this->belongsTo('App\Pediatre');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
