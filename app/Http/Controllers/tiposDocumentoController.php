<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TipoTramite;
use App\Tramite;
use App\TipoDocumento;
use App\Documento;

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



    public function eliminar($id){
        //dd("hola");
        $documentos=Documento::all()->where('tipo_documento_id',$id);
        foreach ($documentos as $documento) {
            $documento->tipo_documento_id=1;
            $documento->save();
        }

        $eliminado = TipoDocumento::find($id);
        $eliminado->delete();
        return redirect('tiposDocumento');
    }
}
