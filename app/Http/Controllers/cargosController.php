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

    

    public function guardar(Request $datos,$id){
    	$editar = Cargo::find($id);
    	$editar ->nombreCargo = $datos->nombreCargo;
    	$editar ->descripcion = $datos->descripcion;
    	$editar ->save();
    	return redirect('cargos');


    }	

    public function editar($id){
    	$encontrado = Cargo::find($id);
    	if($encontrado == null){
    		echo "error NO EXISTE EL CARGO";
    	}
    	return view('cargos.editar',['cargo'=>$encontrado]);
    }


    

    public function eliminar($id){
    	$encontrado = Cargo::find($id);
    	if ($encontrado == null) {
            echo "error NO EXISTE EL CARGO";
        }
      return view('cargos.eliminar',['eliminado'=>$encontrado]);
    	
    }

    public function eliminado(Request $datos){
    	$eliminado = Cargo::find($datos->id);
    	$eliminado->delete();
    	return redirect('cargos');
    }

}
