@extends('template')

@section('title','Editar Tipo Trámite')

@section('content')



<form method="POST" action="{{asset('tipostramite')}}{{'/'.$tipoTramite->id}}">
	{{ csrf_field()}}
<!--
	nombre
	<input type="text" name="nombre" value="{{$tipoTramite->nombre }}">
	descripcion
	<input type="text" name="descripcion" value="{{$tipoTramite->descripcion}}">
	<input type="submit" >
-->

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Tipo Trámite </p></h2>

      <div class="form-group">
		    <label for="nombre"> Nombre del Tipo de Trámite: </label>
		    <input type="text" class="form-control"  name="nombre" id="nombre" value="{{$tipoTramite->nombre }}">
		  </div>

		  <div class="form-group">
		    <label for="descripcion"> Descripción: </label>
        <input class="form-control"  name="descripcion" id="descripcion" value="{{$tipoTramite->descripcion}}">
      </div>

		  <button type="submit" class="btn btn-default" value="Submit">Guardar Cambios</button>

		</div>
	</div>

</form>

@endsection
