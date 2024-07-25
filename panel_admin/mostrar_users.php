    <?php
include '../main-pages/conexion.php';

session_start();
error_reporting(0);
$var_session = $_SESSION['usuario'];
$var_rank = $_SESSION['tipo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de noticias</title>
    <link rel="stylesheet" href="../normalize.css">
    <link rel="stylesheet" href="../frontend/style-muser.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
</head>
<body>
    <h1 class="informacion">
        Modificar Usuarios
    </h1>

    <table>
        <tr>
            <th>id_usuario</th>
            <th>Nombre de usuario</th>
            <th>correo de usuarios</th>
            <th>tipo de usuario</th>
            <th colspan="2">botones de accion</th>
        </tr>

        <tbody>
            <?php
            $registros = mysqli_query($conexion,"SELECT * FROM usuarios") or die("Error en la consulta".mysqli_error($conexion));
            while ($row = mysqli_fetch_array($registros)) { ?>
                <tr>
                    <td> <?php echo $row['id_usuarios']; ?> </td>
                    <td> <?php echo $row['usuario']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['tipo']; ?> </td>

                    <td class="btn"><a href="modificar_user.php?editar= <?php echo $row['id_usuarios']; ?>">Actualizar</a></td>
                    <td class="btn1"><a href="eliminar_users.php?del= <?php echo $row['id_usuarios']; ?>">Eliminar</a></td>

                </tr>
            <?php } 
            ?>
        </tbody>
    </table>

</body>
</html>