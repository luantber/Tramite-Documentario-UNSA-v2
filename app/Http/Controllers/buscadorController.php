<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class buscadorController extends Controller
{
    public function areaBusqueda(Request $dato)
    {
    	if ($dato->input('nombre') == '') {
    		$respuesta = [];
    		return response()->json($respuesta);
    	}
    	$respuesta = DB::table('areas')
    				->select('areas.nombre','areas.area_id','areas.jefe_id','areas.descripcion','areas.id')
    				->where('areas.nombre','Like',$dato->input('nombre').'%')
                    ->orwhere('areas.id','Like',$dato->input('nombre').'%')
                    ->orwhere('areas.jefe_id','Like',$dato->input('nombre').'%')
    				->get();
    	return response()->json($respuesta);
    }

    public function empleadoBusqueda(Request $dato)
    {
    	if ($dato->input('nombre') == '') {
    		$respuesta = [];
    		return response()->json($respuesta);
    	}
    	$respuesta = DB::table('empleados')
    				->join('users','empleados.id_persona','=','users.id')
    				->join('areas','areas.id','=','empleados.id_area')
    				->join('cargos','cargos.id','=','empleados.id_cargo')
    				->join('estado_empleados','estado_empleados.id','=','empleados.id_estado')
    				->select('users.nombre as nombrepersona','apellido','email','areas.nombre as nombrearea','nombreCargo','estado_empleados.nombre as nombreestado','empleados.activo as eactivo','empleados.id')
    				->where('users.nombre','Like',$dato->input('nombre').'%')
    				->orwhere('empleados.id','Like',$dato->input('nombre').'%')
                    ->orwhere('users.apellido','Like',$dato->input('nombre').'%')
                    ->orwhere('users.dni','Like',$dato->input('nombre').'%')
                    ->orwhere('areas.nombre','Like',$dato->input('nombre').'%')
                    ->orwhere('cargos.nombreCargo','Like',$dato->input('nombre').'%')
    				->get();
    		return response()->json($respuesta);
    }

    public function usuarioBusqueda(Request $dato)
    {
    	if ($dato->input('nombre') == '') {
    		$respuesta = [];
    		return response()->json($respuesta);
    	}
    	$respuesta = DB::table('users')
    				->select('nombre','apellido','email','dni','activo','id')
    				->where('nombre','Like',$dato->input('nombre').'%')
    				->orwhere('id','Like',$dato->input('nombre').'%')
                    ->orwhere('dni','Like',$dato->input('nombre').'%')
                    ->orwhere('apellido','Like',$dato->input('nombre').'%')
    				->get();
    		return response()->json($respuesta);
    }

    public function tramiteBusqueda(Request $dato)
    {
    	if ($dato->input('nombre') == '') {
    		$respuesta = [];
    		return response()->json($respuesta);
    	}
    	$respuesta = DB::table('tramites')
    				->join('areas','tramites.area_id','=','areas.id')
    				->join('users','tramites.persona_id','=','users.id')
    				->join('tipo_tramites','tramites.tipo_tramite_id','tipo_tramites.id')
    				->join('estado_tramites','tramites.estado_tramite_id','estado_tramites.id')
    				->select('tramites.id as tid','tramites.nro_expediente as expe','users.nombre as pnom','users.apellido as pape','users.dni as pdni','areas.nombre as anom','tipo_tramites.nombre as tnom','tipo_tramites.descripcion as tdes','estado_tramites.nombre as enom','estado_tramites.descripcion as edes','tramites.asunto as asun','tramites.prioridad as prio','tramites.created_at as tcr')
    				->where('tramites.id','Like',$dato->input('nombre').'%')
    				->orwhere('users.nombre','Like',$dato->input('nombre').'%')
    				->orwhere('tramites.created_at','Like',$dato->input('nombre').'%')
    				->orwhere('tramites.nro_expediente','Like',$dato->input('nombre').'%')
                    ->orwhere('users.apellido','Like',$dato->input('nombre').'%')
                    ->orwhere('users.dni','Like',$dato->input('nombre').'%')
                    ->orwhere('areas.nombre','Like',$dato->input('nombre').'%')
    				->get();
    		return response()->json($respuesta);
    }
}
