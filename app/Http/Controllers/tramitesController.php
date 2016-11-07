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
use Illuminate\Support\Facades\Auth;

class tramitesController extends Controller
{
    //
    public function create(Request $datos)
    {
        //-----------------------------codigo para generar bd
                
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
        $tramites = Tramite::with('area','persona','empleado','tipoTramite','estado')->paginate(1);
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

   


    public function getDocumentosV($id)
    {   
        $tramite= Tramite::find($id);
        $documentos=$tramite->documentos;
        return view('tramites.documentos',["documentos"=>$documentos]);
    }



    public function delegarV($id){
        $tramite=Tramite::find($id);
        $usuario=User::find(Auth::user()->id);
        $area=$usuario->empleado->area;
        $empleados=Empleado::all()->where('id_area',$area->id);
        $subAreas=Area::all()->where('area_id',$usuario->empleado->area->id);
        $areas=Area::all()->where('area_id',NULL);
        return view('tramites.delegar',["tramite"=>$tramite,"empleados"=>$empleados,"areas"=>$areas,"subAreas"=>$subAreas]);
    }

    
    public function delegar(Request $datos, $id){
        $tramite=Tramite::find($id);
        if($datos->c_empleado=='empleado'){
            $empleado=Empleado::find($datos->id_empleado);
            $tramite->empleado()->associate($empleado);
            $tramite->save();
        }
        else if($datos->c_area){
                        
            $area_destino=Area::find($datos->area);
            $movimiento=new Movimiento;
            $movimiento->tramite()->associate($tramite);
            $movimiento->areaDestino()->associate($area_destino);
            $movimiento->areaRemitente()->associate($tramite->area);
            $movimiento->comentario=$datos->comentario;
            $movimiento->save();
            $tramite->area()->associate($area_destino);
            $tramite->save();
            
        }
        else if($datos->c_subArea){
            $area_destino=Area::find($datos->subarea);
            $movimiento=new Movimiento;
            $movimiento->tramite()->associate($tramite);
            $movimiento->areaDestino()->associate($area_destino);
            $movimiento->areaRemitente()->associate($tramite->area);
            $movimiento->comentario=$datos->comentario;
            $movimiento->save();
            $tramite->area()->associate($area_destino);
            $tramite->save();
        }

        return redirect('tramites');
    }
    
}
