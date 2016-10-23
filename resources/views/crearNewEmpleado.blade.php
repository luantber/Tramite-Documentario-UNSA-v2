<!DOCTYPE html>
<html>
<head>
	<title>crear</title>
</head>
<body>
<form method="POST" action="crearNewEmple">
	{{ csrf_field()}}
	nombre:
	<input type="text" name="nomPer">
	<br>apellido:
	<input type="text" name="apellidoPer">	
	<br>dni:
	<input type="text" name="dni">
	<br>email: <input type="email" name="correo">
	<br>Área:
	<input type="text" name="areaEmpleado">
	<br>Cargo:
	<input type="text" name="cargoEmpleado">	
	<br>activo:
	<input type="text" name="activoEmpleado">

	<br>password:
	<input type="password" name="contrasenaPer">
	 <br> <input type="submit" value="Submit">
</form>

</body>
</html>