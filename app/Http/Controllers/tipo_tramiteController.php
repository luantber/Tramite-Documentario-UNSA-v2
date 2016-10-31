<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoTramite;
use App\Tramite;
use App\Http\Requests;

class tipo_tramiteController extends Controller
{
    public function create(Request $datos){
    	
    	$nuevo = new TipoTramite;
    	$nuevo->nombre = $datos->nombretipo;
    	$nuevo->tramite_id = $datos->tramite_id;
    	$nuevo->descripcion = $datos->descripcion;

    	$nuevo->save();
      
      return redirect('tipo_tramite');  

    public function crearGet(){

		$ = TipoTramite::all();
		return view('tipo_tramite.crear',['tipo_tramite'=> $tipo_tramite]);
	}

	public function eliminar($id){
      $encontrado = Empleado::find($id);
      if ($encontrado == null) {
           return view ('creartramite');
        }
        return view('tipo_tramite.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
      $eliminado = TipoTramite::find($datos->id);
      $eliminado->delete();
      return redirect('Tramite');
    }
	
	public function editar($id)
    {
        $tipo_tramite = TipoTramite::find($id);
        return view('tipo_tramite.editar',['tiptra'=>$tipo_tramite]);
    }

    public function guardar($id,Request $datos)
    {
        $tipo_tramite = TipoTramite::find($id);

        $tipo_tramite->nombre=$datos->nombretipo;
        $tipo_tramite->descripcion=$datos->descripcion;
        $tipo_tramite->save();
        return redirect('tipo_tramite');
    }
}
