<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
    	'event_name',
    	'description',
    	'user_id',
    ];

    public function users(){
    	$this->belongsToMany('App\User')
    }
}
