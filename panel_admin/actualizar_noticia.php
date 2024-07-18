<?php
include 'conexion.php';

$codigo = $_POST['codigo'];

$consulta = ("UPDATE aeropuertos SET nombre_aeropuerto = '$_POST[nombre]', ciudad = '$_POST[ciudad]', departamento = '$_POST[departamento]' WHERE id_aeropuerto = '$codigo'");

$resultado = mysqli_query($conexion,$consulta);

if ($resultado) {
    echo "<script>alert('Se actualizaron correctamente los datos'); window.location='./mostrar_aero.php'</script>";
} else {
    echo "<script>alert('Problemas para actualizar los datos'); window.location='./mostrar_aero.php'</script>";
}