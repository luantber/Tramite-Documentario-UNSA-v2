<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function empleado(){
    	return $this->hasMany('App\Empleado','id_cargo');
    }
    
}
