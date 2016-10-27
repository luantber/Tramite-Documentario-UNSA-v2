<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class personasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function todos(){
    
    $usuarios = User::all();
    return response()->json(array($usuarios));
    
    }

    public function create(Request $datos)
    {
        $nuevo = new User;
        $nuevo->nombre = $datos->nomPer;
        $nuevo->apellido = $datos->apellidoPer;
        $nuevo->dni = $datos->dni;
//        $nuevo->password = bcrypt( $datos->contrasenaPer);
        $nuevo->email = $datos->correo;
        
        $nuevo->save();
        return redirect('usuarios');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function encontrarPersonas()
    {
        $encontrado = User::find(8);
//        $encontrado->find(8);
        dd($encontrado);
        
    }

}
