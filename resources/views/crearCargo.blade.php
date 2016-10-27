<!--
<!DOCTYPE html>
<html>
<head>
	<title>Trámite Documentario</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Cargo')

@section('content')


<h1>CREAR CARGO</h1>
<form method="POST" action="crearCar">
	{{ csrf_field()}}
	Nombre Nuevo Cargo :
	<input type="text" name="nombreCargo">
	<br>
	Descripción :
	<input type="text" name="descripcion">
	 <br> <input type="submit" value="Submit">
</form>

@endsection

<!--
</body>
</html>-->