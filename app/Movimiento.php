<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //

    //protected $table=movimientos;
    //protected $fillable=['tramite_id','area_destino_id','area_remitente_id'];

    public function tramite()
    {
    	return $this->belongsTo('App\Tramite','tramite_id','id');
    }

    public function areaDestino()
    {
    	return $this->belongsTo('App\Area','area_destino_id','id');
    }

    public function areaRemitente()
    {
    	return $this->belongsTo('App\Area','area_remitente_id','id');
    }

}
