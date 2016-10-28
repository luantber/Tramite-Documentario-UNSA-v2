<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;

class areasController extends Controller
{
	public function crearGet(){

		$areas = Area::all();
		return view('areas.crear',['areas'=> $areas]);
	}

    public function crear(Request $datos){
		//dd($datos->descripcion);
    	
    	$nuevo = new Area;
    	$nuevo->nombre = $datos->nomArea;
    	$nuevo->area_id = $datos->idAreaPad;
    	$nuevo->jefe_id = $datos->jefArea;
    	$nuevo->descripcion = $datos->descripcion;

    	$nuevo->save();

    	return redirect('/');
    }
}
