<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id',
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empleado() 
    { 
        return $this->hasOne('App\Empleado','id_persona','id'); 
    }

    public function tramite(){
        return $this->hasMany('App\Tramite','persona_id');
    } 


    /* Funcion Es mi Area ??*/
    public function isMyArea($idArea){
        if($idArea == $this->empleado->id_area) return true;
        return false;
    }

    



    /* Funciones para saber que permisos tendra el usuario por CARGO*/

    public function Pareas(){
        if($this->empleado->cargo->permisoscargo->areas) return true;
        return false;
    }


    public function Pcargos()
    {
        if($this->empleado->cargo->permisoscargo->cargos) return true; 
        return false;
    }

    public function Pusuarios()
    {
        if($this->empleado->cargo->permisoscargo->usuarios) return true; 
        return false;
    }

    public function Pempleados()
    {
        if($this->empleado->cargo->permisoscargo->empleados) return true; 
        return false;
    }

    public function Ppanel()
    {
        if($this->empleado->cargo->permisoscargo->panel) return true; 
        return false;
    }

    public function Ptramites()
    {
        if($this->empleado->cargo->permisoscargo) return true; 
        return false;
    }




}

