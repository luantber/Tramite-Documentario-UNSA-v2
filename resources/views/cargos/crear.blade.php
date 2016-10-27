<!--
<!DOCTYPE html>
<html>
<head>
	<title>Trámite Documentario</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Cargo')

@section('content')

<form method="POST" action="crearCar">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

			<h2><p class="text-center">  Crear Nuevo Cargo </p></h2>
				<br><br>

			<div class="row">
				<div class="col-sm-12">
					<label for="nomcargo" >Nombre de cargo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nombreCargo" id="nomcargo" placeholder="Ingrese nombre de cargo">
					</div>
				</div>
			</div><br>
			<div class="row">
			  <div class="col-sm-12">
			  		<label for="descrip" >Descripción: </label>
				    <textarea class="form-control" placeholder="Ingrese la descripción del área"  name="descripcion" id="descripcion"></textarea>
			  </div>
			</div><br>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo cargo</button> 

		</div>
	</div>

</form>

@endsection

<!--
</body>
</html>-->