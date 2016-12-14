@extends('template')

@section('title','Panel')

@section('content')

<div class="row">
	<div class="col-md-3">
		<div class="btn-group btn-group-lg btn-block" role="group">
			<button type="button" class="btn btn-success btn-block" > Crear Tramite </button>
			<button type="button" class="btn btn-warning btn-block" > Buscar Tramite </button>
			<button type="button" class="btn btn-primary btn-block" > Buscar Persona </button>
		</div>
	</div>

	<div class="col-md-9">
		<div id="container"></div>
	</div>
</div>


<script type="text/javascript">

	$.ajax({url: "panel2/panelcito",
	 success: function(result){
        $("#container").html(result);
    }});
    
</script>

@endsection