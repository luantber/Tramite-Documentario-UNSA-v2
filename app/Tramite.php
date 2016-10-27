<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $table='tramites';

    protected $fillable=['prioridad','entregado','area_id','empleado_id','persona_id'];

    public function area()
    {
        return $this->belongsTo('App\Area','area_id','id');
    }

    public function persona()
    {
    	return $this->belongsTo('App\Persona','persona_id','id');
    }


    public function empleado()
    {
    	return $this->belongsTo('App\Empleado','empleado_id','id');
    }

    public function movimientos()
    {
    	return $this->hasMany('App\Movimiento','tramite_id','id');
    }

    public function tipoTramite()
    {
    	return $this->hasOne('App\TipoTramite','tramite_id','id');
    }	
   
   	public function estado()
    {
    	return $this->hasOne('App\Estado','tramite_id','id');
    }
}
