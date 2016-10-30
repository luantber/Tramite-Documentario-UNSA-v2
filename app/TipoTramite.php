<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTramite extends Model
{
    //
    public function tramite()
    {
    	return $this->hasMany('App\Tramite','tipo_tramite_id','id');
    }
}
