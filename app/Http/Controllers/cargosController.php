<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use App\Http\Requests;
use App\Cargo;
use App\PermisosCargo;


class cargosController extends Controller
{
    public function crear(Request $datos){
    	$nuevo = new Cargo;
    	$nuevo->nombreCargo = $datos->nombreCargo;
    	$nuevo->descripcion = $datos->descripcion;
    $cargo = DB::table('cargos')->where('nombreCargo',$datos->nombreCargo)->first();
    $mensaje="";
    if($cargo){
        $mensaje = "Ya existe un cargo con este nombre ".$datos->nombreCargo;
        return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"nombreCargo"]);
    }

    $nuevo->save();
    $mensaje = "Cargo ".$datos->nombreCargo." creado con éxito !";
    return response()->json(["respuesta"=>true,"data"=>$mensaje]);
    }


    public function todos(){
    	$cargos = Cargo::all(); 
    	return response()->json($cargos);
    	
    }

    

    public function guardarsss(Request $datos,$id){
    	$editar = Cargo::find($id);
    	$editar ->nombreCargo = $datos->nombreCargo;
    	$editar ->descripcion = $datos->descripcion;
    	$editar ->save();
    	return redirect('cargos/'.$id);


    }	

    public function editar($id){
    	$encontrado = Cargo::find($id);
    	if($encontrado == null){
    		echo "error NO EXISTE EL CARGO";
    	}
    	return view('cargos.editar',['cargo'=>$encontrado]);
    }

    public function show($id){
        $encontrado = Cargo::find($id);

        return view('cargos.show',['cargo'=>$encontrado]);
    }
    

    public function eliminar($id){
    	$encontrado = Cargo::find($id);
    	if ($encontrado == null) {
            echo "error NO EXISTE EL CARGO";
        }
      return view('cargos.eliminar',['eliminado'=>$encontrado]);
    	
    }


    public function eliminado(Request $datos){
        //dd("hola");
    	$eliminado = Cargo::find($datos->id);
    	$eliminado->delete();
    	return redirect('cargos');
    }

    public function permisos(Request $datos)
    {
        /*$permiso= new PermisosCargo;
        $permiso->timestamps=false;
        $permiso->cargo_id=$datos->cargoid;*/
        /*$ara = array(
            'cargo_id' => $datos->cargoid, 
            'areas' => 0,
            'cargos'=>0,
            'usuarios'=>0,
            'empleados'=>0,
            'panel'=>0,
            'tramites'=>0
            );
        */

        //empieza llenado de datos
        $col=Schema::getColumnListing('permisos_cargos');
        array_shift($col);
        $ara=[];
        $ara['cargo_id']=$datos->cargoid;
        for ($j=0; $j <count($col) ; $j++) { 
            # code...
            $ara[$col[$j]]=0;
        }
        //return dd($ara,$col);    

        for ($i=0; $i <count($datos->sep) ; $i++) { 
            $ara[$datos->sep[$i]]=1;
        }

        //verificar si tiene los datos ya puestos
        if ($datos->los_tiene==0)
        {

            // Interesante ... 
            //si no los tienes, los inserta
            DB::table('permisos_cargos')->insert($ara);            
        }
        else
        {
            //si los tiene, entonces actualizalo
            DB::table('permisos_cargos')->where('cargo_id',$datos->cargoid)->update($ara);
        }

        return redirect('cargos');
    }


    public function permisosget($id)
    {
        $cargo=Cargo::find($id);
        if ($cargo==NULL){
            echo "NO existe el cargo";
        }
        $col=Schema::getColumnListing('permisos_cargos');
        //return view('cargos.permisos',['id_cargo'=>$cargo->id,'nombre'=>$cargo->nombreCargo]);
        return view('cargos.permisos',['id_cargo'=>$cargo->id,'nombre'=>$cargo->nombreCargo,'permisos'=>$cargo->permisosCargo,'columnas'=>$col]);
    }

}
