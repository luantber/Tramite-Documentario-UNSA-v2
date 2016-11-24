<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Notas;
use App\Area;
use App\Empleado;
use Log;

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



    public function todos(Request $request){
      Log::info('This is some useful information.');
      $this -> middleware('auth');
      $this->user= \Auth::user();
      $autenticado = $this->user;

      /*
      $personas = DB::table('users')->select('id','nombre','apellido');
      dd($personas);
      $personal = Notas::where('empleados_id',$autenticado->empleado->id)->where('personal','1')->orderBy('created_at','DESC')->paginate(2,['*'],'personal');
      $publico = Notas::where('areas_id',$autenticado->empleado->area->id)->where('personal','0')->orderBy('created_at','DESC')->paginate(2,['*'],'publico');
      */
    //  $personal = Notas::where('empleados_id',$autenticado->empleado->id)->where('personal','1')->orderBy('created_at','DESC')->paginate(8,['*'],'personal');
    //  $publico = Notas::where('areas_id',$autenticado->empleado->area->id)->where('personal','0')->orderBy('created_at','DESC')->paginate(8,['*'],'publico');

      //dd($request->datos);

      $personal = DB::table('notas')
            ->join('empleados','notas.empleados_id','=','empleados.id')
            ->join('users','empleados.id_persona','=','users.id')
            ->select('notas.updated_at','notas.created_at','notas.id','notas.empleados_id','notas.areas_id','notas.nombre as nombreN','notas.descripcion','users.nombre as nombreE','users.apellido','notas.personal')
            ->where('notas.empleados_id',$autenticado->empleado->id)
            ->where('notas.personal','1')
            ->orderBy('created_at','DESC')
            //->paginate(2);
            ->paginate(8,['*'],'personal');



            if($request->ajax()){
              //dd($personal);
              $url = $request->fullUrl();
              $data = $request->input('id');


              if($data=='personal'){

                return response()->json(view('notas.personal',['personal'=>$personal])->render());
              }

              if($data=='publico'){

                $publico = DB::table('notas')
                      ->join('empleados','notas.empleados_id','=','empleados.id')
                      ->join('users','empleados.id_persona','=','users.id')
                      ->select('notas.updated_at','notas.created_at','notas.id','notas.empleados_id','notas.areas_id','notas.nombre as nombreN','notas.descripcion','users.nombre as nombreE','users.apellido','notas.personal')
                      ->where('notas.areas_id',$autenticado->empleado->area->id)
                      ->where('notas.personal','0')
                      ->orderBy('created_at','DESC')
                      ->paginate(8,['*'],'publico');
                return response()->json(view('notas.publico',['publico'=>$publico])->render());
              }

            }

      return view('notas.todos',['personal'=>$personal]);
    }


    public function show ($id){
    	$encontrado = Notas::find($id);
    	return view('notas.show',['notas'=>$encontrado]);
    }

    public function editar($id){
    	$encontrado = Notas::find($id);
    	return view('notas.editar',['notas'=>$encontrado]);
    }


    public function guardar(Request $datos){


      $editar = Notas::find($datos->id);

      $editar ->nombre = $datos->nombre;
      $editar->descripcion = $datos->descripcion;
      $editar->personal = $datos->personal;
      $editar->save();
      //return redirect('notas/'.$datos->id);
      return redirect('notas/todos');
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
