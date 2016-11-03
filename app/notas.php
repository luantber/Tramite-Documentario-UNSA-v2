<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    public function nota_empleado()
    {
    	return $this->belongsTo('App\Empleado','empleados_id','id');
    }

    public function nota_area()
    {
    	return $this->belongsTo('App\Area','areas_id','id');
    }
    
    //
}