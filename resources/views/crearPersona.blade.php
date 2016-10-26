<!DOCTYPE html>
<html>
<head>
	<title>crearPersona</title>
</head>
<body>
<h1>CREAR NUEVO EMPLEADO</h1>
<form method="POST" action="crear">
	{{ csrf_field()}}
	nombre:
	<input type="text" name="nomPer">
	<br>apellido:
	<input type="text" name="apellidoPer">	
	<br>dni:
	<input type="text" name="dni">
	<br>email: <input type="email" name="correo">
	<br>password:
	<input type="password" name="contrasenaPer">
	 <br> <input type="submit" value="Submit">
</form>

</body>
</html>