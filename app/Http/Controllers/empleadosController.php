<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Empleado;
use App\User;

class empleadosController extends Controller
{
    public function create(Request $datos){
    	$nuevo = new Empleado;
    	$nuevo->area = $datos->areaEmpleado;
    	$nuevo->cargo = $datos->cargoEmpleado;
      $nuevo->activo = true;
     	$encontrado = User::where('dni',$datos->dni)->first();
    	$nuevo->id_persona = $encontrado->id;

      $nuevo->save();
      
      return redirect('empleados');    	
    }

    public function createNew(Request $datosn){
      	$newPer = new User;
        $newPer->nombre = $datosn->nomPer;
        $newPer->apellido = $datosn->apellidoPer;
        $newPer->dni = $datosn->dni;
        $newPer->password = bcrypt( $datosn->contrasenaPer);
        $newPer->email = $datosn->correo;
        $newPer->save();



    	$newEmp = new Empleado;
    	$newEmp->area = $datosn->areaEmpleado;
    	$newEmp->cargo = $datosn->cargoEmpleado;
    	$newEmp->id_persona = $newPer->id;
    	$newEmp->activo = true;	
    	
     	$newEmp->save();
      return redirect('empleados');


    }

    public function todos(){

      $join = DB::table('empleados')
                ->leftjoin('users','empleados.id_persona','=','users.id')
                ->get();
      return response()->json($join);
    }  

    public function show($id){
      $encontrado = Empleado::find($id);
      if ($encontrado == null) {
        echo "error EL EMPLEADO NO EXISTE";
        //return view ('errors.noExiste');
      }

    return view('empleados.show',['empleado'=>$encontrado]);
    }

    public function editar($id){
        $encontrado = Empleado::find($id);
        if ($encontrado == null) {
            echo "error EL EMPLEADO NO EXISTE";
//            return view ('errors.noExiste');
        }
        return view('empleados.editar',['empleado'=>$encontrado]);
    }

        public function guardar(Request $datos,$id){
        $editar = Empleado::find($id);
        $editar->area = $datos ->area;
        $editar ->cargo = $datos ->cargo;
        $editar ->activo = $datos ->activo;
        $editar ->save();

        return redirect('empleados/'.$id);
    }

    public function eliminar($id){
      $encontrado = Empleado::find($id);
      if ($encontrado == null) {
            echo "error EL EMPLEADO NO EXISTE";
//            return view ('errors.noExiste');
        }
        return view('empleados.eliminar',['eliminado'=>$encontrado]);
    }

    public function eliminado(Request $datos){
      $eliminado = Empleado::find($datos->id);
      $eliminado->delete();
      return redirect('empleados');
    }


}
