@extends('template')

@section('title','Crear Empleado')

@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection

@section('content')

<form method="POST" id="formulario" action="EmpleadoUsu">
	{{ csrf_field()}}

	<!--<div class="container">-->
	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center"> Crear Empleado </p></h2>
		<br><br>
		<form>
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



			</div><br><br>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo empleado</button> 
		
		</form>
		</div>
	</div>
</form>


<script type="text/javascript">
	$("#formulario").submit(function(evento){

		var DNI = document.getElementById("DNI").value;
		var texto;

		if( !(/^\d{8}$/.test(DNI)) ) {
		    texto ="Ingrese un DNI correcto. Verifique el número de digitos(8)";
		    alertify.error(texto);
			return false;
		}


		var ruta = "{{asset('empleados/EmpleadoUsu')}}";
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