<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEmpleado extends Model
{
    public function empleado(){
    	return $this->hasMany('App\Empleado','id_estado','id');
    }
}
