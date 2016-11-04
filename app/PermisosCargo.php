<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermisosCargo extends Model
{
    //
    protected $table='permisos_cargos';
    protected $fillable=['cargo_id','areas','cargos','usuarios','empleados','panel','tramites'];

    public function cargo()
    {
    	return $this->belongsTo('App\Cargo','cargo_id','id');
    }
}
