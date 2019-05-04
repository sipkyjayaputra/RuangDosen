<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    public function Laporan_Kerja(){
    	return $this->belongsTo('App\Laporan_Kerja');
    }
}
