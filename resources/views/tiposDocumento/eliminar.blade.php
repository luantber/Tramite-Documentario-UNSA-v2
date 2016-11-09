@extends('template')

@section('title','Eliminar Tipo Documento')

@section('content')

<form method="POST" action="{{asset('tiposDocumento/eliminar)}}">
	{{ csrf_field()}}

	<input type="hidden" name="id" value="{{ $eliminado->id  }}">

	Eliminar ???
	<input type="submit" >
  		
</form>

@endsection