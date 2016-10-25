<!DOCTYPE html>
<html>
<head>
	<title>Trámite Documentario</title>
</head>
<body>
<form method="POST" action="crearCar">
	{{ csrf_field()}}
	Nombre Nuevo Cargo :
	<input type="text" name="nombreCargo">
	<br>
	Descripción :
	<input type="text" name="descripcion">
	 <br> <input type="submit" value="Submit">
</form>

</body>
</html>