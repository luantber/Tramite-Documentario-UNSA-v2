@extends('template')

@section('title','Perfil')


@section('content')
	
	Cargo <br>
	{{ $cargo }}
	<br>

	<br>
<a href="{{asset('cargo')}}{{'/'.$cargo->id.'/editar'}}"> Editar</a>

@endsection