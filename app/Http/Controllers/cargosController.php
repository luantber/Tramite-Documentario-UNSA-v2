<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cargo;

class cargosController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new Cargo;
    	$nuevo->nombreCargo = $datos->nombreCargo;
    	$nuevo->descripcion = $datos->descripcion;

    $nuevo->save();
    return redirect('cargos');
    }


    public function todos(){
    	$cargos = Cargo::all(); 
    	return response()->json($cargos);
    	
    }

    public function editar (Request $datos){


    	$encontrar = Cargo::find($datos->IDcargo);
    	$encontrar->nombreCargo = $datos->newNombreCargo;
    	$encontrar->descripcion = $datos->newDescripcion;
    	$encontrar->save();
   		return view('cargos.mostrarCargo');
//    	dd($encontrar);
    }

    public function eliminar(){
    	$borrado = Cargo::find(1);
    	$borrado->delete();	
    }

}
