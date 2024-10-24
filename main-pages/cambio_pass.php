<?php
session_start();

error_reporting(0);
$var_session = $_SESSION['usuario'];
if ($var_session == null || $var_session = "") {
    echo "<script>alert('No tiene permiso para ingresar a este sitio'); window.location='../main-pages/login.html'</script>";
    die();
}
include 'conexion.php';
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

        <style>
            .error{
                display: none;
            }
        </style>
    
</head>
<body>
    <h2>Actualizar Tarjeta</h2>
    
    
    <form action="../backend/codigo_pass.php" method="post" onsubmit="return validar_pass()">
            <h1>Cambiar contraseña</h1><br>
            <p class="error" id="error_datos">Faltan datos</p><br><br>
            <label>Confirmar contraseña antigua</label>
            <input type="password" name="pass" placeholder="Ingrese su antigua contraseña" id="pass"><br>
            <p class="error" id="oldPass_error">Pocos caracteres</p><br><br>
            <input type="checkbox" name="" onclick="mostrar_password()">Mostrar contraseña<br><br>
            <label>Contraseña nueva</label><br>
            <input type="password" name="pass1" id="new_pass" placeholder="Ingrese su contraseña"><br>
            <p class="error" id="newPass_error">Pocos caracteres</p><br><br>
            <label>Confirmar contraseña nueva</label>
            <input type="password" name="pass2" id="verify_pass" placeholder="Ingrese su contraseña"><br>
            <p class="error" id="verifyPass_error">Pocos caracteres</p><br><br>
            <input type="submit" value="Cambiar" class="actu"><br><br>

            <a href="../pagina.php">
                <input type="button" value="Cancelar" class="cance"><br>
            </a>
        </form>
        <script defer src="../backend/validar_cambio_pass.js"></script>
        <script>
            function mostrar_password(){
                var password_input = document.getElementById("pass");
                if (password_input.type === "password") {
                    password_input.type = "text";
                } else {
                    password_input.type = "password";
                }
            }
        </script>

</body>
</html>