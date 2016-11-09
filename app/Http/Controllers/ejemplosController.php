<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ejemplosController extends Controller
{
    public function elphp(Request $datos){
	    	
    	dd($datos->formu);
    	return view("textoAjax",['datos'=>$datos]);
    }

    public function formulario(Request $datos){
    dd("hoa");	
    echo "el nombre ya existe";	
    }
}
