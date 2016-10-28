<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Area;
use App\Tramite;
use App\Empleado;
use App\TipoTramite;
use App\Estado;
use App\Documento;
use App\Persona;



class tramitesController extends Controller
{
    //
    public function create(Request $datos)
    {
    	echo $datos['dni'];
    	//return redirect('tramites/resolver');
    }

    
}
