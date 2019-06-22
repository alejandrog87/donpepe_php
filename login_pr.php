<?php
// login_pr.php
//habilitamos el uso de cookies
//session_start();

//Creo la cookie 'nombre' con el contenido de "Ale"
//$_SESSION['usuario'] = "Ale";

$usuario = $_POST['usuario'];
$clave = md5($_POST['clave']);

include("conexion.php");


$select  = "SELECT id_usuario FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";

$select_ej = mysqli_query($conexion, $select);

if (!$select_ej) {
	echo "No funciono la query";
	echo "<br>";
	echo "$select";
} else {
	$cant = mysqli_num_rows($select_ej);
	if (!$cant) {
		echo "usuario no valido";
	} else {
		//logueo ok

		$reg = mysqli_fetch_array($select_ej);


		session_start();
		$_SESSION['id'] = $reg['id_usuario'];
		//echo $_SESSION['id'];
		header("location: interno.php");
	}
}
