<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

    public function tienePermisos($cargo)
    {
        //dd($cargo);
        $ar=$this->cargo->permisosCargo->toArray();

        array_shift($ar);
        foreach ($ar as $key=>$a) {
            //dd($key,$a);
            if ($a==1 and $key==$cargo)
                return true;
        }
        return false;
    }
    
    public function isJefe(){
        dd(Auth::user()->empleado->area->jefe_id);
        if(Auth::user()->empleado->id == Auth::user()->area->jefe_id)
            return true;
        return false;
    }

}
