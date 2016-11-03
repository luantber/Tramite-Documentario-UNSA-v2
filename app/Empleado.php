<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table='empleados';
    protected $fillable=['id'];

    public function user() 
    { 
        return $this->belongsTo('App\User','id_persona','id'); 
    }

    public function cargo(){
    	return $this->belongsTo('App\Cargo','id_cargo','id');
    } 

    public function area(){
    	return $this->belongsTo('App\Area','id_area','id');
    }

    public function estado(){
        return $this->belongsTo('App\EstadoEmpleado','id_estado','id');
    }

    

}
