<?php
// registro_pr.php

$usuario = $_POST['usuario'];
$clave = md5($_POST['clave']);
$email = $_POST['nombre'];
$nombre = $_POST['email'];

include("conexion.php");


$insertar = "INSERT INTO usuarios VALUES(NULL,'$usuario','$clave', '$email' ,'$nombre')";

$insertar_ej = mysqli_query($conexion, $insertar);

if (!$insertar_ej) {
	echo "Error al ejecutar la query";
} else {
	//echo "Funciono bien";
	//redirect
	header("location: index.php");
}
