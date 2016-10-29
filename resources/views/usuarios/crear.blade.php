@extends('template')

@section('title','Crear Nuevo Usuario')

@section('content')


	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Usuario </p></h2>

		<br><br>
			<form method="post" onsubmit="return validar()" action="{{asset('usuarios/crear')}}">

				{{ csrf_field()}}

				<div class="row">
					<div class="col-sm-12">
						<label for="nomPer" >Nombre: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
					  		<input class="form-control" type="text" name ="nomPer" id="nomPer" placeholder="Ingrese nombres" required="true">
						</div>
					</div>
				</div><br>

				<div class="row">
				  <div class="col-sm-12">
				  		<label for="apellido" >Apellido: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
					    	<input class="form-control" type="text" name ="apellidoPer" id="apellido" placeholder="Ingrese apellidos" required="true">
					    </div>
				  </div>
				</div><br>

				<div class="row">

					<!--<form onsubmit="validar()" >-->
						<div class="col-sm-6">
							<label for="DNI">DNI: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
									</span>
							    <input class="form-control" type="text" name ="dni" id="DNI" placeholder="Ingrese DNI" required="true">
							</div>
							<p id="noingreso"></p>
						</div>
					<!--</form>-->

				    <div class="col-sm-6">
						<label for="mail" >e-mail: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="text" name ="correo" id="mail" placeholder="Ingrese el e-mail" required="true">
						</div>
						<p id="nocorreo"></p>
					</div>
				</div><br><br>

				<div class="form-group">
    				<div class="text-center">
						<button class="btn btn-lg" type="submit" value="Submit"> 
						Crear nuevo usuario </button> 
					</div>
				</div>

	

			</form>
		</div>
	</div>

<script type="text/javascript">
	function validar(){
		var DNI = document.getElementById("DNI").value;
		var correo = document.getElementById("mail").value;
		var texto,texto2;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un número de 8 digitos";
  			document.getElementById("noingreso").innerHTML = texto;
			return false;
		}

		if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido";
			document.getElementById("nocorreo").innerHTML = texto2;
			return false;
		}
	}
</script>


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