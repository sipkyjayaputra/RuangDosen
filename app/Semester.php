<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    //
    public function Laporan_kerja(){
    	return $this->hasMany('App\Laporan_kerja');
    }
}
