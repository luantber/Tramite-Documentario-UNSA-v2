<!--<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Nuevo Empleado')

@section('content')

<form method="POST" action="crearNewEmple">
	{{ csrf_field()}}

	<!--<div class="container">-->
	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Empleado </p></h2>
		<br><br>
		<form>

			<div class="row">
				<div class="col-sm-6">
					<label for="nomPer" >Nombre: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nomPer" id="nomPer" placeholder="Ingrese nombres">
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="apellido" >Apellido: </label>
				    <input class="form-control" type="text" name ="apellidoPer" id="apellido" placeholder="Ingrese apellidos">	
			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-6">
					<label for="DNI">DNI: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="dni" id="DNI" placeholder="Ingrese DNI">
					</div>
				</div>
			    <div class="col-sm-6">
					<label for="mail" >e-mail: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="correo" id="mail" placeholder="Ingrese el e-mail">
					</div>
				</div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			  	<label for="area">Área: </label>
				    <!--<select name="area" class="form-control" id="area">
			          <option value="" >Seleccionar área</option>
			        </select>-->
			        <input class="form-control" type="text" name ="areaEmpleado" id="area" placeholder="Ingresar área">
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Cargo: </label>
				  	<!--<select name="cargoEmpleado" class="form-control" id="cargo">
			          <option value="" >Seleccionar área</option>
			        </select>-->
			        <input class="form-control" type="text" name ="cargoEmpleado" id="cargo" placeholder="Ingresar cargo">
			  </div>
			</div><br>

			<div class="row">
				  <div class="col-sm-6">
				  		<label for="activo" >Activo: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</span>
					    	<input class="form-control" type="string" name ="activo" id="activo" placeholder="¿Activo?">
					    </div>
				  </div>
			</div><br><br>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo empleado</button> 

			</div><br><br>

			<!--<div class=" row">
			  <div class="col-sm-12">
			    <button type="submit" class="btn btn-lg" value="Submit">  Crear  </button>
			  </div>
			</div><br>-->
		
		</form>
		</div>
	</div>
</form>
<!--
	nombre:
	<input type="text" name="nomPer">
	<br>apellido:
	<input type="text" name="apellidoPer">	
	<br>dni:
	<input type="text" name="dni">
	<br>email: <input type="email" name="correo">
	<br>Área:
	<input type="text" name="areaEmpleado">
	<br>Cargo:
	<input type="text" name="cargoEmpleado">	
	<br>activo:
	<input type="text" name="activoEmpleado">

	<br>password:
	<input type="password" name="contrasenaPer">
	 <br> <input type="submit" value="Submit">
</form>
-->
@endsection

<!--
</body>
</html>-->