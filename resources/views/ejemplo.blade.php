@extends('template')

@section('title','ejemplo')

@section('script')

<script>
$(document).ready(function(){
   $("#enlaceajax").click(function(evento){
      evento.preventDefault();
      $("#destino").load("{{asset('textoAjax')}}");
   });
})
</script>

@endsection





@section('script2')

<script>

var ruta = "{{asset('elphp')}}";

$(document).ready(function(){
/*
	$.ajax({
		url: ruta ,
		method:"POST",
		dataType: "html",
		data: {_token:"{{csrf_token()}}"},
		success:function(){
			console.log("hizo");
		},
		error: function(xhr,status,err){
			console.log(xhr,status,err);
		}
		});

		*/
   $("#btonEnviar").click(function(evento){
      evento.preventDefault();
      $("#destino").load("{{asset('elphp')}}", {formu:$('#formulario').serialize(),nombre: "Pepe", edad: 45 , _token:"{{csrf_token()}}"}, function(){
         //alert("recibidos los datos por ajax");
     		});
       });

});
</script>

@endsection

@section('script3')
<script type="text/javascript">
	$(function(){
		$("#btonEnviar").submit(function(){
			var ruta = "{{asset('formulario')}}";
			$.ajax({
				type: "POST",
				url: ruta,
				data:{_token:"{{csrf_token()}}"},
				success:function(data){
					console.log("hizo");
					$("#respuesta").html(data);
				},
				error: function(xhr,status,err){
					console.log(xhr,status,err);
				}
			});
		});
	});
</script>
@endsection

@section('content')

<a href="#" id="enlaceajax">Haz clic aqui </a>
<br>
<div id="destino"></div>

<form method="POST" id="formulario">
<label>Introduce un nombre : </label>
<input type="text" name="nombre" placeholder="aqui el nombre">
<label>Apellido : </label>
<input type="text" name="apellido" placeholder="aqui el apellido">
<label id="respuesta"></label>
<input type="button" name="" id="btonEnviar" value="buscarNombre">	
</form>


@endsection



