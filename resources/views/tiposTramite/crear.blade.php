@extends('template')

@section('title','Crear Tipo Trámite')

@section('content')




<form method="POST" action="{{asset('tipostramite/crear')}}">
	{{ csrf_field()}}

	<div class="row">
			<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Tipo Trámite </p></h2>

			<div class="form-group">
				<label for="nomArea"> Nombre del Tipo de Trámite: </label>
				<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="true">
			</div>


			<div class="form-group">
				<label for="descripcion"> Descripción: </label>
				<textarea type="text" class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
			</div>

			<button type="submit" class="btn btn-default" value="Submit">Crear</button>

		</div>
	</div>


</form>



@endsection
