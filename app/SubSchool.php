<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSchool extends Model
{
    //
    protected $fillable=[
   	'name',
    'school_head',
   	'school_id',
   	'user_id',
   ];

    public function user(){
      return $this->belongsToMany('App\User');
    }

    public function schools()
    {
        return $this->belongsTo('App\School');
    } 
}
