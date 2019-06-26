<?php
//interno.php

//preguntar si no existe la variable de sesion
session_start();
if (isset($_SESSION['id']) === false) {
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Hola nombre!</title>
	<link href="estilos.css" rel="stylesheet">
</head>

<body>
	<h1>nombre, esta es la librería de Don Pepe!</h1>

	<a href="agregar.php">Agregar libro</a> |
	<a href="salir.php">Cerrar sesión</a>

	<hr>
	<div class="listado">
		<?php
		//Mostrar los libros
		//1.Conectar BD
		//2.Crear query
		//3 Preguntar si No funcion
		//4.Mostrar resultados con while
		include("conexion.php");

		$select  = "SELECT l.id_libro,l.titulo,l.autor,l.precio,l.cover, IFNULL(r.rating,0) AS rating FROM libros l LEFT JOIN ratings r ON l.id_libro=r.id_libro ORDER BY l.id_libro ASC";

		$select_ej = mysqli_query($conexion, $select);


		if (!$select_ej) {
			echo "No funciono la query";
		} else {
			//cuantos registros devolvio
			$cant = mysqli_num_rows($select_ej);
			if (!$cant) {
				echo "No tengo libros de ese estilo";
			} else {

				while ($reg = mysqli_fetch_array($select_ej)) {


					echo "<a href='editar.php?id=" . $reg['id_libro'];
					echo "'";
					echo "class='listado-libro'>";
					echo "<h2>" . $reg['titulo'];
					echo "<span class='listado-libro_autor'>" . $reg['autor'] . "</span>";
					echo "</h2>";
					echo "<img src='cover/" . $reg['cover'];
					echo "'";
					echo " alt='portada libro'>";
					echo "<p>Precio: $" . $reg['precio'] . "<br>";
					echo "Rating: " . $reg['rating'] . "/5";
					echo "</p>";
					echo "</a>";
				}
			}
		}

		?>
	</div>

</body>

</html>