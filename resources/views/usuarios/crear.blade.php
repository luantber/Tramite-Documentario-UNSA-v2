@extends('template')

@section('title','Crear Nuevo Usuario')


@section('materialize')
  <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
  <script src="{{asset('js/materialize.min.js')}}" ></script>
@endsection


@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection




@section('content')



	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Usuario </p></h2>

		<br><br>
			<form   method="POST"  id="formulario" action="{{asset('usuarios/crear')}}">
				{{ csrf_field()}}

				<div class="row">
				
					<div class="col-sm-12">
						<label for="nomPer" >Nombre: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</span>
					  		<input class="form-control" type="text" name ="nombre" id="nomPer" placeholder="Ingrese nombres" required="true">
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
					    	<input class="form-control" type="text" name ="apellido" id="apellido" placeholder="Ingrese apellidos" required="true">
					    </div>
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
							<div id="dniRepe"></div>
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
						    <div id="emailRepe"></div>
						<p id="nocorreo"></p>
				
					</div>
					<p>.</p>
						
						<div class="progress" id="porcentaje">
							
						</div>
				</div>

				<div class="form-group">
    				<div class="text-center" id="boton">
						<button class="btn btn-lg" type="submit" id="btonEnviar" value="Submit"> 
						Crear nuevo usuario </button> 
					</div>
				</div>

	

			</form>
		</div>
	</div>
	
<div id="error"></div>

<script>



   $("#formulario").submit(function(evento){

   		$("#porcentaje").html("<div class='indeterminate spinner-red-only'></div>");
		$("#boton").html("<button class='btn btn-lg btn-primary btn-block' disabled='' type='submit' value='Submit'> Creando Nuevo usuario </button>");

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

		if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido.Verifique que contenga '@' y el '.' Ejemplo 'miCorreo@algo.algo' ";
			alertify.set('notifier','position', 'top-right');
     		 var msg = alertify.error('Default message');
			 msg.delay(10).setContent(texto2);
			$("#porcentaje").html(" ");

			$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
			return false;
		}

		var ruta = "{{asset('usuarios/crearr')}}"

		$.ajax({
			type:"POST",
			url: ruta,
			data:$("#formulario").serialize(),
			success: function(data){
				console.log(data);
				if(!data.respuesta){
					if(data.error =="dni"){
						alertify.set('notifier','position', 'top-right');
						 var msg = alertify.error('Default message');
						 msg.delay(10).setContent(data.data);

						 $("#porcentaje").html(" ")

						$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
					}
					else if(data.error == "email"){
						alertify.set('notifier','position', 'top-right');
						 var msg = alertify.error('Default message');
						 msg.delay(10).setContent(data.data);

						 $("#porcentaje").html(" ")

						$("#boton").html("<button class='btn btn-lg btn-primary btn-block' type='submit' value='Submit'> Crear nuevo empleado </button>");
					}	
				}

				else{
					alertify.success(data.data);
					$("#nomPer").val("");
					$("#apellido").val("");
					$("#mail").val("");
					$("#DNI").val("");

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



