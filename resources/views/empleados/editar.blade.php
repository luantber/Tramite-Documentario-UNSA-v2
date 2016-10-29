@extends('template')

@section('title','Perfil')


@section('content')
	
	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Empleados </p></h2>

		<br><br>
			<form method="post" onsubmit="return validar()" action="{{asset('empleados')}}{{'/'.$empleado->id}}">

				{{ csrf_field()}}

				<div class="row">
					<div class="col-sm-12">
						<label for="nombre" >Nombre: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
							<input class="form-control" type="string" name ="nombre" id="nombre" value="{{$empleado->nombre}}" disabled="" required="true">
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
					    	<input class="form-control" type="string" name ="apellido" id="apellido" value="{{$empleado->apellido}}" disabled="" required="true">
					    </div>
				  </div>
				</div><br>

				<div class="row">
					<div class="col-sm-6">
						<label for="area">Area: </label>
						    <input class="form-control" type="string" name ="area" id="area" value="{{$empleado->area}}" required="true">
					</div>
				    <div class="col-sm-6">
				  		<label for="cargo" >Cargo: </label>
							    <input class="form-control" type="string" name ="cargo" id="cargo" value="{{$empleado->cargo}}" required="true">
					</div>

				</div><br>

				<div class="row">
					<div class="col-sm-6">
						<label for="mail" >e-mail: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="string" name ="email" id="mail" value="" disabled="" required="true">
						</div>
						<p id="nocorreo"></p>
					</div>
					<div class="col-sm-6">
						<label for="DNI" >DNI: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
								</span>
						    <input class="form-control" type="string" name ="dni" id="DNI" value="" disabled="" required="true">
						</div>
						<p id="noingreso"></p>
					</div>
				</div><br>

				<div class="row">
				  <div class="col-sm-6">
				  		<label for="activo" >Activo: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</span>
					    	<input class="form-control" type="string" name ="activo" id="activo" value="{{$empleado->activo}}" required="true">
					    </div>
				  </div>
				</div><br><br>


				<div class="form-group">
    				<div class="text-center">
						<button class="btn btn-lg" type="submit" value="Submit"> 
						Guardar cambios </button> 
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