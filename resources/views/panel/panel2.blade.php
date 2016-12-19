@extends('template')

@section('title','Panel')


@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection

@section('content')

<div class="row">
	<div class="col-md-3">
		<div class="btn-group btn-group-lg btn-block" role="group">
			<button type="button" onclick="boton1()" class="btn btn-success btn-block" id="boton1" > Crear Tramite </button>
			
			<button type="button" onclick="click()" class="btn btn-warning btn-block" id="boton2"> Buscar Tramite </button>
			<button type="button" class="btn btn-primary btn-block" id="boton3"> Buscar Persona </button>
		</div>
	</div>
	<div id="destino"></div>

	<div class="col-md-9">
		<div class="col">
			<iframe  style="width: 100%; height: 450px; position: relative;" src="http://localhost:8000/panel2/panelcito"></iframe>
		</div>
	</div>
</div>

<script type="text/javascript">
	function boto1(){
		$.ajax({
			url :"{{asset('tramite/')}}"
		});
	}
</script>

<script> 
$(document).ready(function click(){ 
   $("#boton1").click(function(evento){ 
      evento.preventDefault(); 
      $("#destino").load("{{asset('tramite/recibir')}}"); 
   }); 
})


$(document).ready(function click(){ 
   $("#boton2").click(function(evento){ 
      evento.preventDefault(); 
      $("#destino").load("{{asset('busqueda/porTramite')}}"); 
   }); 
})

$(document).ready(function click(){ 
   $("#boton3").click(function(evento){ 
      evento.preventDefault(); 
      $("#destino").load("{{asset('busqueda/porUsuario')}}"); 
   }); 
}) 

</script> 


@endsection