<!--<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Nuevo Empleado')

@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection

@section('content')

	<!--<div class="container">-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Empleado </p></h2>
		<br><br>

		<form method="post" id="formulario" action="{{asset('empleados/crearNewEmple')}}">
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
				    <select required="" name="id_area" type="text" class="form-control" id="area">
			          <option value="" >Seleccionar área</option>
		          			@foreach($area as $are)
			                    <option value='{{$are->id}}'>{{$are->nombre}}</option>
			                @endforeach
			        </select>
			    
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Cargo: </label>
				  	<select required="" name="id_cargo" type="text" class="form-control" id="cargo">
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
				  	<select required="" name="id_estado" type="text" class="form-control" id="estado">
			          <option value="" >Seleccionar estado</option>
			          		@foreach($estado as $stads)
			                    <option value='{{$stads->id}}'>{{$stads->nombre}}</option>
			                @endforeach
			        </select>
			        *Esperar hasta alerta de confirmación o rechazo de la petición, NO mandar mas de una vez si no recibio la alerta primero.
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
	$("#formulario").submit(function(evento){

		var DNI = document.getElementById("DNI").value;
		var correo = document.getElementById("mail").value;
		var texto,texto2;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un DNI correcto. Verifique el número de digitos(8)";
		    alertify.error(texto);
			return false;
		}

		else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido.Verifique que contenga '@' y el '.' Ejemplo 'miCorreo@algo.algo' ";
			alertify.error(texto2);
			return false;
		}

		var ruta = "{{asset('empleados/crearNewEmple')}}";
		$.ajax({
			type:"POST",
			url: ruta,
			data: $("#formulario").serialize(),
			success: function(data){
				console.log(data);
				if(!data.respuesta){
					if(data.error =="dni"){
						alertify.error(data.data);
					}
					else if(data.error == "email"){
						alertify.error(data.data);
					}	
				}

				else{
					alertify.success(data.data);
					$("#nomPer").val("");
					$("#apellido").val("");
					$("#mail").val("");
					$("#DNI").val("");
					$("#estado").val("");
					$("#cargo").val("");
					$("#area").val("");

				}
			},
			error: function(xhr, desc, err){
				console.log(xhr.responseText);
				$("#error").html(xhr.responseText);
			}

		});

      evento.preventDefault();
	
	});
</script>


@endsection

