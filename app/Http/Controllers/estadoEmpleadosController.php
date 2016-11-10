<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\EstadoEmpleado;

class estadoEmpleadosController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new EstadoEmpleado ;
    	$nuevo ->nombre = $datos->nombre;
    	$nuevo ->descripcion = $datos->descripcion;

        $estado = DB::table('estado_empleados')->where('nombre',$datos->nombre)->first();
        $mensaje = "";
        if($estado){
            $mensaje = "Ya existe un Estado Empleado con este nombre ".$datos->nombre;
            return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"nombre"]);
        }
        $mensaje = "El estado para empleados ".$datos->nombre." fue creado con éxito !";

    	$nuevo ->save();
    	return response()->json(["respuesta"=>true,"data"=>$mensaje]);
    }

    public function todos(){
    	$estados = EstadoEmpleado::all();
    	return response()->json($estados);
    }

    public function show ($id){
    	$encontrado = EstadoEmpleado::find($id);
    	return view('estadosEmpleados.show',['estado'=>$encontrado]);
    }

    public function editar($id){
    	$encontrado = EstadoEmpleado::find($id);
    	return view('estadosEmpleados.editar',['estado'=>$encontrado]);
    }

    public function guardar(Request $datos,$id){
    	$editar = EstadoEmpleado::find($id);
    	$editar->nombre = $datos->nombre;
    	$editar->descripcion = $datos->descripcion;
    	$editar->save();
    	return redirect('empleados/estados/'.$id);
    }

    public function eliminar($id){
    	$encontrado = EstadoEmpleado::find($id);
    	return view('estadosEmpleados.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
    	//dd($datos);
    	$eliminado = EstadoEmpleado::find($datos->id);
    	$eliminado->delete();
    	return redirect('empleados/estados');
    }
}
