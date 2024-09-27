<?php
require_once 'main-pages/conexion.php';

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
    <title>Admin</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="frontend/style2.css">
    <script src="sweetalert2@11.js"></script>
</head>

<body class="admin">
    <?php
        include_once "panel_admin/validacion_admin.php";
    ?>

    <header>
        <nav class="nav-header">
            <img src="img/logo.png" alt="" class="logo">
            <h1>
                Hallucination Studios / Admin Panel
            </h1>
            <a href="main-pages/cambio_pass_admin.php">Cambio contraseña</a>
            <a href="backend/cerrar_sesion.php">Cerrar sesion</a>
        </nav>
    </header>

    <hr class="divisor">
    <section class="info" id="Info">
        <div class="articles">
            <article>
                <a style="text-decoration: none;" href="panel_admin/mostrar_users.php">
                    <figure>
                        <img src="img/usu1.png" alt="Lavender Fields">
                    </figure>
                    <div class="article-preview">
                        <h2>Usuarios</h2>
                        <p>
                            Añade, elimina y modifica los usuarios
                            <br><br><br><br>
                        </p>
                    </div>
                </a>
            </article>
            <article>
                <a style="text-decoration: none;" href="panel_admin/gestion_foro.php">
                    <figure>
                        <img src="img/foro.png" alt="Freezing Forest">
                    </figure>
                    <div class="article-preview">
                        <h2> GESTION FORO </h2>
                        <p>
                            Modificar y anunciar noticias en el foro
                            <br><br><br>
                        </p>
                    </div>
                </a>
            </article>
        </div>
    </section>

</body>

</html>