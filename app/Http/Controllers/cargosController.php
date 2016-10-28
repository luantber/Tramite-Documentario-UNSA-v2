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

    public function guardar(Request $datos,$id){
    	$editar = Cargo::find($id);
    	$editar ->nombreCargo = $datos->nombreCargo;
    	$editar ->descripcion = $datos->descripcion;
    	$editar ->save('cargos');

    	return redirect();

    }	

    public function editar($id){
    	$encontrado = Cargo::find($id);
    	if($encontrado == null){
    		echo "error NO EXISTE EL CARGO";
    	}
    	return view('cargos.editar',['cargo'=>$encontrado]);
    }


    }

    public function eliminar($id){
    	$bencontrado = Cargo::find($id);
    	if ($encontrado == null) {
            echo "error NO EXISTE EL CARGO";
//            return view ('errors.noExiste');
        }
      $encontrado->delete();
      return redirect('cargos');
    	
    }

}
