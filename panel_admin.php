<?php
include 'main-pages/conexion.php';

session_start();
$var_session = $_SESSION['usuario'];
if ($var_session == null || $var_session == " ") {
    echo "<script>window.alert('No tienes autorizacion para ingresar'); window.location.href = './main-pages/login.html'</script>";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Admin</h1>
</body>
</html>