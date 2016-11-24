<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Empleado;

class areasController extends Controller
{
    public function todosGet(){ 
        
        //dd(session('data'));
        return view('areas.todos',["data"=>session('data')]);  
    }
    public function todos()
    {
        
        $areas = Area::all();
        return response()->json($areas);
    }
	public function crearGet(){

		$areas = Area::all();
        
        
		return view('areas.crear',['areas'=> $areas,"data"=>session('data')]);
	}

    public function crear(Request $datos){
		//dd($datos->descripcion);
 try {
        
            
        	$nuevo = new Area;
        	$nuevo->nombre = $datos->nomArea;
        	$nuevo->area_id = $datos->idAreaPad;
        	$nuevo->jefe_id = $datos->jefArea;
        	$nuevo->descripcion = $datos->descripcion;
    	    $nuevo->save(); 

            return response()->json(["resp"=>true,"data"=>"Area ". $datos->nomArea ." Creada con Exito"]);
    	    //return redirect('areas')->with('data','Area '.$datos->nomArea .',creada con exito');

        } catch (\PDOException $e) {
            $mess = "";
            if($e->errorInfo[1]==1062){
                $mess = "El nombre de area: ".$datos->nomArea. " ya existe.";
                return response()->json(["resp"=>false,"data"=>$mess,"error"=>"nomArea"]);
            }else{
                $mess = "Hubo un error al crear el area, revise los datos.";
                return response()->json(["resp"=>false,"data"=>$mess,"error"=>"else"]);
            }


            

     }

    }

    public function show($id){
        $area = Area::find($id);
        
        return view('areas.show',['area'=>$area]);
    }

    public function editar($id)
    {
        $empleados = Empleado::all()->where('id_area',$id);
        //dd($empleados);
        $area = Area::find($id);
        $areas = Area::all();
        //dd($areas);
        return view('areas.editar',['area'=>$area,'areas'=>$areas,'empleados'=>$empleados]);
    }

    public function guardar($id,Request $datos)
    {
        $area = Area::find($id);

        $area->nombre=$datos->nomArea;
        $area->descripcion=$datos->descripcion;
        $area->jefe_id=$datos->jefe;
        $area->area_id=$datos->nomAreaPad;
        $area->save();

        //return redirect('areas/'.$id);
        return redirect('areas')->with('data','Area '.$datos->nomArea .', editada con exito');
    }


    public function eliminarGet($id){
        $encontrado = Area::find($id);
        if ($encontrado == null) {
            echo "error NO EXISTE EL CARGO";
        }
      return view('areas.eliminar',['area'=>$encontrado]);
        
    }


    public function eliminar(Request $datos){
        //dd("hola");
        $eliminado = Area::find($datos->id);
        $eliminado->delete();
        return redirect('areas')->with('data','Area '.$datos->nomArea .', borrada con exito');;
    }
}
