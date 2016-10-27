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

				<div class="row">
				    <div class="col-sm-12">
						<label for="contrasena" >Password: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="password" name ="contrasenaPer" id="contrasena" placeholder="Ingresar contraseña">
						</div>
					</div>
				</div><br><br>

				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo usuario</button> 

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