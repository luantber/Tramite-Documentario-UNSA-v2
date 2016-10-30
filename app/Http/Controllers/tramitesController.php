<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Tramite;
use App\Empleado;
use App\TipoTramite;
use App\EstadoTramite;
use App\Documento;
use App\User;
use App\Movimiento; 



class tramitesController extends Controller
{
    //
    public function create(Request $datos)
    {

        /*
        //obtenemos a la persona dado un dni
        $persona=Persona::all()->where('dni',$datos->dni)->first();
    	//obtenemos el area dado su nombre
    	$area_destino= Area::all()->where('nombre',$datos->destino)->first();
        //obtenemos el estado inicial
        //-----------------------FALTA MODIFICAR ESTO
        $estado=EstadoTramite::all()->where('id',1);

        //-----------------------AQUI FALTA EL AREA DE MESA DE PARTES
        $id_mesa=1;
        $mesa_de_partes= Area::find($id_mesa);

        //obtenemos el tipo de tramite dado su nombre
    	$tipo_tramite= TipoTramite::all()->where('nombre',$datos->tipoTramite)->first();
        //asunto y prioridad
    	$asunto= $datos->asunto;
    	$prioridad= $datos->prioridad;
    	
    	

    	//crear Tramite;
    	$tramite=new Tramite;
    	$tramite->prioridad=$prioridad;
    	$tramite->asunto=$asunto;
        $tramite->area()->associate($area_destino);
        $tramite->tipoTramite()->associate($tipo_tramite);
        $tramite->persona()->associate($persona);
        $tramite->estado()->associate($estado);
    	$tramite->save();

    	//crear movimiento
    
    */
        $tramite=new Tramite;
        $tramite->prioridad=4;
        $tramite->asunto='sasas';
        
        $tramite->save();
    }

    public function createGet(){
        $tipoTramites = TipoTramite::all();

        return view('tramites.crear',["tipos"=>$tipoTramites]);
    }

    public function todos()
    {
        $tramites = Tramite::all();
        return response()->json($tramites);
    }

    
}
