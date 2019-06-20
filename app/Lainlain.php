<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lainlain extends Model
{
    //
    
    public function getUpdatedAtAttributes(){
    	retrun \Carbon\Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
