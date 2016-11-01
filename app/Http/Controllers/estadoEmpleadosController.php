<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EstadoEmpleado;

class estadoEmpleadosController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new EstadoEmpleado ;
    	$nuevo ->nombre = $datos->nombre;
    	$nuevo ->descripcion = $datos->descripcion;
    	$nuevo ->save();
    	return redirect('estadosEmpleados');
    }

    public function todos(){
    	$estados = EstadoEmpleado::all();
    	return response()->json($cargos);
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
    	return redirect('estadosEmpleados');
    }

    public function eliminar($id){
    	$encontrado = EstadoEmpleado::find($id);
    	return view('estadosEmpleados.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
    	dd($datos);
    	$eliminado = EstadoEmpleado::find($datos->id);
    	$eliminado->delete();
    	return redirect('estadosEmpleados');
    }
}
