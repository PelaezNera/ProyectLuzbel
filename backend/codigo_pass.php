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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña</title>
    <script src="../sweetalert2@11.js"></script>
</head>
<body>
<?php    

if ($pass1 != $pass2) {
    echo '<script>
        Swal.fire({
        icon: "success",
        title: "No coincide",
        text: "Las contraseñas no coinciden",
        showConfirmButton: false,
        timer: 2000
        }).then(function() {
        window.location = "../main-pages/login.html";});
        </script>';
} elseif ($pass == $traer_clave) {
    $nueva_clave = mysqli_query($conexion, "UPDATE  usuarios SET pass = '$pass1' WHERE pass = '$pass'");
    echo '<script>
    Swal.fire({
    icon: "success",
    title: "Contraseña cambiada",
    text: "La contraseña ha sido cambiada con exito",
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


