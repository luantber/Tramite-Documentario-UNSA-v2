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
      echo('Entra a todos');
      return view('notas.todos',['personal'=>$personal,'publico'=>$publico]);
    }


    public function todosPersonal(){
      $this -> middleware('auth');
      $this->user= \Auth::user();
      $autenticado = $this->user;

      $personal = Notas::where('empleados_id',$autenticado->empleado->id)->where('personal','1')->orderBy('created_at','DESC')->paginate(2,['*'],'personal');
      echo('Entra a personal');
      return View::make('notas.personal')->with('personal',$personal)->render();

    }

    public function todosPublico(){
      $this -> middleware('auth');
      $this->user= \Auth::user();
      $autenticado = $this->user;
      echo('Entra a publico');
      $publico = Notas::where('areas_id',$autenticado->empleado->area->id)->where('personal','0')->orderBy('created_at','DESC')->paginate(2,['*'],'publico');

      return View::make('notas.publico')->with('publico',$publico)->render();

    }

    public function todos2(){

      $this -> middleware('auth');
      $this->user= \Auth::user();
      $autenticado = $this->user;

      $personal = Notas::where('empleados_id',$autenticado->empleado->id)->where('personal','1')->orderBy('created_at','DESC')->paginate(2,['*'],'personal');
      $publico = Notas::where('areas_id',$autenticado->empleado->area->id)->where('personal','0')->orderBy('created_at','DESC')->paginate(2,['*'],'publico');


      //return view('notas.todos',['personal'=>$personal,'publico'=>$publico]);
      return View::make('notas.personal')->with('personal'.$personal)->render();
      return View::make('notas.publico')->with('publico'.$publico)->render();

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


    public function guardar(Request $datos,$id){

      $editar = Notas::find($id);
      $editar ->nombre = $datos->nombre;
      $editar->descripcion = $datos->descripcion;
      $editar->empleados_id = $datos->empleados_id;
      $editar->areas_id = $datos->areas_id;
      $editar->personal = $datos->personal;
      $editar->save();
      return redirect('notas/todos'.$id);

    }

    public function eliminar($id){
    	$encontrado = Notas::find($id);
    	return view('notas.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
    	$eliminado = Notas::find($datos->id);
    	$eliminado->delete();
    	return redirect('notas/todos');
    }
    //
}
