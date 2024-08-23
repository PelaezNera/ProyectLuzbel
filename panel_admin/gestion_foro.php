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
    <link rel="stylesheet" href="../frontend/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
</head>
<body>
    <h1 class="informacion">
        Modificar las noticias y las Tarjetas
    </h1>

    <!-- Tarjetas -->

    <section class="info" id="Info">
        <div class="articles">
        <?php
            $registros = mysqli_query($conexion,"SELECT * FROM informacion") or die("Error en la consulta".mysqli_error($conexion));
            while ($row = mysqli_fetch_array($registros)) { ?>
            <article>
                <figure>
                    <img src="../img/<?php echo $row['imagen']?>" alt="Lavender Fields">
                </figure>
                <div class="article-preview">
                    <h2>
                        <?php echo $row['titulo'] ?>
                    </h2>
                    <p>
                        <?php echo $row['informacion'] ?>

                    </p><br>
                    <p><a href="modificar.php?tarjeta=<?php echo $row['id_noticia']?>">Modificar</a></p>
                </div>
            </article>
            <?php } 
            ?>
        </div>
    </section>

    <!-- Noticias -->

    <hr class="divisor">

    <section class="noticias" id="Noticias">
    <?php
            $registros = mysqli_query($conexion,"SELECT * FROM noticias") or die("Error en la consulta".mysqli_error($conexion));
            while ($row = mysqli_fetch_array($registros)) { ?>
                <div class="container">
                    <article class="card">
                        <div class='background'>
                            <img src="../img/<?php echo $row['imagen']?>" alt="Fetch API GraphQL Preview">
                        </div>
                        <div class='content'>
                            <div class="card-header">
                                <div class="card-type">
                                    Noticias
                                </div>
                                <div class="ToA">
                                    Importante
                                </div>
                            </div>
                            <div class="card-content">
                                <h2><?php echo $row['titulo'] ?></h2>
                                <p>
                                    <?php echo $row['informacion'] ?>
                                </p><br>
                                <p class="noticias_modi"><a href="modificar_noticias.php?noticia=<?php echo $row['id_noticia']?>">Modificar</a></p>
                
                            </div>
                        </div>
                    </article>
                </div>
    <?php } 
    ?>
    </section>
</body>
</html>