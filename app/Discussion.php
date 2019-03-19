<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    /**
     * Get the messages for the forum discussion.
     */

    protected $fillable = [
        'titre', 'description','date_pub', 'created_at'
    ];

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
    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
    public function getMessages()
    {
        return Message::where("discussion_id","=",$this->id)->get();
    }
    public function getAuthor(){
        return Mom::find($this->mom_id)->name;
    }
}
