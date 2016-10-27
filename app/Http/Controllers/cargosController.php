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
    return view('crearCargo');
    dd($nuevo);
    }


    public function editar (Request $datos){


    	$encontrar = Cargo::find($datos->IDcargo);
    	$encontrar->nombreCargo = $datos->newNombreCargo;
    	$encontrar->descripcion = $datos->newDescripcion;
    	$encontrar->save();
   		return view('editarCargo');
//    	dd($encontrar);
    }

    public function eliminar(){
    	$borrado = Cargo::find(1);
    	$borrado->delete();	
    }

    public function mostrar(){
    	$mostrado = Cargo::find(4);
    	$mostrado2 = Cargo::find(5);
    	$Amostrar = response()->json([$mostrado,$mostrado2]);
    	//dd($Amostrar);
//    	echo ('Amostrar='.$Amostrar);

    	$cargos = Cargo::all();
    	$todos = response()->json($cargos);
    	//dd($cargos);
    	echo ('todos = '.$todos);
    	//dd($todos);
    	return view('cargos.mostrarCargo');
    }
}
