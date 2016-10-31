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
    	return $this->belongsTo('App\Cargo','id','id_cargo');
    } 

    public function area(){
    	return $this->belongsTo('App\Area','id','id_area');
    }

    

}
