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

    public function verificar(Request $datos)
    {
        $user=User::where('email',$datos->email)->first();
        if($user)
        {
            $correo=new Email;
            $correo->nombre=$user->nombre;
            $correo->email=$user->email;
            $correo->bool=true;
            $correo->asunto="Verificar cambio de contraseña";
            $correo->mensaje="verificar";
            if($user->empleado)
                $correo->empleado=true;
            else
                $correo->empleado=false;
            Mail::to($user->email)->send($correo);
            return view('succes',["msg"=>"El correo se ha enviado satisfactoriamente"]);
        }
        else
        {
            return view('errors.errorGenerico',["error"=>"El usuario con el correo de ".$datos->email." no existe"]);
        }
    }

    public function cambiar_contraseña(Request $datos)
    {
        $user=User::where('email',$datos->email)->first();
        if($user)
        {
            return view('usuarios.cambiar',["email"=>$datos->email]);
        }
        else
        {
            return view('errors.errorGenerico',["error"=>"El usuario con el correo de ".$datos->email." no existe"]);
        }
    }

    public function cambiar(Request $datos)
    {
        $user=User::where('email',$datos->email)->first();
        if ($user)
        {
            $user->password=bcrypt($datos->contraseña);
            $guard=$user->save();
            if ($guard)
                return view('succes',["msg"=>"Su contraseña se cambió satisfactoriamente"]);
            else
                return view('errors.errorGenerico',["error"=>"Ocurrió un problema al cambiar la contraseña"]);


        }
        else
        {
            return view('errors.errorGenerico',["error"=>"El usuario con el correo de ".$datos->email." no existe"]);   
        }

    }

    public function reenviar(Request $datos)
    {
        $user=User::where('email',$datos->email)->first();
        if($user)
        {
            $correo=new Email;
            $correo->nombre=$user->nombre;
            $correo->email=$user->email;
            if($user->empleado)
                $correo->empleado=true;
            else
                $correo->empleado=false;
            Mail::to($user->email)->send($correo);
            return view('succes',['title'=>'Correo enviado','msg'=>'Correo enviado satisfactoriamente']); 
        }
        else
        {
            return view('errors.errorGenerico',['error'=>"No se ha encontrado un usuario con el correo de: ".$datos->email]);
        }


    }

    public function login(Request $datos)
    {
        //dd($datos);
        $user= User::where('email',$datos->email)->first();
        //dd($user);
        if (!$user) return redirect('login')->with('error','Usuario o contraseña incorrectos');
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
            $mensaje ="Un usuario con esta identificación ".$datos->dni." ya esta registrado.";
            return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"dni"]);   
        }
        if($email){
            $mensaje ="Un usuario con este correo ".$datos->correo." ya esta registrado.";
            return response()->json(["respuesta"=>false,"data"=>$mensaje,"error"=>"email"]);
        }
        $nuevo->save();


        $correo=new Email;
        $correo->nombre=$nuevo->nombre;
        $correo->email=$nuevo->email;
        $correo->empleado=false;
        Mail::to($datos->correo)->send($correo);
        
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
