@extends('template')

@section('title','Crear Estado')

@section('content')
<form method="POST" action="{{asset('tramites/estados/crear')}}">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Estado </p></h2>
		<form>

      <div class="form-group">
		    <label for="nomArea"> Nombre del Estado: </label>
		    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nomEstado" required="true">
		  </div>


		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        	<textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
          </div>

           <div class="checkbox">
		    <label>
		      <input type="checkbox" value="" name="" id=""> Show
		    </label>
		  </div>

		  <div class="form-group">
        	<div class="text-center">
          		<button type="submit" value="Submit" class="btn btn-lg">Crear Estado</button>
        	</div>
      	  </div>

		</form>
		</div>
	</div>

</form>

@endsection
