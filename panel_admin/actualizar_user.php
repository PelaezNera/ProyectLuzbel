<?php
include '../main-pages/conexion.php';

$codigo = $_POST['codigo'];

$consulta = ("UPDATE usuarios SET usuario = '$_POST[nombre]', email = '$_POST[email]', pass = '$_POST[pass]', tipo = '$_POST[tipo]' WHERE id_usuarios = '$codigo'");

$resultado = mysqli_query($conexion,$consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
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
        window.location = "../panel_admin/mostrar_users.php";});
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
    window.location = "../panel_admin/mostrar_users.php";});
</script>';
}
?>
</body>
</html>