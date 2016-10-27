<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table='empleados';
    protected $fillable=['id'];

    public function user() 
    { 
        return $this->hasOne('App\User','id'); 
    } 

    

}
