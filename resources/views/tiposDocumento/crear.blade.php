@extends('template')

@section('title','Crear Tipo Documento')

@section('content')

<form method="POST" action="{{asset('tiposDocumento/crear')}}">
	{{ csrf_field()}}<q></q>

	<div class="row">
			<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Tipo Documento </p></h2> <br>

			<div class="form-group">
				<label for="nomTipo"> Nombre de Tipo Documento: </label>
				<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						</span>
					<input type="text" class="form-control" placeholder="Nombre de Tipo Documento" name="nomTipo" id="nomTipo" required="true">
				</div>
			</div>

			<div class="form-group">
				<label for="descripcion"> Descripción: </label>
				<textarea type="text" class="form-control" rows="5" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-lg btn-primary" value="Submit">Crear Tipo</button>
			</div>
		</div>
	</div>
</form>

@endsection
