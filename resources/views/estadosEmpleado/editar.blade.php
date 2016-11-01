@extends('template')

@section('title','Editar Estado Empleado')

@section('content')

<form method="POST" action="">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Estado </p></h2>
		<form>

      <div class="form-group">
		    <label for="nomArea"> Nombre del Estado: </label>
		    <input type="text" class="form-control" name="nomEstado" id="nomEstado" value="{$empleado->nombre}" required="true">
		  </div>


		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <input class="form-control" name="descripcion" id="descripcion" value="{$empleado->nombre}" required="true">
      </div>

		  <div class="form-group">
        	<div class="text-center">
          		<button type="submit" value="Submit" class="btn btn-lg">Guardar</button>
        	</div>
      	  </div>

      	  <ul class="pager">
	        <li><a href="#">Cancelar</a></li>
	      </ul>

		</form>
		</div>
	</div>

</form>

@endsection