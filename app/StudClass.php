<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudClass extends Model
{
    //
   protected $fillable=[
   	'class_name',
   	'school_id',
   ]; 

    public function schools()
    {
        return $this->belongsTo('App\School');
    } 
    
}
