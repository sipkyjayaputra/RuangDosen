<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    //
    public function User(){
    	return $this->belongsTo('App\User');
    }

    public function Semester(){
    	return $this->hasMany('App\Semester');
    }

    public function Kategori(){
    	return $this->hasMany('App\Kategori');
    }
}
