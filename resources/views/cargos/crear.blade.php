
@extends('template')

@section('title','Crear Cargo')

@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >



@endsection

@section('content')

<form method="POST" action="crearCar" id="formulario">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

			<h2><p class="text-center">  Crear Nuevo Cargo </p></h2>
				<br><br>

			<div class="row">
				<div class="col-sm-12">
					<label for="nomcargo" >Nombre de cargo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nombreCargo" id="nomcargo" placeholder="Ingrese nombre de cargo">
					</div>
				</div>
			</div><br>
			<div class="row">
			  <div class="col-sm-12">
			  		<label for="descrip" >Descripción: </label>
				    <textarea class="form-control" placeholder="Ingrese la descripción del área"  name="descripcion" id="descripcion"></textarea>
			  </div>
			</div><br>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo cargo</button> 

		</div>
	</div>

</form>
<div id="error"></div>
<script>
	$("#formulario").submit(function(evento){
		var ruta = "{{asset('cargos/crearCar')}}"
		$.ajax({
			type:"POST",
			url: ruta,
			data:$("#formulario").serialize(),
			success: function(data){
				console.log(data);
				if(!data.respuesta){
					if(data.error=="nombreCargo"){
						alertify.error(data.data);
					}
				}
				else{
					alertify.success(data.data);
					$("#nomcargo").val("");
					$("#descripcion").val("");
				}
			},
			error: function(xhr, desc, err){
				console.log(xhr.responseText);
				$("#error").html(xhr.responseText);}
		});

		evento.preventDefault();
	});
</script>

@endsection
