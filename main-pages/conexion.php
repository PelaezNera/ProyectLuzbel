<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "juego";

$conexion=mysqli_connect($servidor,$usuario,$password,$bd) or die("Problema en la conección: ".$conexion->connect_error."<br>".mysqli_connect_error());

if($conexion->connect_error || !$conexion){
	die("Error de conexion, no estamo activo: ".$conexion->connect_error."<br>".mysqli_connect_error());
	}else{
	mysqli_set_charset($conexion,"utf8");
}
?>