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

    public function guardar(Request $datos,$id){
        $editar = User::find($id);
        $editar->nombre = $datos ->nombre;
        $editar ->apellido = $datos ->apellido;
        $editar ->dni = $datos ->dni;
        $editar ->email = $datos ->email;
        $editar ->save();

        return redirect('usuarios/'.$id);
    }
    

    public function show($id){
    $encontrado = User::find($id);
    if ($encontrado == null) {
        return view ('errors.noExiste');
    }

    return view('usuarios.show',['user'=>$encontrado]);

    }

    public function editar($id){
        $encontrado = User::find($id);
        if ($encontrado == null) {
            return view ('errors.noExiste');
        }
        return view('usuarios.editar',['user'=>$encontrado]);
    }

}
