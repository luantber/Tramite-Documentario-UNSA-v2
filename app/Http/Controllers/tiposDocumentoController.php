<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoTramite;
use App\Tramite;
use App\Http\Requests;

class tiposDocumentoController extends Controller
{
    public function create(Request $datos){
    	
    	$nuevo = new TipoDocumento;
    	$nuevo->nombre = $datos->nomTipo;    	
    	$nuevo->descripcion = $datos->descripcion;

    	$nuevo->save();
      
      return redirect('tiposDocumento');  

    public function crearGet(){

		
		return view('tiposDocumento.crear');
	}
	/*
	public function eliminar($id){
      $encontrado = Empleado::find($id);
      if ($encontrado == null) {
           return view ('creartramite');
        }
        return view('tipoDocumento.eliminar',['eliminado'=>$encontrado]);
    }
	*/
    public function eliminado(Request $datos){
      $eliminado = TipoTramite::find($datos->id);
      $eliminado->delete();
      return redirect('tiposDocumento');
    }
	
	public function editar($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        return view('tiposDocumento.editar',['tipoDocumento'=>$tipoDocumento]);
    }

    public function guardar($id,Request $datos)
    {
        $tipoDocumento = TipoDocumento::find($id);

        $tipoDocumento->nombre=$datos->nomTipo;
        $tipoDocumento->descripcion=$datos->descripcion;
        $tipoDocumento->save();
        return redirect('tiposDocumento');
    }
}
