<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Tramite;
use App\Empleado;
use App\TipoTramite;
use App\Estado;
use App\Documento;
use App\Persona;



class tramitesController extends Controller
{
    //
    public function create(Request $datos)
    {
    	$dni= $datos['dni'];
    	$area_destino= $datos['destino'];
    	$tipo_tramite= $datos['TipoTramite'];
    	$asunto= $datos['asunto'];
    	$prioridad= $datos['prioridad'];
    	$nombre_archivo=['archivo'];

    	echo $dni . '</br>';
    	//echo $area_destino . '</br>';
    	//echo $area_tramite . '</br>';
    	echo $asunto . '</br>';
    	echo $prioridad . '</br>';
    	//dd($nombre_archivo);
    	

    	//crear Tramite;
    	$tramite=new Tramite;
    	$tramite->prioridad=$prioridad;
    	$tramite->entregado=0;
    	$tramite->save();

    	//crear movimiento
    }

    public function createGet(){
        $tipoTramites = TipoTramite::all();

        return view('tramites.crear',["tipos"=>$tipoTramites]);
    }

    
}
