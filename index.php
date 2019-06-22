<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ingreso a librería</title>
	</head>

	<body>
		<h1>Bienvenido admin!</h1>
		
		<form method="post" action="login_pr.php">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario">

			<label for="clave">Contraseña</label>
			<input type="password" name="clave" id="clave">
			
			<input type="submit" name="button" value="Ingresar">
		</form>
		
		<br>
		<a href="registro.php">Registrar nuevo usuario</a>
	</body>
</html>
