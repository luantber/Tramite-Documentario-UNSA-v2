<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tramite;
class panelController extends Controller
{
    public function index()
    {
    	return view('tramites.panel');
    }

    public function todos()
    {
    	
    	$tramites = Tramite::with('area','persona','empleado','tipoTramite','estado')->get();
        return response()->json($tramites);
    }
}
