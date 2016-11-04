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
    	$tramites = Tramite::with('area','persona','empleado','tipoTramite','estado')->get();
        return response()->json($tramites);
    }

    public function indexu()
    {
    	return view('panel.mio');
    }

     public function todosu()
    {
    	
    	$tramites = Auth::user()->tramite;

    	foreach ($tramites as $t) {
    		$t->area;
    		$t->persona;
    		$t->tipoTramite;
			$t->estado;
    		
    	}
    	
    	//dd($tramites);
       return response()->json($tramites);
    }
}
