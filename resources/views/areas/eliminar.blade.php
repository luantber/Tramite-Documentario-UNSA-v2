@extends('template')

@section('title','Eliminar Area')

@section('content')

{{$area}}

<span class="glyphicon glyphicon-search" aria-hidden="true"></span>


<form method="POST" action="elimArea">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Área </p></h2>

      <div class="form-group">
		    <label for="nomArea"> Nombre del Área: </label>
		    <input type="text" class="form-control" placeholder="Nombre" name="nomArea" id="nomArea" disabled="">
		  </div>

      <div class="form-group">
		    <label for="nomAreaPad"> Nombre del Área Padre: </label>
		    <select type="text" class="form-control" placeholder="Selecciona el Area Padre" name="nomAreaPad" id="nomAreaPad"> </select>
		  </div>

		  <div class="form-group">
		    <label for="jefArea"> Jefe del Área: </label>
		    <select type="text" class="form-control" placeholder="Selecciona el Jefe del Área" name="jefArea" id="jefArea"> </select>
		  </div>

		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion"></textarea>
      </div>

		  <button type="submit" class="btn btn-default" value="Submit">Cancelar</button>
      <button type="submit" class="btn btn-default" value="Submit">Eliminar</button>


		</div>
	</div>

</form>

@endsection
