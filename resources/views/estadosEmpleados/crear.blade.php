@extends('template')

@section('title','Crear Estado Empleado')

@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >
@endsection

@section('content')

<form method="POST" action="{{asset('empleados/estados/crear')}}" id="formulario">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nuevo Estado </p></h2>
		<form>

      <div class="form-group">
		    <label for="nomArea"> Nombre del Estado: </label>
		    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nomEstado" required="true">
		  </div>


		  <div class="form-group">
		    <label for="Descripcion"> Descripción: </label>
        <textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
      </div>

		  <div class="form-group">
        	<div class="text-center">
          		<button type="submit" value="Submit" class="btn btn-lg">Crear Estado</button>
        	</div>
      	  </div>

		</form>
		</div>
	</div>

</form>
<div id="error"></div>
<script>
	$("#formulario").submit(function(evento){
		var ruta = "{{asset('empleados/estados/crear')}}";
		$.ajax({
			type:"POST",
			url: ruta,
			data: $("#formulario").serialize(),
			success: function(data){
				console.log(data);
				if(!data.respuesta){
					if(data.error=="nombre"){
						alertify.error(data.data);
					}
				}
				else{
					alertify.success(data.data);
					$("#nomEstado").val("");
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