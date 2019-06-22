<?php
	
	$titulo = $_POST['titulo'];
	$autor  = $_POST['autor'];
	$precio = $_POST['precio'];

	include("conexion.php");
	
	$ag = "INSERT INTO libros
			VALUES (
				NULL,
				'$titulo',
				'$autor',
				$precio,
				NULL
			)";
	
	$ej = mysqli_query($conexion, $ag);
	
	if($ej){
		header("location:interno.php");
	} else {
		echo "Error";
	}
	
?>