<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $table='tramites';

    protected $fillable=['prioridad','entregado','area_id'];

    public function area()
    {
        return $this->belongsTo('App\Area','area_id','id');
    }
   
}
