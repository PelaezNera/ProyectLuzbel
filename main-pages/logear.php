<?php
include "conexion.php";

$email = $_REQUEST["email"];
$user = $_REQUEST["user"];
$pass = $_REQUEST["pass"];
$verify_pass = $_REQUEST["verify_pass"];
$tipo = "user";

if (isset($_SESSION)) {
    session_unset();
    session_destroy();
    session_start();
}
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['usuario'] = $user;
$_SESSION['tipo'] = $tipo;

$insertar = "INSERT INTO usuarios(email,usuario,pass,tipo) VALUES ('$email','$user','$pass','$tipo')";
$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user'");

if ($pass != $verify_pass) {
    echo "<script>alert('Las contraseñas son diferentes'); window.location.href = 'login.html'</script>";
}

if (mysqli_num_rows($verificar) > 0) {
    echo "<script>alert('Ese usuario ya se encuentra registrado'); window.location.href = 'login.html'</script>";
    exit();
}

$resultado = mysqli_query($conexion,$insertar);
if ($resultado) {
    echo "<script>alert('El usuario $user se a registrado con exito'); window.location.href = '../pagina.php'</script>";
} else {
    echo "<script>alert('Problema al insertar el usuario por favor intente otra vez'); window.location.href = 'login.html'</script>";
}