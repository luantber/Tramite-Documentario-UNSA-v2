@extends('template')

@section('title','Crear Nota')

@section('content')


{{Auth::user()}}

{{Auth::user()->empleado->id}}

{{Auth::user()->empleado->area->id}}

<form method="POST" action="{{asset('notas/crear')}}">
	{{ csrf_field()}}


	<div class="row">
			<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nota </p></h2>

			<input type="hidden" name="areas_id" value="{{Auth::user()->empleado->area->id}}">

			<input type="hidden" name="empleados_id" value="{{Auth::user()->empleado->id}}">

			<div class="form-group">
				<label for="nomArea"> Nombre de la nota: </label>
				<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required="true">
			</div>


			<div class="form-group">
				<label for="descripcion"> Nota: </label>
				<textarea type="text" class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
			</div>

			<div class="form-group">

				<label for="priv">Privacidad </label>
					<select name="personal" type="text" class="form-control" id="personal" name="personal" required="true">
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
