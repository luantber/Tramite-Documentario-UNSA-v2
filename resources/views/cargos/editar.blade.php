<!--<!DOCTYPE html>
<html>
<head>
	<title>Trámite Documentario</title>
</head>
<body>-->

@extends('template')

@section('title','Editar Cargo')

@section('content')

<form method="POST" action="editarCar">
	{{ csrf_field()}}

		<div class="row">
		  		<div class="col-md-6 col-md-offset-3">

					<h2><p class="text-center">  Editar Cargo </p></h2>
						<br><br>

					<div class="row">
						<div class="col-sm-4">
							<label for="idcargo" >ID: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-eye-open aria-hidden="true"></span>
									</span>
						  		<input class="form-control" type="text" name ="IDcargo" id="idcargo" placeholder="Ingrese ID">
							</div>
						</div>
						<div class="col-sm-8">
							<label for="nomcargo" >Nombre: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
									</span>
						  		<input class="form-control" type="text" name ="newNombreCargo" id="nomcargo" placeholder="Ingrese nombre de cargo">
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<label for="descripcion" >Descripción de cargo: </label>
						  		<textarea class="form-control" placeholder="Ingrese la descripción del cargo"  name="newDescripcion" id="descripcion"></textarea>
						</div>
					</div><br><br>

					<div class="text-center">
			      		<button type="submit" value="Submit" class="btn btn-lg">Guardar</button>
			    	</div>

			    	<ul class="pager">
				        <li><a href="#">Cancelar</a></li>
				    </ul>

				</div>
		</div>
</form>

@endsection

<!--
</body>
</html>-->