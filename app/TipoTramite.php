<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTramite extends Model
{
    //
    public function tramite()
    {
    	return $this->belongsTo('App\Tramite','tramite_id','id');
    }
}
