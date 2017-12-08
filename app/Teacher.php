<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
    	'teacher_name',
    	'school_id',
    	'class_id',
    	'user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    } 

    public function schools()
    {
        return $this->belongsTo('App\School');
    } 

    public function classes()
    {
        return $this->hasMany('App\StudClass');
    } 
}
