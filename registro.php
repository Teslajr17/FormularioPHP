<!doctype html> 
<html> 
<head> 
	<title>Formulario de registro </title> 
	<script src="script.js" type="text/javascript"></script>
</head> 
<body style="background-color: skyblue;"> 
<form action="guardar.php" method="POST"> 
<form name="FormDatos" method="post" onsubmit="return validateForm()">
	<h1>Ingresa dus datos</h1>
	<label for="nombre">Nombre</label> 
	<input type="text" name="nombre" required/> 
	<br />
	<label for="apellido">Apellido</label> 
	<input type="text" name="apellido" required/> 
	<br />
	<label for="edad">Edad</label>
	<input type="text" name="edad" required/> 
	<br />
	<label for="correo">Correo</label> 
	<input type="email" name="correo" required/> 
	<br />
	<input name="enviar" type="submit" value="registrar"/> 
</form> 
</body> 
</html>

