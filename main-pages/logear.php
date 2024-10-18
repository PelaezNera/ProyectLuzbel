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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <script src="../sweetalert2@11.js"></script>
</head>
<body>
<?php    

if ($resultado) {
    echo '<script>
        Swal.fire({
        icon: "success",
        title: "Actualizado",
        text: "Se ha actualizado correctamente",
        showConfirmButton: false,
        timer: 2000
        }).then(function() {
        window.location = "../main-pages/login.html";});
        </script>';
} else {
    echo '<script>
    Swal.fire({
    icon: "error",
    title: "ERROR",
    text: "Ha ocurrido un error",
    showConfirmButton: false,
    timer: 2000
    }).then(function() {
    window.location = "../main-pages/login.html";});
</script>';
}
?>
</body>
</html>


