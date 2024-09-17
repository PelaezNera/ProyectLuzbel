<?php
session_start();

error_reporting(0);
$var_session = $_SESSION['email'];
if ($var_session == null || $var_session = "") {
    echo "<script>alert('No tiene permiso para ingresar a este sitio'); window.location='../main-pages/login.html'</script>";
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
    <link rel="stylesheet" href="../frontend/style-contrac.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">

        <style>
            .error{
                display: none;
            }
        </style>
</head>
    <h2>Actualizar Tarjeta</h2>
    
    
    <form action="actualizar_user.php" method="post" onsubmit="return validar()">
        <?php
    while($row = mysqli_fetch_array($registros)){
        echo "<p class='error' id='error_datos'>Faltan datos</p>";
        echo "<label>Id_usuario</label>";
        echo "<input type='text' name='id_usuario' id='usuario' value='$row[id_usuarios]' disabled><br>";

        echo "<label>Usuario</label>";
        echo "<input type='text' name='nombre' id='user' value='$row[usuario]'>";
        echo "<p id='error_name' class='error'>Usuario no permitido</p><br>";


        echo "<label>email</label>";
        echo "<input type='text' name='email' id='email' value='$row[email]'>";
        echo "<p id='error_email' class='error'>Correo no aceptable</p><br>";


        echo "<label>password</label>";
        echo "<input type='text' name='pass' id='pass' value='$row[pass]'>";
        echo "<p id='error_pass' class='error'>Contraseña no aceptada</p><br>";


        echo "<label>tipo</label>";
        echo "<select name='tipo' id='tipo'>";
        echo "<option value='#' disabled>Seleccionar user</option>";
        echo "<option value='admin'>Administrador</option>";
        echo "<option value='user'>Usuario</option>";
        echo "</select><br><br><br>";
        echo "<p id='error_tipo' class='error'>Falta el tipo</p><br>";

    }
    ?>

    <input type="hidden" name="codigo" value="<?php echo $edit?>">

    <input type="submit" name="" value="Actualizar" class="actu"><br><br>
    <a href="mostrar_users.php"><input type="button" value="Cancelar" class="cance"></a>
    </form>
<script defer src="../backend/validar_mod_user.js"></script>
</body>
</html>