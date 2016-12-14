<!--<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Nuevo Empleado')

@section('materialize')
  <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
  <script src="{{asset('js/materialize.min.js')}}" ></script>
@endsection


@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection

@section('content')
<style type="text/css">
	 .ilike-blue-container {
    @extend .blue, .lighten-4;
  }

  .ilike-blue-container {
    @extend .blue-text, .text-lighten-4;
  }
</style>

	<!--<div class="container">-->
<div class="row">
	<div class="col-md-8 col-md-offset-2">

		<h2><p class="text-center">  Crear Nuevo Empleado </p></h2>
		<br><br>

		<form method="post" id="formulario" action="{{asset('empleados/crearNewEmple')}}">
		{{ csrf_field()}}




			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
					<label for="nomPer" >Nombre: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nomPer" id="nomPer" placeholder="  Ingrese Nombres "  required="true">
					</div>
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="apellido" >Apellido: </label>
				    <input class="form-control" type="text" name ="apellidoPer" id="apellido" placeholder=  "Ingrese apellidos" required="true">
			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-6">
					<label for="DNI">DNI: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="dni" id="DNI" placeholder="  Ingrese DNI" required="true">
					</div>
					<p id="noingreso"></p>
				</div>

			    <div class="col-sm-6">
					<label for="mail" >e-mail: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="correo" id="mail" placeholder="  Ingrese el e-mail" required="true">
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
			        </select><br>
			        <div id="margarita">
			        	
			        </div>

 
	<div class="progress" id="porcentaje">
  </div>

			  </div>
			</div><br>

			<div class="form-group indigo darken-1">
				<div class="text-center" id="boton">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
					Crear nuevo empleado </button>
				</div>
			</div>

		</form>
	</div>
</div>

<div>
</div>
</div>


<script type="text/javascript">
	$("#formulario").submit(function(evento){

		$("#porcentaje").html("<div class='indeterminate spinner-red-only'></div>");
		$("#boton").html("<button class='btn btn-lg btn-primary btn-block' disabled='' type='submit' value='Submit'> Creando Nuevo Empleado </button>");

		var DNI = document.getElementById("DNI").value;
		var correo = document.getElementById("mail").value;
		var texto,texto2;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un DNI correcto. Verifique el número de digitos(8)";
		    alertify.set('notifier','position', 'top-right');
     		 var msg = alertify.error('Default message');
			 msg.delay(10).setContent(texto);
			$("#porcentaje").html(" ");
			$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
			return false;
		}

		else if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido.Verifique que contenga '@' y el '.' Ejemplo 'miCorreo@algo.algo' ";
		    alertify.set('notifier','position', 'top-right');
     		 var msg = alertify.error('Default message');
			 msg.delay(10).setContent(texto2);
			$("#porcentaje").html(" ");

			$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
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

						 alertify.set('notifier','position', 'top-right');
						 var msg = alertify.error('Default message');
						 msg.delay(10).setContent(data.data2);
						 var msg2 = alertify.error('Default message');
 						msg2.delay(10).setContent(data.data);

 						$("#porcentaje").html(" ");

						$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");

					}
					else if(data.error == "email"){
					//	alertify.error(data.data);
						alertify.set('notifier','position', 'top-right');
						 var msg = alertify.error('Default message');
						 msg.delay(10).setContent(data.data);

						 $("#porcentaje").html(" ")

						$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
					}
				}

				else{

					alertify.set('notifier','position', 'top-right');
					 var msg = alertify.success('Default message');
					 msg.delay(10).setContent(data.data);
					
//					alertify.success(data.data);
					
					$("#nomPer").val("");
					$("#apellido").val("");
					$("#mail").val("");
					$("#DNI").val("");
					$("#estado").val("");
					$("#cargo").val("");
					$("#area").val("");

					$("#porcentaje").html(" ")

					$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");

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

