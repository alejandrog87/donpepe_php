<!doctype html>
<html>
	<head>
		<!-- formulario_insertar.php -->
		<title>Formulario insertar</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Insertar libro</h1>
		
		<form action="agregar_pr.php" method="post">
			<label>
				Título:<br>
	<input type="text" required name="titulo">
			</label><br>
			<label>
				Autor:<br>
	<input type="text" required name="autor">
			</label><br>
			<label>
				Precio:<br>
	<input type="number" required min="0" max="9999" name="precio">
			</label><br><br>
			
			<input type="submit" value="Agregar">
		</form>
	</body>
</html>










