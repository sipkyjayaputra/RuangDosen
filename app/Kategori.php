<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    public function Laporan_Kerja(){
    	return $this->hasMany('App\Laporan_Kerja');
    }
}
