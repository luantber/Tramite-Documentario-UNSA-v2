<!--<!DOCTYPE html>
<html>
<head>
	<title>crearEmpleado</title>
</head>
<body>-->

@extends('template')

@section('title','Crear Empleado')

@section('content')

<h1>CREAR EMPLEADO</h1>

<form method="POST" action="crearE">
	{{ csrf_field()}}
	DNI
	<input type="text" name="dniEmpleado">
	<br>
	Área:
	<input type="text" name="areaEmpleado">
	<br>Cargo:
	<input type="text" name="cargoEmpleado">	
	<br>activo:
	<input type="text" name="activoEmpleado">
	 <br> <input type="submit" value="Submit">
</form>

@endsection

<!--
</body>
</html>-->