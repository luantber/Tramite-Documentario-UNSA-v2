@extends('template')

@section('title','Ver Trámites')

@section('content')

<h2><p class="text-center">  Ver Trámites </p></h2>
	<br>


	<div class="container">

		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Todos</a></li>
		  <li role="presentation"><a href="#">En Proceso</a></li>
		  <li role="presentation"><a href="#">Finalizados</a></li>
		  <li role="presentation"><a href="#">Rechazados</a></li>
		</ul>
		<br>
		
		<div id="container"></div>
	</div>


<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTramites url="{{asset('tramites/todos')}}" refresh="50000" />,
	document.getElementById('container')
);
</script>


@endsection
