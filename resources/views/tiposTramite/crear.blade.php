@extends('template')

@section('title','Crear Area')

@section('content')


Ya quien sea .. ustedes mismos son con esta vista no cambien los names


<form method="POST" action="{{asset('tipostramite/crear')}}">
	{{ csrf_field()}}
	nombre
	<input type="text" name="nombre">
	descripcion
	<input type="text" name="descripcion">
	<input type="submit" >

</form>

@endsection
