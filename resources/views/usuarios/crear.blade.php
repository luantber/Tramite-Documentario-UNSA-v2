@extends('template')

@section('title','Crear Nuevo Usuario')

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
				</div><br><br>
				

				<div class="form-group">
    				<div class="text-center">
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
		var DNI = document.getElementById("DNI").value;
		var correo = document.getElementById("mail").value;
		var texto,texto2;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un DNI correcto. Verifique el número de digitos(8)";
		    alertify.error(texto);
			return false;
		}

		if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w/.test(correo)) ) {
			texto2 = "Ingrese un e-mail válido.Verifique que contenga '@' y el '.' Ejemplo 'miCorreo@algo.algo' ";
			alertify.error(texto2);
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



