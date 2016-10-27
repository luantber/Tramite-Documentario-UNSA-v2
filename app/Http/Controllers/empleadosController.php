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
    	if ($datos->activoEmpleado =="si") {
    		$nuevo->activo = true;	
    	}
    	else{
    		$nuevo->activo = false;	
     	}
      echo $datos->dni;
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
    	if ($datosn->activoEmpleado =="si") {
    		$newEmp->activo = true;	
    	}
    	else{
    		$newEmp->activo = false;	
     	}

     	$newEmp->save();
      return redirect('empleados');


    }

    public function todos(){
      $join = DB::table('users')
                ->leftjoin('empleados','users.id','=', 'empleados.id_persona')
                ->get();
      return response()->json($join);
    }  

}
