@extends('template')

@section('title','Perfil')


@section('content')
	
	Perfil <br>
	{{ $user }}
	<br>
	{{ $user->apellido}}
	<br>
<a href="{{asset('usuarios')}}{{'/'.$user->id.'/editar'}}"> Editar</a>
Ya Kat ... tu misma eres con el perfil go go :D (by Margar)

@endsection