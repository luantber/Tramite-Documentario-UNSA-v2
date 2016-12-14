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
		<iframe  style="width: 100%;height: 600	px;position: relative;" src="http://localhost:8000/panel2/panelcito"></iframe>
	</div>
</div>

<script type="text/javascript">
	
</script>
@endsection