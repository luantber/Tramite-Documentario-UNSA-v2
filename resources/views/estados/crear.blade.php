@extends('template')

@section('title','Crear Estado')

@section('content')

<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<form method="POST" action="crear">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Estado </p></h2>
		<form>

      <div class="form-group">
		    <label for="nomArea"> Nombre del Estado: </label>
		    <input type="text" class="form-control" placeholder="Nombre" name="nomEstado" id="nomEstado" required="true">
		  </div>


		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
      </div>

		  <button type="submit" class="btn btn-default" value="Submit">Crear</button>

		</form>
		</div>
	</div>

</form>

@endsection
