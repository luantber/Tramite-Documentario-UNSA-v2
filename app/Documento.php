<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //
    public function tramite()
    {
    	return $this->belongsTo('App\Tramite','tramite_id','id');
    }

	public function tipoDocumento()
    {
    	return $this->belongsTo('App\TipoDocumento','tipo_documento_id','id');
    }    
}
