<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoTramite;
use App\Tramite;
use App\TipoDocumento;

class tiposDocumentoController extends Controller
{


    public function todos()
    {
        $TipoDocumentos = TipoDocumento::all();
        return response()->json($tiposDocumento);
    }
	public function crearGet(){

		return view('tiposDocumento.crear');
	}

    public function crear(Request $datos){

    	
    	$nuevo = new TipoDocumento;
    	$nuevo->nombre = $datos->nomTipo;
    	$nuevo->descripcion = $datos->descripcion;
    	$nuevo->save();

    	return redirect('tiposDocumento');
    }

    public function show($id){
        $tipoDocumento = TipoDocumento::find($id);
        return view('tiposDocumento.show',['tipoDocumento'=>$tipoDocumento]);
    }

    public function editar($id)
    {
        $tipoDocumento = TipoDocumento::find($id);

        return view('tiposDocumento.editar',['tipoDocumento'=>$tipoDocumento]);
    }

    public function guardar(Request $datos,$id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->nombre = $datos->nomTipo;
    	$tipoDocumento->descripcion = $datos->descripcion;

        $tipoDocumento->save();

        return redirect('tiposDocumento');
    }

      public function eliminarGet($id){
        $encontrado = TipoTramite::find($id);
        if ($encontrado == null) {
            echo "error NO EXISTE EL Tramite";
        }
      return view('tiposTramite.eliminar',['eliminado'=>$encontrado]);
        
    }


    public function eliminar(Request $datos){
        //dd("hola");
        $eliminado = TipoTramite::find($datos->id);
        $eliminado->delete();
        return redirect('tipostramite');
    }
}
