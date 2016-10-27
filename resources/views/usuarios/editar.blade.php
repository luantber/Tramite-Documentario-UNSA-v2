@extends('template')

@section('title','Perfil')


@section('content')
	
	Perfil <br>
	{{ $user }}
	<br>
	{{ $user->apellido}}
	<br>

	<form method="post" action="{{asset('usuarios/'.$user->id)'">
		<input type="string" name="nombre" value="{{$user->nombre}}">
		<input type="string" name="apellido" value="{{$user->apellido}}">
		<input type="string" name="email" value="{{$user->email}}">
		<input type="string" name="dni" value="{{$user->dni}}">

		<input type="submit" >
		Ya kat .. si falta algo lo completas
	</form>



Ya Kat ... tu misma eres con el perfil 

@endsection