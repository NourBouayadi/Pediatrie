<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    /**
     * Get the messages for the forum discussion.
     */
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
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
