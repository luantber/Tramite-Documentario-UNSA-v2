@extends('template')

@section('title','Tramite Documentario')


@section('content')

<div class="row">
  	<div class="col-md-6 col-md-offset-3">

		<!--<h2><p class="text-center">  Welcome, this is the home </p></h2><br>-->
		@if (Auth::check())
			<h2><p clas="text-center"> Hola, {{Auth::user()->nombre}}  </p></h2>
			@if(isset(Auth::user()->empleado->estado->nombre))

				<p>Su estado es: {{Auth::user()->empleado->estado->nombre}}  </p>
			@endif

		@endif

		

		<h2><p class="text-center">  ¡Bienvenidos a Trámite Documentario! </p></h2><br>
	</div>
	<div align="center">
		<img src="{{asset('imagenes/tramite.png')}}" class="img-thumbnail" width="350" height="250" align="center">
		<br>
		<br>
		@if(!Auth::check())
			¿No le llegó el correo de verificación? Puede volver a reeenviarlo  
			<a href="{{url('reenviar')}}">aquí</a>
		@endif
	</div>

</div>

@endsection