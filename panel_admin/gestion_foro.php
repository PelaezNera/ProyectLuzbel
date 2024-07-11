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
    <!-- Tarjetas -->

    <section class="info" id="Info">
        <div class="articles">
            <article>
                <figure>
                    <img src="../img/6.jpg" alt="Lavender Fields">
                </figure>
                <div class="article-preview">
                    <h2>La Nada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p><br>
                    <p><a href="modificar.php?tarjeta=1">Modificar</a></p>                </div>
            </article>
            <article>
                <figure>
                    <img src="../img/5.jpg" alt="Snowy Mountains">
                </figure>
                <div class="article-preview">
                    <h2>El Divisor</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p><br>
                    <p><a href="modificar.php?tarjeta=2">Modificar</a></p>                </div>
            </article>
            <article>
                <figure>
                    <img src="../img/2.jpg" alt="Wooden Bridge">
                </figure>
                <div class="article-preview">
                    <h2>El Suplente</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p><br>
                    <p><a href="modificar.php?tarjeta=3">Modificar</a></p>                </div>
            </article>
            <article>
                <figure>
                    <img src="../img/3.jpg" alt="Autumn Forest">
                </figure>
                <div class="article-preview">
                    <h2>Common Protector</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor
                        accumsan.
                    </p><br>
                    <p><a href="modificar.php?tarjeta=4">Modificar</a></p>                </div>
            </article>
            <article>
                <figure>
                    <img src="../img/4.jpg" alt="Freezing Forest">
                </figure>
                <div class="article-preview">
                    <h2>Gate Protector</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor
                        accumsan.
                    </p><br>
                    <p><a href="modificar.php?tarjeta=5">Modificar</a></p>                </div>
            </article>
        </div>
    </section>

    <!-- Noticias -->

    <hr class="divisor">

    <section class="noticias" id="Noticias">
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="../img/4.jpg" alt="Fetch API GraphQL Preview">
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
                        <h2>Proyecto Luzbel</h2>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupti
                            quas voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum
                            facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est
                            obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!
                        </p><br>
                        <p><a href="modificar.php?tarjeta=6">Modificar</a></p>

                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="../img/6.jpg" alt="Fetch API GraphQL Preview">
                </div>
                <div class='content'>
                    <div class="card-header">
                        <div class="card-type">
                            Noticias
                        </div>
                        <div class="ToA">
                            Ultimo Articulo
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>Progreso...</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupti
                            quas voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum
                            facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est
                            obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!
                        </p><br>
                        <p><a href="modificar.php?tarjeta= <?php echo $row['id_noticia']; ?>">Modificar</a></p>
                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="../img/cielo1.jpeg" alt="Fetch API GraphQL Preview">
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
                        <h2>Progreso...</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupti
                            quas voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum
                            facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est
                            obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!
                        </p><br>
                        <p><a href="modificar.php?tarjeta= <?php echo $row['id_noticia']; ?>">Modificar</a></p>
                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="../img/idea-arma5.jpg" alt="Fetch API GraphQL Preview">
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
                        <h2>Progreso...</h2>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero corporis harum corrupti
                            quas voluptatem perferendis architecto sed itaque? Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Inventore quisquam repellat blanditiis veniam illo aliquam? Quaerat cum
                            facere exercitationem minus sint ea atque illum vero delectus ratione neque beatae est
                            obcaecati eaque ex repellat fugiat consequuntur, ipsam sit harum. Iusto!
                        </p><br>
                        <p><a href="modificar.php?tarjeta= <?php echo $row['id_noticia']; ?>">Modificar</a></p>
                    </div>
                </div>
            </article>
        </div>
    </section>
</body>
</html>