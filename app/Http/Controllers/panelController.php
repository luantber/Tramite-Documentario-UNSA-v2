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
        //dd("es jefe ");
        $tramites = Tramite::with('area','persona','empleado','estado','comentario')->where('area_id',Auth::user()->empleado->id_area)->join('estado_tramites', 'tramites.estado_tramite_id', '=', 'estado_tramites.id')->select('tramites.*', 'estado_tramites.show')->where('show',1)->where('empleado_id',NULL)->latest()->paginate(10);
    }
    else{
        //dd("heere");
        $tramites = Tramite::with('area','persona','empleado','estado','comentario')->where('area_id',Auth::user()->empleado->id_area)->join('estado_tramites', 'tramites.estado_tramite_id', '=', 'estado_tramites.id')->select('tramites.*', 'estado_tramites.show')->where('empleado_id',Auth::user()->empleado->id)->latest()->paginate(10);
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
    	
        $tramites = Tramite::with('area','persona','empleado','estado','comentario')->where('persona_id',Auth::user()->id)->paginate(10);
        //dd($tramites);
       return response()->json($tramites);
    }
}