@extends('template')

@section('title','Crear Area')

@section('content')


<form id="formulario" method="POST" action="{{asset('areas/crear')}}">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Crear Nueva Área </p></h2>

	  <div class="row">
			<div class="col-sm-12">
				<label for="nomArea" >Nombre del Área: </label>
				<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
						</span>
			  		<input class="form-control" type="text" name ="nomArea" id="nomArea" placeholder="Ingrese nombre de área" required="">
				</div>
			    <div id="EnomArea" ></div>
			</div>
	  </div><br>

      <div class="form-group">
		    <label for="idAreaPad"> Nombre del Área Padre: </label>
		    	<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					</span>
				    	<select type="text" class="form-control" placeholder="Selecciona el Area Padre" name="idAreaPad" id="idAreaPad">
							<option value="0">Sin Padre</option>
							@foreach($areas as $area)
			                    <option value="{{$area->id}}">{{$area->nombre}}</option>
			                @endforeach
						</select>
				</div>
		  </div>

		  <div class="form-group">
		    <label for="jefArea"> Jefe del Área: </label>
		    	<div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					</span>
				    	<select type="text" class="form-control" placeholder="Selecciona el Jefe del Área" name="jefArea" id="jefArea">
							<option value="0">Sin Jefe</option>
						</select>
				</div>
		  </div>

		  <div class="form-group">
		    <label for="descripcion"> Descripción: </label>
	        	<textarea class="form-control" placeholder="Ingrese la descripción"  name="descripcion" id="descripcion" required="true"></textarea>
	      </div>

	      <div class="text-center">
	      	<button class="btn btn-lg btn-primary btn-primary" type="submit" value="Submit">Crear nueva área</button> 
	      </div>

		</div>
	</div>

</form>

<div id="error"> </div>
<script type="text/javascript">
	
	$("#formulario").submit(function(e) {

    var url = "{{asset('areas/crear')}}"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#formulario").serialize(), // serializes the form's elements.
           success: function(data)
           {
               console.log(data);
               if(!data.resp){
                	if(data.error=="nomArea"){

               	    alertify.set('notifier','position', 'top-right');
     		 		var msg = alertify.error('Default message');
			 		msg.delay(10).setContent(data.data);

                	}
               		else{

               			alertify.set('notifier','position', 'top-right');
     		 			var msg = alertify.error('Default message');
			 			msg.delay(10).setContent(data.data);
			 		
               		}
               	}
               	else{
               		
               		alertify.set('notifier','position', 'top-right');
     		 		var msg = alertify.success('Default message');
			 		msg.delay(10).setContent(data.data);
			
               		$("#nomArea").val("");
               		$("#idAreaPad").val(0);
               		$("#jefArea").val(0);
               		$("#descripcion").val("");

               		$("#EnomArea").html("");
               		
               	}

           },
           error: function(xhr, desc, err)
           {
           		console.log(xhr.responseText);
           		$("#error").html(xhr.responseText);
           }

         });
    e.preventDefault(); // avoid to execute the actual submit of the form.

});

</script>

	
@endsection
