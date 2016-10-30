<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoTramite extends Model
{
   	public function tramite()
    {
    	return $this->hasOne('App\Tramite','estado_tramite_id','id');
    }
}
