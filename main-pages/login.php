<?php
include 'conexion.php';

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];

$admin = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$user' AND pass = '$pass' AND tipo = 'admin'");
$user = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$user' AND pass = '$pass' AND tipo = 'user'");

if (mysqli_num_rows($admin) > 0) {
    $fila = mysqli_fetch_row($admin);
    $id = $fila[0];
    $email = $fila[1];
    $usuario = $fila[2];
    $pass = $fila[3];
    $tipo = $fila[4];

    session_start();
    $_SESSION['id_usuario'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['pass'] = $pass;
    $_SESSION['tipo'] = $tipo;

    header("Location: ../panel_admin.php");
} elseif (mysqli_num_rows($user) > 0) {
    $fila = mysqli_fetch_row($user);
    $email = $fila[1];
    $usuario = $fila[2];

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['usuario'] = $usuario;

    header("Location: ../pagina.php");
} else {
    echo "<script>window.alert('Error de autentificación'); window.history.go(-1);</script>";
}

