<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoTramite;

class tiposTramiteController extends Controller
{


    public function todos()
    {
        $TipoTramites = TipoTramite::all();
        return response()->json($TipoTramites);
    }
	public function crearGet(){

		return view('tiposTramite.crear');
	}

    public function crear(Request $datos){

    	
    	$nuevo = new TipoTramite;
    	$nuevo->nombre = $datos->nombre;
    	$nuevo->descripcion = $datos->descripcion;
    	$nuevo->save();

    	return redirect('tipostramite');
    }

    public function show($id){
        $TipoTramite = TipoTramite::find($id);
        return view('tiposTramite.show',['tipoTramite'=>$TipoTramite]);
    }

    public function editar($id)
    {
        $TipoTramite = TipoTramite::find($id);

        return view('tiposTramite.editar',['tipoTramite'=>$TipoTramite]);
    }

    public function guardar($id,Request $datos)
    {
        $tipoTramite = TipoTramite::find($id);
        $tipoTramite->nombre = $datos->nombre;
    	$tipoTramite->descripcion = $datos->descripcion;

        $tipoTramite->save();

        return redirect('tipostramite');
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
