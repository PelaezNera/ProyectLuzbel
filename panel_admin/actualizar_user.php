<?php
include '../main-pages/conexion.php';

$codigo = $_POST['codigo'];

$consulta = ("UPDATE usuarios SET usuario = '$_POST[nombre]', email = '$_POST[email]', pass = '$_POST[pass]', tipo = '$_POST[tipo]' WHERE id_usuarios = '$codigo'");

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo "<script>alert('Se actualizaron correctamente los datos'); window.location='./mostrar_users.php'</script>";
} else {
    echo "<script>alert('Problemas para actualizar los datos'); window.location='./mostrar_users.php'</script>";
}