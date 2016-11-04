<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;

class areasController extends Controller
{
    public function todos()
    {
        $areas = Area::all();
        return response()->json($areas);
    }
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

    	return redirect('areas');
    }

    public function show($id){
        $area = Area::find($id);
        return view('areas.show',['area'=>$area]);
    }

    public function editar($id)
    {
        $area = Area::find($id);
        $areas = Area::all();
        return view('areas.editar',['area'=>$area,'areas'=>$areas]);
    }

    public function guardar($id,Request $datos)
    {
        $area = Area::find($id);

        $area->nombre=$datos->nomArea;
        $area->descripcion=$datos->descripcion;
        //$area->jefe_id=
        //$area->area_id=
        $area->save();
        return redirect('areas/'.$id);
    }

    public function eliminar($id){
        
    }
}
