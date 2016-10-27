@extends('template')

@section('title','Crear nuevo Usuario')

@section('content')

@section('body')

<span class="glyphicon glyphicon-search" aria-hidden="true"></span>

<form method="POST" action="crear">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Usuario </p></h2>
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
	<br>password:
	<input type="password" name="contrasenaPer">
	 <br> <input type="submit" value="Submit">
</form> -->


@endsection
