<!--<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Nuevo Empleado')

@section('content')

	<!--<div class="container">-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Empleado </p></h2>
		<br><br>

		<form method="post" onsubmit="return validar()" action="{{asset('empleados/crearNewEmple')}}">
		{{ csrf_field()}}

			<div class="row">
				<div class="col-sm-6">
					<label for="nomPer" >Nombre: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nomPer" id="nomPer" placeholder="Ingrese nombres" required="true">
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="apellido" >Apellido: </label>
				    <input class="form-control" type="text" name ="apellidoPer" id="apellido" placeholder="Ingrese apellidos" required="true">	
			  </div>
			</div><br>

			<div class="row">
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
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			  	<label for="area">Área: </label>
				    <select name="id_area" type="text" class="form-control" id="area">
			          <option value="" >Seleccionar área</option>
		          			@foreach($area as $are)
			                    <option value='{{$are->id}}'>{{$are->nombre}}</option>
			                @endforeach  
			        </select>
			        <!--<input class="form-control" type="text" name ="areaEmpleado" id="area" placeholder="Ingresar área" required="true">-->
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Cargo: </label>
				  	<select name="id_cargo" type="text" class="form-control" id="cargo">
			          <option value="" >Seleccionar cargo</option>
			          		@foreach($cargo as $carg)
			                    <option value='{{$carg->id}}'>{{$carg->nombreCargo}}</option>
			                @endforeach
			        </select>
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="estado">Estado: </label>
				  	<select name="id_estado" type="text" class="form-control" id="estado">
			          <option value="" >Seleccionar estado</option>
			          		@foreach($estado as $stads)
			                    <option value='{{$stads->id}}'>{{$stads->nombre}}</option>
			                @endforeach
			        </select>
			  </div>
			</div><br>

			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit"> 
					Crear nuevo empleado </button> 
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

		else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido";
			document.getElementById("nocorreo").innerHTML = texto2;
			return false;
		}
	}
</script>


<!--<div class=" row">
  <div class="col-sm-12">
    <button type="submit" class="btn btn-lg" value="Submit">  Crear  </button>
  </div>
</div><br>-->

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