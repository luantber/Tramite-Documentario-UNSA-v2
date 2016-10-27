<!--<!DOCTYPE html>
<html>
<head>
	<title>Trámite Documentario</title>
</head>
<body>-->

@extends('template')

@section('title','Editar Cargo')

@section('content')

<h1>EDITAR CARGO</h1>
<form method="POST" action="editarCar">
	{{ csrf_field()}}
	ID :
	<input type="text" name="IDcargo">
	<br>Nombre:
	<input type="text" name="newNombreCargo">
	<br>
	Descripción :
	<input type="text" name="newDescripcion">
	 <br> <input type="submit" value="Submit">
</form>

@endsection

<!--
</body>
</html>-->