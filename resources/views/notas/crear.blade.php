@extends('template')

@section('title','Crear Nota')

@section('content')


<form method="POST" action="{{asset('notas/crear')}}">
	{{ csrf_field()}}


	<div class="row">
			<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nota </p></h2>



			<div class="form-group">
				<label for="nomArea"> Nombre de la nota: </label>
				<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="true">
			</div>


			<div class="form-group">
				<label for="descripcion"> Nota: </label>
				<textarea type="text" class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
			</div>

			<div class="form-group">

				<label for="personal">Privacidad </label>
					<select name="id_area" type="text" class="form-control" id="personal" name="personal" required="true">
							<option value="" >Seleccionar Privacidad</option>
												<option value='1'>Personal</option>
												<option value='0'>Público</option>
						</select>
			</div>

			<button type="submit" class="btn btn-default" value="Submit">Crear</button>

		</div>
	</div>


</form>



@endsection
