<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armoniza extends Model
{
    public function armoniza (){
    	return $this->belongsToMany('App\Role');
	
}

}
