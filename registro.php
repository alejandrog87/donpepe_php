<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" >
		<title>Registrarse</title>
	</head>

	<body>
		<form method="post" action="registro_pr.php">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" >
			
			<label for="clave">Contraseña</label>
			<input type="password" name="clave" id="clave" >
			
			<label for="nombre">Nombre Completo</label>
			<input type="text" name="nombre" id="nombre">
			
			<label for="email">Email</label>
			<input type="text" name="email" id="email" >
			
			<input type="submit" value="Registrarse">
		</form>
	</body>
</html>