<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notas;

class notasController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new Notas ;
    	$nuevo ->nombre = $datos->nombre;
    	$nuevo ->descripcion = $datos->descripcion;
    	$nuevo ->id_area = $datos ->idarea;
    	$nuevo ->id_empleados = $datos ->idempleados;
    	$nuevo ->save();
    	return redirect('notas/todos');
    }

    public function todos_Area(){
    	$notas = Notas::all();
    	return response()->json($notas);
    }

    public function todos_empleado(){
    	$notas = Notas::all();
    	return response() ->json($notas);
    }
    public function show ($id){
    	$encontrado = Notas::find($id);
    	return view('nota.show',['notas'=>$encontrado]);
    }

    public function editar($id){
    	$encontrado = Notas::find($id);
    	return view('nota.editar',['notas'=>$encontrado]);
    }

    public function guardar(Request $datos,$id){
    	$editar = Notas::find($id);
    	$editar->nombre = $datos->nombre;
    	$editar->descripcion = $datos->descripcion;
    	$editar->id_area = $datos->idarea;
    	$editar->id_empleados = $datos->idempleados;
    	$editar->save();
    	return redirect('notas/todos/'.$id);
    }

    public function eliminar($id){
    	$encontrado = Notas::find($id);
    	return view('nota.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){

    	$eliminado = Notas::find($datos->id);
    	$eliminado->delete();
    	return redirect('notas/todos');
    }
    //
}
