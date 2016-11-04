<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\EstadoTramite;

class estadosTramitesController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new EstadoTramite ;
    	$nuevo ->nombre = $datos->nombre;
    	$nuevo ->descripcion = $datos->descripcion;
        if($datos->show=='Mostrar'){
            $nuevo->show=1;
        }
        else{
            $nuevo->show=0;
        }
    	$nuevo ->save();
    	return redirect('tramites/estados');
    }

    public function todos(){
    	$estados = EstadoTramite::all();
    	return response()->json($estados);
    }

    public function show ($id){
    	$encontrado = EstadoTramite::find($id);
    	return view('estadosTramites.show',['estado'=>$encontrado]);
    }

    public function editar($id){
    	$encontrado = EstadoTramite::find($id);
    	return view('estadosTramites.editar',['estado'=>$encontrado]);
    }

    public function guardar(Request $datos,$id){
    	$editar = EstadoTramite::find($id);
    	$editar->nombre = $datos->nombre;
    	$editar->descripcion = $datos->descripcion;
    	$editar->save();
    	return redirect('tramites/estados/'.$id);
    }

    public function eliminar($id){
    	$encontrado = EstadoTramite::find($id);
    	return view('estadosTramites.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
    	//dd($datos);
		$encontrado = EstadoTramite::find($datos->id);
    	$encontrado->delete();
    	return redirect('tramites/estados');
    }
}
