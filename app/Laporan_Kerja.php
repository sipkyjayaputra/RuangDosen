<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan_Kerja extends Model
{
    //
    public function Semester(){
    	return $this->belongsTo('App\Semester');
    }

    public function File(){
    	return $this->hasMany('App\File');
    }

    public function Kategori(){
    	return $this->belongsTo('App\Kategori');
    }

    
    public function getUpdatedAtAttributes(){
        retrun \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
