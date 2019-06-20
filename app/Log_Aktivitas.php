<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_Aktivitas extends Model
{
    //
    public function getCreatedAtAttribute(){
    	//retrun \Carbon\Carbon::parse($this->attributes['created_at'])->format('d, M Y H:i');
    }
}
