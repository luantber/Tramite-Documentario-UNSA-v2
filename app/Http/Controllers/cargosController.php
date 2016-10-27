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
    //dd($nuevo);
    return redirect()->action('cargosController@mostrar');
//    return view('cargos.mostrarCargo');
    //dd($nuevo);
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

    public function mostrar(){
    	$cargos = Cargo::all();
    	$todos = response()->json($cargos);
    	return($todos);
    	
    }
}
