@extends('template')

@section('title','Perfil')


@section('content')
	
<h1>Hagan la vista de show :3 mostrar cargo</h1>
{{$cargo->nombreCargo}}
<p>{{$cargo->descripcion}}</p>


@endsection