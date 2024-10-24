<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <script src="../sweetalert2@11.js"></script>
</head>
<body>

<?php
include '../main-pages/conexion.php';

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$informacion = $_POST['informacion'];
$imagen = $_POST['imagen'];

if ($imagen == "") {
    $consulta = ("UPDATE informacion SET titulo = '$_POST[titulo]', informacion = '$_POST[informacion]' WHERE id_noticia = '$codigo'");
    
    $resultado = mysqli_query($conexion,$consulta);
    
    if ($resultado) {
        echo '<script>
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Actualizado",
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
        window.location = "../panel_admin/gestion_foro.php";});
        </script>';
    } else {
        echo '<script>
        Swal.fire({
        position: "center",
        icon: "error",
        title: "Eliminar",
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
        window.location = "../panel_admin/gestion_foro.php";});
        </script>';
    }
}

if ($imagen == "" || $titulo == "" || $informacion == "") {
    echo '<script>
    Swal.fire({
    position: "center",
    icon: "error",
    title: "Your work has been saved",
    showConfirmButton: false,
    timer: 1500
    }).then(function() {
    window.location = "../panel_admin/gestion_foro.php";});
    </script>';
} else{

    $consulta = ("UPDATE informacion SET titulo = '$_POST[titulo]', informacion = '$_POST[informacion]', imagen = '$_POST[imagen]' WHERE id_noticia = '$codigo'");
    
    $resultado = mysqli_query($conexion,$consulta);
    
    if ($resultado) {
        echo '<script>
        Swal.fire({
        position: "center",
        icon: "success",
        title: "Actualizado",
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
        window.location = "../panel_admin/gestion_foro.php";});
        </script>';
    } else {
        echo '<script>
        Swal.fire({
            position: "center",
        icon: "error",
            title: "Mal",
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
        window.location = "../panel_admin/gestion_foro.php";});
        </script>';
    }
} ?>
    
</body>
</html>

