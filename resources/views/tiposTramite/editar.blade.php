@extends('template')

@section('title','Editar Area')

@section('content')
Ya quien sea .. ustedes mismos son con esta vista no cambien los names


<form method="POST" action="{{asset('tipostramite')}}{{'/'.$tipoTramite->id}}">
	{{ csrf_field()}}
	nombre
	<input type="text" name="nombre" value="{{$tipoTramite->nombre }}">
	descripcion
	<input type="text" name="descripcion" value="{{$tipoTramite->descripcion}}">
	<input type="submit" >

</form>

@endsection
