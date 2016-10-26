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
		<form>
		  <div class="form-group">
		    <label for="nomPer">Nombre:</label>
		    <input type="text" class="form-control" name="nomPer" id="nomPer">
		  </div>
		  <div class="form-group">
		    <label for="apellido">Apellido:</label>
		    <input type="text" class="form-control" name="apellidoPer" id="apellido">
		  </div>
		  <div class="form-group">
		    <label for="DNI">DNI:</label>
		    <input type="text" class="form-control" name="dni" id="DNI">
		  </div>
		  <div class="form-group">
		    <label for="mail">e-mail:</label>
		    <input type="email" class="form-control" name="correo" id="mail">
		  </div>
		  <div class="form-group">
		    <label for="area">Área:</label>
		    <input type="text" class="form-control" name="areaEmpleado" id="area">
		  </div>
		  <div class="form-group">
		    <label for="cargo">Cargo:</label>
		    <input type="text" class="form-control" name="cargoEmpleado" id="cargo">
		  </div>
		  <div class="form-group">
		    <label for="activo">Activo:</label>
		    <input type="text" class="form-control" name="activoEmpleado" id="activo">
		  </div>
		  <div class="form-group">
		    <label for="contrasena">Password:</label>
		    <input type="password" class="form-control" name="contrasenaPer" id="contrasena">
		  </div>
		  <button type="submit" class="btn btn-default" value="Submit">Crear</button>
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