<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = [
    	'name',
        'slogan',
    	'description',
    	'address',
    	'school_head',
    	'user_id',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function studclasses()
    {
        return $this->hasMany('App\StudClass');
    }

    public function subschools()
    {
        return $this->hasMany('App\SubSchool');
    }

}
