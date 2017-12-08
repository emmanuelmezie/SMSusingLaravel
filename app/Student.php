<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
    	'name',
    	'sex',
    	'state_of_origin',
    	'dob',
    	'admission_date',
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
        return $this->belongsTo('App\StudClass');
    } 
}
