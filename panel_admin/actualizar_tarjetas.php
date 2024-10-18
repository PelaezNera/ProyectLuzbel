<?php
include '../main-pages/conexion.php';

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$informacion = $_POST['informacion'];
$imagen = $_POST['imagen'];

if ($imagen == "") {
    $consulta = ("UPDATE informacion SET titulo = '$_POST[titulo]', informacion = '$_POST[informacion]' WHERE id_noticia = '$codigo'");
    
    $resultado = mysqli_query($conexion,$consulta);
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
<?php
}

if ($titulo == "" || $informacion == "") {
    echo '<script> echo
        Swal.fire({
        icon: "success",
        title: "Actualizado",
        text: "Se ha actualizado correctamente",
        showConfirmButton: false,
        timer: 2000
        }).then(function() {
        window.location = "../main-pages/login.html";});
        </script>';
} else{

    $consulta = ("UPDATE informacion SET titulo = '$_POST[titulo]', informacion = '$_POST[informacion]', imagen = '$_POST[imagen]' WHERE id_noticia = '$codigo'");
    
    $resultado = mysqli_query($conexion,$consulta);
    ?>
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
<?php } ?>



