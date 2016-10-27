@extends('template')

@section('title','Mostrar cargos')

@section('content')

<form method="POST" action="mostrarCar">
	{{ csrf_field()}}

	<div class="container">

	<h2><p class="text-center">  Mostrar todos los cargos </p></h2><br><br>

	  <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>Nombre de Cargo</th>
	        <th>Descripción</th>
	      </tr>
	    </thead>

	    <tbody>

	    </tbody>
	  </table>
	</div>


</form>

@endsection