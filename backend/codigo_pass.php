<?php 
session_start();
$usuario = $_SESSION['usuario'];

include '../main-pages/conexion.php';

$pass = $_REQUEST['pass'];
$pass1 = $_REQUEST['pass1'];
$pass2 = $_REQUEST['pass2'];

$clave_capturada = "SELECT * FROM usuarios WHERE pass = '$pass'";

$respuesta = mysqli_query($conexion, $clave_capturada);

$fila = mysqli_fetch_row($respuesta);

$traer_clave =  $fila[3];

if ($pass1 != $pass2) {
	// echo "<script>alert('Las contrasenas no coinciden');window.location = '../main-pages/cambio_pass.php';</script>";
}elseif ($pass == $traer_clave) {
    $nueva_clave = mysqli_query($conexion, "UPDATE  usuarios SET pass = '$pass1' WHERE pass = '$pass'");
    // echo "<script>alert('La contrasena se cambio con exito');window.location = '../backend/cerrar_sesion.php';</script>";
} else{
    // echo "<script>alert('La contrasena actual no coincide ');window.location = '../main-pages/cambio_pass.php';</script>";
}