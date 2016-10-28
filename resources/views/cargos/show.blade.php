@extends('template')

@section('title','Perfil')


@section('content')
	
	Cargo <br>
	{{ $cargo }}
	<br>

	<br>
<a href="{{asset('cargo')}}{{'/'.$cargo->id.'/editar'}}"> Editar</a>
Ya Kat ... tu misma eres con el perfil go go :D (by Margar)

@endsection