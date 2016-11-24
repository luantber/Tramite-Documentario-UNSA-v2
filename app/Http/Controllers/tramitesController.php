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
use File;

class tramitesController extends Controller
{
    //

    public function recibir($id){

        $tramite = Tramite::find($id);

        if($tramite){

            $tramite->aceptado = !$tramite->aceptado;
            $tramite->save();
            //dd($tramite);
            return redirect('panel');
            
        }
        dd("no existe");

        //return redirect('panel');


    }
    public function create(Request $datos)
    {
        //-----------------------------codigo para generar bd
                
        //obtenemos a la persona dado un dni
        $persona=User::all()->where('dni',$datos->dni)->first();
        if($persona==NULL){
            return redirect('tramites/crear');
        }

        $usuario_empl=User::find(Auth::user()->id);
        //obtenemos el area dado su nombre

        $area_destino= Area::find($datos->destino);
        //obtenemos el estado inicial
        //-----------------------FALTA MODIFICAR ESTO
        $estado=EstadoTramite::all()->where('id',1)->first(     );

                
        $mesa_de_partes= $usuario_empl->empleado->area;

        //obtenemos el tipo de tramite dado su nombre
        $tipo_tramite= TipoTramite::find($datos->tipoTramite);
        //asunto y prioridad
        $asunto= $datos->asunto;
        $prioridad= $datos->prioridad;
        
    

        //crear Tramite;
        $tramite=new Tramite;
        $tramite->prioridad=$prioridad;
        $tramite->asunto=$asunto;
        $tramite->aceptado=0;
        $tramite->area()->associate($area_destino);
        $tramite->tipoTramite()->associate($tipo_tramite);
        $tramite->persona()->associate($persona);
        $tramite->estado()->associate($estado);
        $tramite->nro_expediente=1;
        $tramite->save();
        $tramite->nro_expediente=(date("Y").sprintf('%07d', $tramite->id));
        $tramite->save();

        $comentario="sin comentarios";
        $movimiento=new Movimiento;
        $movimiento->tramite()->associate($tramite);
        $movimiento->areaDestino()->associate($area_destino);
        $movimiento->areaRemitente()->associate($mesa_de_partes);

        $movimiento->empleadoRemitente()->associate(Empleado::find($mesa_de_partes->jefe_id));
        $movimiento->empleadoDestino()->associate(Empleado::find($area_destino->jefe_id));
        $movimiento->comentario=$comentario;
        $movimiento->save();
    
        $documentos=$tramite->documentos;
    
        $tiposDocumentos=TipoDocumento::all();
        
        
        
        return view('tramites.subir',["tiposDocumentos"=>$tiposDocumentos,"tramite"=>$tramite,"documentos"=>$documentos]);
        
    
    }

    public function subirV($id){
        $tiposDocumentos=TipoDocumento::all();
        $tramite=Tramite::find($id);
        $documentos=$tramite->documentos;
        return view('tramites.subir',["tiposDocumentos"=>$tiposDocumentos,"tramite"=>$tramite,"documentos"=>$documentos]);
    }

    public function createGet(){
        
        $tipoTramites = TipoTramite::all();
        $areas= Area::all();

        return view('tramites.crear',["tipos"=>$tipoTramites,"areas"=>$areas]);
        
    }

    public function createGet2($dni){
        
        $tipoTramites = TipoTramite::all();
        $areas= Area::all();


        return view('tramites.crear',["tipos"=>$tipoTramites,"areas"=>$areas,"dni"=>$dni]);
        
    }

    public function subirDocumento(Request $datos,$id)
    {
        
        $tipoDoc=TipoDocumento::find($datos->tipoDoc);
        $tramite=Tramite::find($id);
        

        $doc= new Documento;
        $doc->nombre=$datos->nomDoc;        
        $doc->nombre_archivo=$datos->archivo;    
        
        if($datos->archivo!=NULL){
            $doc->nombre_archivo=$datos->archivo;    
            
        }
        else{
            $doc->nombre_archivo='';
        }
        
        
        /// modificar---------------------------------------
        
        $doc->tipoDocumento()->associate($tipoDoc);
        $doc->tramite()->associate($tramite);
        $doc->save();

        if($datos->archivo!=NULL){
        //start subir archivo
        $archivo=$datos->file('archivo');
        $ext=$archivo->guessClientExtension();
        $nombre=$doc->id.".".$ext;
        $path=$archivo->storeAs('semiFTP/'.$tramite->nro_expediente,$nombre); //<- la variable path almacena la ruta del archivo

        }

        $tiposDocumentos=TipoDocumento::all();

        //end modificar --- 

        
        $documentos=$tramite->documentos;
       
        
        return view('tramites.subir',["tiposDocumentos"=>$tiposDocumentos,"tramite"=>$tramite,"documentos"=>$documentos]);
        
        
    }

