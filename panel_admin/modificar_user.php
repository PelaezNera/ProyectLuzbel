<?php
session_start();

error_reporting(0);
$var_session = $_SESSION['email'];
if ($var_session == null || $var_session = "") {
    echo "<script>alert('No tiene permiso para ingresar a este sitio'); window.location='../main-pages/login.php'</script>";
    die();
}
include '../main-pages/conexion.php';
?>

<?php
$edit = $_GET['editar'];
$registros = mysqli_query($conexion,"SELECT * FROM usuarios where id_usuarios = '$edit'") or die("Error en la consulta".mysqli_error($conexion));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../frontend/style-mod.css">
    <link rel="stylesheet" href="../frontend/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
    
</head>
<body>
    <h2>Actualizar Tarjeta</h2>
    
    <form action="actualizar_user.php" method="post">
        <?php
    while($row = mysqli_fetch_array($registros)){
        echo "<label>Id_usuario</label><br>";
        echo "<input type='text' name='id_usuario' value='$row[id_usuarios]' disabled><br><br>";

        echo "<label>Usuario</label><br>";
        echo "<input type='text' name='nombre' value='$row[usuario]'><br><br>";

        echo "<label>email</label><br>";
        echo "<input type='text' name='email' value='$row[email]'><br><br>";

        echo "<label>password</label><br>";
        echo "<input type='text' name='pass' value='$row[pass]'><br><br>";

        echo "<label>tipo</label><br>";
        echo "<input type='text' name='tipo' value='$row[tipo]'><br><br>";
    }
    ?>

    <input type="hidden" name="codigo" value="<?php echo $edit?>">

    <input type="submit" name="" value="Actualizar">
    <a href="mostrar_users.php"><input type="button" value="Cancelar"></a>
        </form>
</body>

</body>
</html>