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
        echo "<script>alert('Se actualizaron correctamente los datos'); window.location='./gestion_foro.php'</script>";
    } else {
        echo "<script>alert('Problemas para actualizar los datos'); window.location='./gestion_foro.php'</script>";
    }
}

if ($imagen == "" || $titulo == "" || $informacion == "") {
    echo "<script>alert('Campos sin completar'); window.location='./gestion_foro.php'</script>";
} else{

    $consulta = ("UPDATE informacion SET titulo = '$_POST[titulo]', informacion = '$_POST[informacion]', imagen = '$_POST[imagen]' WHERE id_noticia = '$codigo'");
    
    $resultado = mysqli_query($conexion,$consulta);
    
    if ($resultado) {
        echo "<script>alert('Se actualizaron correctamente los datos'); window.location='./gestion_foro.php'</script>";
    } else {
        echo "<script>alert('Problemas para actualizar los datos'); window.location='./gestion_foro.php'</script>";
    }
} ?>