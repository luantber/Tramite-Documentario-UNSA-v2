<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $nuevo->password = bcrypt($datos->dni);
        $nuevo->email = $datos->correo;
        $nuevo->activo = false;
        
        $nuevo->save();
        return redirect('usuarios');

    }

    public function guardar(Request $datos,$id){
        $editar = User::find($id);
        $editar->nombre = $datos ->nombre;
        $editar ->apellido = $datos ->apellido;
        $editar ->dni = $datos ->dni;
        $editar ->email = $datos ->email;
        $editar ->activo = true;
        $editar ->save();

        return redirect('usuarios/'.$id);
    }
    

    public function show($id){
    $encontrado = User::find($id);
    if ($encontrado == null) {
        return view ('errors.noUsuario');
    }

        return view('usuarios.show',['user'=>$encontrado]);

    }

    public function editar($id){
        $encontrado = User::find($id);
        if ($encontrado == null) {
            return view ('errors.noUsuario');
        }
        return view('usuarios.editar',['user'=>$encontrado]);
    }

    public function activarget($email)
    {
        $user=DB::table('users')->where('email',$email)->first();
        if ($user===null)
            return view('errors.noUsuario');
        elseif($user->activo==1)
            echo "El usuario ya esta activado";
        else 
            return view('usuarios.activar',['nombre'=>$user->nombre,'id'=>$user->id]);

    }
    public function activar(Request $datos)
    {
        $user=User::find($datos->asd);
        $user->activo=1;
        $user->password=bcrypt($datos->contraseña);
        $user->save();
        if ($user->empleado!=null)
        {
            $user->empleado->activo=1;
            $user->empleado->save();
        }
        return redirect('/');

    }

}
