<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
	protected $table= 'areas';
	protected $fillable=['nombre','descripcion'];

    public function tramites()
    {
    	return $this->hasMany('App\Tramite','area_id','id');
    }

    public function empleado(){
    	return $this->hasMany('App\Tramite','id_area','id');
    }
}
