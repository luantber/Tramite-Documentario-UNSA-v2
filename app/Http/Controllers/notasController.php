<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notas;
use App\Area;
use App\Empleado;

class notasController extends Controller
{



    public function crear(Request $datos){
    	$nuevo = new Notas ;
    	$nuevo ->nombre = $datos->nombre;
    	$nuevo ->descripcion = $datos->descripcion;
      $nuevo ->areas_id = $datos->areas_id;
      $nuevo ->empleados_id = $datos->empleados_id;
      $nuevo ->personal = $datos ->personal;
    	$nuevo ->save();
    	return redirect('notas/todos');
    }



    public function todos(){

      $this -> middleware('auth');
      $this->user= \Auth::user();
      $autenticado = $this->user;

      $personal = Notas::where('empleados_id',$autenticado->empleado->id)->where('personal','1')->orderBy('created_at','DESC')->paginate(2,['*'],'personal');
      $publico = Notas::where('areas_id',$autenticado->empleado->area->id)->where('personal','0')->orderBy('created_at','DESC')->paginate(2,['*'],'publico');
      return view('notas.todos',['personal'=>$personal,'publico'=>$publico]);
    }

/*
    public function todos(){
    	return view('notas.todos');
    }
*/
    public function show ($id){
    	$encontrado = Notas::find($id);
    	return view('notas.show',['notas'=>$encontrado]);
    }

    public function editar($id){
    	$encontrado = Notas::find($id);
    	return view('notas.editar',['notas'=>$encontrado]);
    }

    public function guardar_em(Request $datos,$id){
    	$editar = Notas::find($id);
    	$editar->nombre = $datos->nombre;
    	$editar->descripcion = $datos->descripcion;
      $editar->id_empleados = $datos->id_empleados;
      $editar->publico = $datos->publico;
    	$editar->save();
    	return redirect('notas/todos/'.$id);
    }

    public function guardar_area(Request $datos,$id){
        $editar = Notas::find($id);
        $editar->nombre = $datos->nombre;
        $editar->descripcion = $datos->descripcion;
        $editar->id_area = $datos->id_area;
        $editar->publico = $datos->publico;
        $editar->save();
        return redirect('notas/todos/'.$id);
    }

    public function eliminar($id){
    	$encontrado = Notas::find($id);
    	return view('notas.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){

    	$eliminado = Notas::find($datos->id);
    	$eliminado->delete();
    	return redirect('notas/todos/');
    }
    //
}
