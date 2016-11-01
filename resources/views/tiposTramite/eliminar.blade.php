@extends('template')

@section('title','Eliminar Tipo Trámite')

@section('content')


<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<form method="POST" action="editTipoTram">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Eliminar Tipo Trámite </p></h2>

      <div class="form-group">
		    <label for="nomTipoTram"> Nombre del Tipo de Trámite: </label>
		    <input type="hidden" class="form-control" placeholder="Nombre" name="nomTipoTram" id="nomTipoTram">
		  </div>

		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <textarea type="hidden" class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion"></textarea>
      </div>

		  <button type="submit" class="btn btn-default" value="Submit">Cancelar</button>

      <button type="submit" class="btn btn-default" value="Submit">Eliminar</button>

		</div>
	</div>

</form>

@endsection
