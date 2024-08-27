<?php 
include "../main-pages/conexion.php";

if (!empty($_POST)) {
    $codusua = $_POST['codi'];
    $consulta = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_usuarios = '$codusua'");

    if ($consulta) {
        echo "<script>window.alert('Usuario eliminado correctamente'); window.location.href = 'mostrar_users.php';</script>";
    }else {
        echo "<script>window.alert('Problemas al eliminar el usuario'); window.location.href = 'mostrar_users.php';</script>";
    }
}

$cod = $_GET['del'];

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuarios = '$cod'") or die ("Problemas en el select".mysqli_error($conexion));
while ($row = mysqli_fetch_array($resultado)) {
    $codigo = $row['id_usuarios'];
    $nombre = $row['usuario'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../frontend/style-eliminar.css">
</head>
<body>
    <form method="post" class="confir">
        <h1>¿Estás seguro que quieres eliminar el registro?</h1><br><br>
        <?php
        echo "<p>Cuyo codigo es: ". $codigo . " y su nombre es: " . $nombre . "</p>";
        ?><br><br>

        <input type="hidden" name="codi" value="<?php echo $cod; ?>">
        <input type="submit" value="Aceptar" class="btn1">
        <a href="mostrar_users.php"><input type="button" value="Cancelar" class="btn"></a>
    </form>
</body>
</html>