    public function todos($estado =null)
    {
        

        if($estado == "activo")
            $tramites = Tramite::whereHas(
                'estado' , function ($query) {
                    $query->where('show', 1);
                })
            ->orderBy('updated_at')->paginate(10);
        elseif($estado == "final")
            $tramites = Tramite::whereHas(
                'estado' , function ($query) {
                    $query->where('show', 0);
                })
            ->orderBy('updated_at')->paginate(10);
        else
            $tramites = Tramite::select('*')->orderBy('updated_at')->paginate(10);
        

        $tramites->load('area','persona','empleado','tipoTramite','estado');

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
        if($area->id!=$tramite->area->id){
            return redirect('tramites/'.$tramite->id);
        }
        $empleados=Empleado::all()->where('id_area',$area->id);
        $subAreas=Area::all()->where('area_id',$usuario->empleado->area->id);
        $areas=Area::all()->where('area_id',NULL);
        return view('tramites.delegar',["tramite"=>$tramite,"empleados"=>$empleados,"areas"=>$areas,"subAreas"=>$subAreas]);
    }

    
    public function delegar(Request $datos, $id){
        $tramite=Tramite::find($id);
        if($datos->c_empleado=='empleado'){

            $empleado=Empleado::find($datos->id_empleado);

            $movimiento=new Movimiento;
            $movimiento->tramite()->associate($tramite);
            $movimiento->areaDestino()->associate($tramite->area);
            $movimiento->areaRemitente()->associate($tramite->area);
            $movimiento->empleadoRemitente()->associate(Auth::user()->empleado);
            $movimiento->empleadoDestino()->associate($empleado);
            
            $movimiento->comentario=$datos->comentario;
            
            $movimiento->save();


            $tramite->empleado()->associate($empleado);
            $tramite->aceptado=0;
            $tramite->save();
        }
        else if($datos->c_area){
        
            $area_destino=Area::find($datos->area);
            $movimiento=new Movimiento;
            $movimiento->tramite()->associate($tramite);
            $movimiento->areaDestino()->associate($area_destino);
            $movimiento->areaRemitente()->associate($tramite->area);
            $movimiento->empleadoRemitente()->associate(Auth::user()->empleado);
            $movimiento->empleadoDestino()->associate(Empleado::find($area_destino->jefe_id));
            
            $movimiento->comentario=$datos->comentario;
            
            $movimiento->save();
            $tramite->area()->associate($area_destino);
            $tramite->empleado()->associate(NULL);
            $tramite->aceptado=0;
            $tramite->save();
            
        }
        else if($datos->c_subArea){
            $area_destino=Area::find($datos->subarea);
            $movimiento=new Movimiento;
            $movimiento->tramite()->associate($tramite);
            $movimiento->areaDestino()->associate($area_destino);
            $movimiento->areaRemitente()->associate($tramite->area);
            $movimiento->empleadoRemitente()->associate(Auth::user()->empleado);
            $movimiento->empleadoDestino()->associate(Empleado::find($area_destino->jefe_id));
            $movimiento->comentario=$datos->comentario;
            $movimiento->save();
            $tramite->area()->associate($area_destino);
            $tramite->empleado()->associate(NULL);
            $tramite->aceptado=0;
            $tramite->save();
        }
        else if($datos->c_jefe){
            $tramite->empleado()->associate(NULL);
            $tramite->aceptado=0;
            $tramite->save();
        }

        return redirect('panel');
    }

    public function movimientosV($id){
        $tramite=Tramite::find($id);
        $movimientos=$tramite->movimientos;
        return view('tramites.movimientos',["movimientos"=>$movimientos]);
    }

    public function documentosEditarV($id,$id2){
        $documento=Documento::find($id2);
        $tiposDocumentos=TipoDocumento::all();
        return view('tramites.docEdit',["documento"=>$documento,"tiposDocumentos"=>$tiposDocumentos]);
    }

    public function documentosEliminar($id,$id2){
        $documento=Movimiento::find($id2);
        // eliminar el archivo

        $documento->delete();
        return redirect('tramites/'.$id.'/documentos');
    }

    public function documentosEditar(Request $datos, $id, $id2){
        $documento=Documento::find($id2);
        
        $documento->nombre=$datos->nombreDoc;      
        
        if($datos->docu!=NULL){
            $documento->nombre_archivo=$datos->docu;
            $archivo=$datos->file('docu');
            $ext=$archivo->guessClientExtension();
            $nombre=$id2.".".$ext;
            $exp=$documento->tramite->nro_expediente;
            $path=$archivo->storeAs('semiFTP/'.$exp,$nombre);
            
        }
        

        $tipo=TipoDocumento::find($datos->tipoDoc);
        $documento->tipoDocumento()->associate($tipo);
        
        $documento->save();
        return redirect('tramites/'.$id.'/documentos');

    }

    public function descargar($id)
    {
        $documento=Documento::find($id);
        if ($documento)
        {
            if($documento->tramite)
                $exp=$documento->tramite->nro_expediente;
            else
                return view('errors.errorGenerico',['error'=>'No se ha encontrado un tramite para este documento']);
            $files=File::files(storage_path('app/semiFTP/'.$exp));
            foreach ($files as $value) {
                $info=pathinfo($value);
                if ($info["filename"]==$id)
                    $file=$info["basename"];
            }

            if (isset($file))
                return response()->download(storage_path('app/semiFTP/'.$exp."/".$file));
            else
                return view('errors.errorGenerico',["error"=>'Este documento no esta asociado a un archivo']);
        }
        else
            return view ('errors.errorGenerico',["error"=>"Este documento no existe"]);

    }

    
}


