@extends('template')

@section('title','Editar Tipo Trámite')

@section('content')


<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<form method="POST" action="editTipoTram">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Tipo Trámite </p></h2>

      <div class="form-group">
		    <label for="nomTipoTram"> Nombre del Tipo de Trámite: </label>
		    <input type="text" class="form-control" placeholder="Nombre" name="nomTipoTram" id="nomTipoTram">
		  </div>

		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion"></textarea>
      </div>

		  <button type="submit" class="btn btn-default" value="Submit">Guardar Cambios</button>

		</div>
	</div>

</form>

@endsection
