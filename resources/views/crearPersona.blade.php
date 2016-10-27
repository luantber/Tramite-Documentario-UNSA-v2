@extends('template')

@section('title','Crear Nuevo Usuario')

@section('content')

<form method="POST" action="crear">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Usuario </p></h2>

		<br><br>
			<form>
		  		<div class="form-group row">
				  <label for="nomPer" class="col-xs-2 col-form-label">Nombre: </label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" name ="nomPer" id="nomPer">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="apellido" class="col-xs-2 col-form-label">Apellido: </label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" name ="apellidoPer" id="apellido">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="DNI" class="col-xs-2 col-form-label">DNI: </label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" name ="dni" id="DNI">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="mail" class="col-xs-2 col-form-label">e-mail: </label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" name ="correo" id="mail">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="contrasena" class="col-xs-2 col-form-label">Password: </label>
				  <div class="col-xs-10">
				    <input class="form-control" type="password" name ="contrasenaPer" id="contrasena">
				  </div>
				</div>
				<div class="form-group row">
				  <label class="col-xs-2 col-form-label"></label>
				  <div class="col-xs-10">
				    <button type="submit" class="btn btn-lg" value="Submit">  Crear  </button>
				  </div>
				</div>
			</form>
		</div>
	</div>
</form>

@endsection

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
</form>

</body>
</html>-->