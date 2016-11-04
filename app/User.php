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

    /* Funciones para saber que permisos tendra el usuario */

    public function isAreaInicial(){
        /* Cambiar aqui la fun correcta*/
        
        if ($this->empleado->area->nombre == "Mesa de Partes"){
            
            return true;
        }
        else {
            return false; 
        }
    }



}
