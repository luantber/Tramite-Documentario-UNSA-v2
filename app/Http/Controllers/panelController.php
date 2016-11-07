<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tramite;
use Auth;
class panelController extends Controller
{
    public function index()
    {
    	return view('panel.panel');
    }

    public function todos()
    {
    	

    // dd(Auth::user()->empleado->id_area) ; 1

	//dd(Tramite::all());

    if(Auth::user()->empleado->isJefe()){
        $tramites = Tramite::with('area','persona','empleado')->where('area_id',Auth::user()->empleado->id_area)->join('estado_tramites', 'tramites.id', '=', 'estado_tramites.id')->where('show',1)->where('empleado_id',0)->paginate(1);
    }
    else{
        //dd("heere");
        $tramites = Tramite::with('area','persona','empleado')->where('area_id',Auth::user()->empleado->id_area)->join('estado_tramites', 'tramites.id', '=', 'estado_tramites.id')->where('empleado_id',Auth::user()->empleado->id)->paginate(1);
    }

     //dd($tramites);
        return response()->json($tramites);
    }

    public function indexu()
    {
    	return view('panel.mio');
    }

     public function todosu()
    {
    	
        $tramites = Tramite::with('area','persona','empleado')->where('persona_id',Auth::user()->id)->paginate(1);
        //dd($tramites);
       return response()->json($tramites);
    }
}