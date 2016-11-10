<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Mail\Email;
use Mail;

class usuariosController extends Controller
{

    public function todos(){
    
        $usuarios = User::all();
        return response()->json($usuarios);
    
    }

    public function login(Request $datos)
    {
        $user= User::Where('email',$datos->email)->first();
        if (Auth::attempt(['email'=>$datos->email,'password'=>$datos->password,'activo'=>1]))
        {
            return redirect('/');
        }
        else
        {   
            if($user->activo==0)
                return redirect('login')->with('error','Le hemos enviado un correo para activar su cuenta');
            else
                return redirect('login')->with('error','Usuario o contraseña incorrectos');
        }
    }

    public function create(Request $datos)

    {       //dd($datos->nombre);
        $nuevo = new User;
        $nuevo->nombre = $datos->nombre;
        $nuevo->apellido = $datos->apellido;
        $nuevo->dni = $datos->dni;
        $nuevo->password = '123';
        $nuevo->email = $datos->correo;
        $nuevo->activo = false;
        
        //dd($nuevo);
        
        $email=DB::table('users')->where('email',$nuevo->email)->first();
       //dd($email);
        $dni=DB::table('users')->where('dni',$nuevo->dni)->first();
        $mensaje="";
        if($dni){
            $mensaje ="Un usuario con este DNI ".$datos->dni." ya esta registrado.";
            return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"dni"]);   
        }
        if($email){
            $mensaje ="Un usuario con este correo ".$datos->correo." ya esta registrado.";
            return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"email"]);
        }
        $nuevo->save();
        
        return response()->json(["respuesta"=>true,"data"=>"Usuario ".$datos->nombre." ".$datos->apellido." creado con éxito !.CS.Tramite.Documentario"]);

    }

    public function guardar(Request $datos,$id){
        $editar = User::find($id);
        $editar->nombre = $datos ->nombre;
        $editar ->apellido = $datos ->apellido;
        $editar ->dni = $datos ->dni;
        $editar ->email = $datos ->email;
        $editar ->activo = true;
        $editar ->save();

        //Comentado Papu .. no se que esto.. pero tenia error
        //DB::table('permisoscargos')->where('cargo_id',$datos->cargoid)->update($area);

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
            return view('errors.usuarioActivado');
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
