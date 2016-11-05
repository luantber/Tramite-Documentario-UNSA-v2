<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    public function nota_empleado()
    {
    	return $this->belongsTo('App\Empleado','empleado_id','id');
    }

    public function nota_area()
    {
    	return $this->belongsTo('App\Area','area_id','id');
    }
    
    //
}