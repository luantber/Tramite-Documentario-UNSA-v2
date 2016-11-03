@extends('template')

@section('title','Tramite Documentario')


@section('content')

<div class="row">
  	<div class="col-md-6 col-md-offset-3">

		<!--<h2><p class="text-center">  Welcome, this is the home </p></h2><br>-->
		@if (Auth::check())
			<h2><p clas="text-center"> Hola, {{Auth::user()->nombre}}  </p></h2>
			<p>Su estado es: {{Auth::user()->empleado->estado->nombre}}  </p>
		@endif

		

		<h2><p class="text-center">  ¡Bienvenidos a Trámite Documentario! </p></h2><br>
		 <img src="{{asset('imagenes/tramite.png')}}" class="img-thumbnail" width="550" height="450">
	</div>
</div>

@endsection