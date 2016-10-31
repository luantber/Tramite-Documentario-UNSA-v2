@extends('template')

@section('title','Eliminar Empleado')

@section('content')

	<!--<div class="container">-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Eliminar Empleado </p></h2>
		<br><br>

		<form method="post" action="{{asset('empleados/eliminado')}}">

			<div class="row">
				<div class="col-sm-6">
					<label for="nomPer" >Nombre: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nomPer" id="nomPer" disabled="" value="{{$eliminado->user->nombre}}">
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="apellido" >Apellido: </label>
				    <input class="form-control" type="text" name ="apellidoPer" id="apellido" disabled="" value="{{$eliminado->user->apellido}}">	
			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-6">
					<label for="DNI">DNI: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="dni" id="DNI" disabled="" value="{{$eliminado->user->dni}}">
					</div>
					<p id="noingreso"></p>
				</div>

			    <div class="col-sm-6">
					<label for="mail" >e-mail: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="correo" id="mail" disabled="" value="{{$eliminado->user->email}}">
					</div>
					<p id="nocorreo"></p>
				</div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			  	<label for="area">Área: </label>
			        <input class="form-control" type="text" name ="areaEmpleado" id="area" required="true" value="{{$eliminado->area->nombre}}" disabled="">
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Cargo: </label>
				  	<input class="form-control" type="text" name ="id_cargo" id="cargo" required="true" value="{{$eliminado->cargo->nombreCargo}}" disabled="">
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Estado: </label>
				  	<input class="form-control" type="text" name ="id_estado" id="cargo" required="true" value="{{$eliminado->activo}}" disabled="">
			  </div>
			</div><br>

			<div class="text-center">
				<button type="button" class="btn btn-info btn-lg" type="submit" value="Submit" data-toggle="modal" data-target="#Eliminar">Eliminar</button>
	    	</div>

		</form>
	</div>
</div>

@endsection