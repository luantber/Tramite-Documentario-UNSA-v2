@extends('template')

@section('title','Eliminar Tipo Trámite')

@section('content')


<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<form method="POST" action="{{asset('tipostramite/eliminar')}}">
	{{ csrf_field()}}

	<input type="hidden" name="id" value="{{ $eliminado->id  }}">

	Eliminar ???
	<input type="submit" >
  		
</form>

@endsection
