<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Tramite;
use App\Empleado;
use App\TipoTramite;
use App\TipoDocumento;
use App\EstadoTramite;
use App\Documento;
use App\User;
use App\Movimiento; 
use App\Cargo;


class tramitesController extends Controller
{
    //
    public function create(Request $datos)
    {
        //-----------------------------codigo para generar bd
        /*
            $area=new Area;
            $area->nombre='Mesa de Partes';
            $area->descripcion='Descripcion';
            $area->save();

            $area2=new Area;
            $area2->nombre='Gerencia';
            $area2->descripcion='Descripcion';
            $area2->save();        

            $tipo=new TipoTramite;
            $tipo->nombre='solicitud';
            $tipo->descripcion='descripcion';
            $tipo->save();

            $tipo2=new TipoTramite;
            $tipo2->nombre='reclamo';
            $tipo2->descripcion='descripcion';
            $tipo2->save();        
            

            $estado=new EstadoTramite;
            $estado->nombre='iniciado';
            $estado->descripcion='descripcion';
            $estado->save();    

            $tipo=new TipoDocumento;
            $tipo->nombre='carta';
            $tipo->descripcion='descripcion';
            $tipo->save();

            $cargo=new Cargo;
            $cargo->nombreCargo='jefe';
            $cargo->descripcion='this is the boos';
            $cargo->save();
        */        
        
        //obtenemos a la persona dado un dni
        $persona=User::all()->where('dni',$datos->dni)->first();
        //obtenemos el area dado su nombre

        $area_destino= Area::find($datos->destino);
        //obtenemos el estado inicial
        //-----------------------FALTA MODIFICAR ESTO
        $estado=EstadoTramite::all()->where('id',1)->first();

        //-----------------------AQUI FALTA EL AREA DE MESA DE PARTES
        $id_mesa=1;
        $mesa_de_partes= Area::find($id_mesa);

        //obtenemos el tipo de tramite dado su nombre
        $tipo_tramite= TipoTramite::find($datos->tipoTramite);
        //asunto y prioridad
        $asunto= $datos->asunto;
        $prioridad= $datos->prioridad;
        
    

        //crear Tramite;
        $tramite=new Tramite;
        $tramite->prioridad=$prioridad;
        $tramite->asunto=$asunto;
        $tramite->area()->associate($area_destino);
        $tramite->tipoTramite()->associate($tipo_tramite);
        $tramite->persona()->associate($persona);
        $tramite->estado()->associate($estado);
        $tramite->save();
        $tramite->nro_expediente=(date("Y").sprintf('%07d', $tramite->id));
        $tramite->save();

        $comentario="sin comentarios";
        $movimiento=new Movimiento;
        $movimiento->tramite()->associate($tramite);
        $movimiento->areaDestino()->associate($area_destino);
        $movimiento->areaRemitente()->associate($mesa_de_partes);
        $movimiento->comentario=$comentario;
        $movimiento->save();
    
        
    
        $tiposDocumentos=TipoDocumento::all();
        
        
        
        return view('tramites.subir',["tiposDocumentos"=>$tiposDocumentos,"tramite"=>$tramite]);
        

    }

    public function createGet(){
        
        $tipoTramites = TipoTramite::all();
        $areas= Area::all()->where('area_id',NULL);

        return view('tramites.crear',["tipos"=>$tipoTramites,"areas"=>$areas]);
        
    }

    public function subirDocumento(Request $datos,$id)
    {
        
        $tipoDoc=TipoDocumento::find($datos->tipoDoc);
        $tramite=Tramite::find($id);
        

        $doc= new Documento;
        $doc->nombre=$datos->nomDoc;
        $doc->nombre_archivo=$datos->archivo;
        $doc->entregado=0;
        /// modificar---------------------------------------
        $doc->virtual=0;
        $doc->tipoDocumento()->associate($tipoDoc);
        $doc->tramite()->associate($tramite);
        $doc->save();

        $tiposDocumentos=TipoDocumento::all();

        //end modificar --- 

        //start subir archivo
        $archivo=$datos->file('archivo');
        $ext=$archivo->guessClientExtension();
        $nombre=$datos->nomDoc.".".$ext;
        $path=$archivo->storeAs('semiFTP/'.$datos->numExp,$nombre); //<- la variable path almacena la ruta del archivo

       
        
        return view('tramites.subir',["tiposDocumentos"=>$tiposDocumentos,"tramite"=>$tramite]);
        
        
    }

    public function todos()
    {
        $tramites = Tramite::with('area','persona','empleado','tipoTramite','estado')->get();
        return response()->json($tramites);
    }

    public function showTramite($id)
    {
        $tramite= Tramite::find($id);
        return view('tramites.show',["tramite"=>$tramite]);
    }    

    public function editarTramiteV($id)
    {
        $tramite=Tramite::find($id);
        $areas = Area::all();
        $tipos =TipoTramite::all();
        $estados =EstadoTramite::all();
        return view('tramites.editar',["tramite"=>$tramite,"areas"=>$areas,"tipos"=>$tipos,"estados"=>$estados]);
    }

    public function guardar(Request $datos,$id){

        $editar = Tramite::find($id);
        
        $editar->prioridad = $datos->prioridad;
        $editar ->asunto = $datos->asunto;

        $area=Area::find($datos->tipoTramite);
        $estado=EstadoTramite::find($datos->estadoTramite);        
        $tipo=TipoTramite::find($datos->tipoTramite);

        if($area!=NULL){
            $editar ->area()->associate($area);    
        }
        if($estado!=NULL){
            $editar->estado()->associate($estado);
        }
        if($tipo!=NULL){
            $editar ->tipoTramite()->associate($area);    
        }
        
        
        
        $editar ->save();
        return redirect('tramites');
    }

    public function eliminarTramiteV($id)
    {
        $tramite=Tramite::find($id);
        return view('tramites.eliminar',["tramite"=>$tramite]);
    }


    public function delegarAreaV($id){
        $tramite=Tramite::find($id);
        $areas=Area::all()->where('id_area',NULL);
        return view('tramites.delegar-area',["tramite"=>$tramite,"areas"=>$areas]);
    }

    public function delegarArea(Request $datos, $id){
        
        $tramite=Tramite::find($id);
        
        $area_destino=Area::find($datos->area_destino);
        $movimiento=new Movimiento;
        $movimiento->tramite()->associate($tramite);
        $movimiento->areaDestino()->associate($area_destino);
        $movimiento->areaRemitente()->associate($tramite->area);
        $movimiento->comentario=$datos->comentario;
        $movimiento->save();
        $tramite->area()->associate($area_destino);
        $tramite->save();
        return redirect('tramites');
    }


    public function getDocumentosV($id)
    {   
        $tramite= Tramite::find($id);
        $documentos=$tramite->documentos;
        return view('tramites.documentos',["documentos"=>$documentos]);
    }

    /*
    public function delegarSubAreaV($id){
        $usuario=User::find(Auth::user()->id);
        $areas=Area::all()->where('area_id',$usuario->area->id);
        $tramite=Tramite::find($id);
        return view('tramites.delegar-area',["tramite"=>$tramite,"areas"=>$areas]);
    }
    */


}
