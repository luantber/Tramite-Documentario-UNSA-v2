@extends('template')

@section('title','Perfil')


@section('content')
	
	Perfil <br>
	{{ $user }}
	<br>
	{{ $user->apellido}}
	<br>

Ya Kat ... tu misma eres con el perfil 

@endsection