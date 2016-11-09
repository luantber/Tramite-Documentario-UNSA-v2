<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class estadisticaController extends Controller
{
	public function areas()
	{
		$dato = DB::table('areas')
				->select('id','nombre')
				->where('area_id','=',0)
				->orwhere('area_id','=',null)
				->orwhere('area_id','=',NULL)
				->get();
		//$dato = "ademirvillena";
		return view('estadisticas.parea',["info"=>$dato]);
	}
	public function areasConsultar(Request $datos)
	{
		/*$dato = DB::table('areas')
				->select('nombre','id')
				->where('area_id','=',$datos -> idArea)
				->get();*/
		//Consultar cantidad de tramites en el area por estado del tramite
		$dato = DB::table('tramites')
				->select('id','estado_tramite_id')
				->where('area_id','=',$datos -> idArea)
				->get();
		$estados = DB::table('tramites')
				->join('estado_tramites','tramites.estado_tramite_id','=','estado_tramites.id')
				->select(DB::raw('DISTINCT(estado_tramite_id)'),'nombre')
				->where('area_id','=',$datos -> idArea)
				->get();
		//return $estados;
		//return $dato;
		//Aqui termina esa consulta

		//Consultar cantidad de empleados del area por estado
		$dato2 = DB::table('empleados')
				->select('id','id_estado')
				->where('id_area','=',$datos -> idArea)
				->get();
		$estados2 = DB::table('empleados')
				->join('estado_empleados','empleados.id_estado','=','estado_empleados.id')
				->select(DB::raw('DISTINCT(id_estado)'),'nombre')
				->where('id_Area','=',$datos -> idArea)
				->get();

		//return $dato2;
		//return $estados2;
		//Aqui termina esa consulta

		//Consultar cantidad de tramites en el area por tipo del tramite
		$dato3 = DB::table('tramites')
				->select('id','tipo_tramite_id')
				->where('area_id','=',$datos -> idArea)
				->get();
		$tipos1 = DB::table('tramites')
				->join('tipo_tramites','tramites.tipo_tramite_id','=','tipo_tramites.id')
				->select(DB::raw('DISTINCT(tipo_tramite_id)'),'nombre')
				->where('area_id','=',$datos -> idArea)
				->get();

		//return $dato3;
		//return $tipos1;
		//Aqui termina esa consulta 
		return view('estadisticas.resultado',["est1"=>$dato, "cant1" => count($dato),"estado"=>$estados,"cant2"=>count($estados), "est2"=>$dato2,"cant3"=>count($dato2),"estado2"=>$estados2,"cant4"=>count($estados2),"est3"=>$dato3,"cant5"=>count($dato3),"tipo1"=>$tipos1,"cant6"=>count($tipos1)]);	
	}
	public function empleados()
	{
		$dato = DB::table('empleados')
				->join('users', 'empleados.id_persona', '=', 'users.id')
				->select('nombre','apellido','id_persona')
				->get();
		return view('estadisticas.pempleado',["info"=>$dato]);
	}
	public function empleadosConsultar(Request $datos)
	{
		$dato1 = DB::table('tramites')
				->join('empleados','empleados.id','=','tramites.empleado_id')
				->join('tipo_tramites','tipo_tramites.id','=','tramites.tipo_tramite_id')
				->join('estado_tramites','estado_tramites.id','=','tramites.estado_tramite_id')
				->join('users','empleados.id_persona','=','users.id')
				->select('users.nombre','tipo_tramites.nombre as tnombre','estado_tramites.nombre as enombre')
				->where('empleados.id','=',$datos->id_persona)
				->get();

		$tipo = DB::table('tipo_tramites')
				->select(DB::raw('DISTINCT(nombre)'))
				->get();

		$estado = DB::table('estado_tramites')
				->select(DB::raw('DISTINCT(nombre)'))
				->get();

		return view('estadisticas.empleadoresultado',["datos"=>$dato1,"tipos"=>$tipo,"estados"=>$estado]);
	}
	public function usuarios()
	{
		$dato = DB::table('users')
				->select('nombre','apellido','id')
				->get();
		return view('estadisticas.pusuario',["info"=>$dato]);
	}
	public function usuariosConsultar(Request $datos)
	{
		$dato1 = DB::table('tramites')
				->join('tipo_tramites','tipo_tramites.id','=','tramites.tipo_tramite_id')
				->join('estado_tramites','estado_tramites.id','=','tramites.estado_tramite_id')
				->select('tramites.persona_id','tipo_tramites.nombre as tnombre','estado_tramites.nombre as enombre')
				->where('tramites.persona_id','=',$datos->id_persona)
				->get();

		$tipo = DB::table('tipo_tramites')
				->select(DB::raw('DISTINCT(nombre)'))
				->get();

		$estado = DB::table('estado_tramites')
				->select(DB::raw('DISTINCT(nombre)'))
				->get();
		return view('estadisticas.usuarioresultado',["datos"=>$dato1,"tipos"=>$tipo,"estados"=>$estado]);
	}
}	