<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    public function tramite()
    {
    	return $this->belongsTo('App\Tramite','tramite_id','id');
    }
}
