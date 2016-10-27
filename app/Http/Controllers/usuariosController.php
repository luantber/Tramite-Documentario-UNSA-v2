<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class usuariosController extends Controller
{

    public function todos(){
    
    $usuarios = User::all();
    return response()->json($usuarios);
    
    }

    public function create(Request $datos)
    {
        $nuevo = new User;
        $nuevo->nombre = $datos->nomPer;
        $nuevo->apellido = $datos->apellidoPer;
        $nuevo->dni = $datos->dni;
        $nuevo->password = bcrypt("");
        $nuevo->email = $datos->correo;
        
        $nuevo->save();
        return redirect('usuarios');

    }
    
    public function encontrarPersonas()
    {
        $encontrado = User::find(8);
//        $encontrado->find(8);
        dd($encontrado);
        
    }

    public function show($id){
    $encontrado = User::find($id);

    return redirect('usuarios.show',['user'=>$encontrado]);

    }

}
