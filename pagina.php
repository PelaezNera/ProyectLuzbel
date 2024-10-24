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
    <title>UnHeaven</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="frontend/style.css">
    <script src="sweetalert2@11.js"></script>
</head>

<body>
    <?php
        include_once 'backend/validaciones.php';
    ?>
    <header>
        <nav class="nav-header">
            <img src="img/logo.png" alt="" class="logo">
            <h1>
                Hallucination Studios
            </h1>
            <a href="#Inicio" title="Inicio">Inicio</a>
            <a href="#Info" title="Information">Information</a>
            <a href="#Noticias" title="Noticias">Noticias</a>
            <a href="main-pages/cambio_pass.php" title="Usuario">Cambiar contraeña</a>
            <a href="backend/cerrar_sesion.php" title="Cerrar sesion">Cerrar sesion</a>
        </nav>
    </header>

    <main class="main-inicio" id="Inicio">
        <section id="inicio">
            <h1>UnHeaven</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dignissimos quis aperiam eaque quod
                cumque
                officia sunt magni sapiente impedit porro, iste consectetur quasi velit nostrum molestiae repellat
                deleniti ut.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur.</p><br>

            <a class="button" href="#" title="Descargar">
                <svg height="60" width="300" xmlns="">
                    <rect class="shape" height="60" width="300" />
                    <div class="text">¡Juega ahora!</div>
                </svg>
            </a>
        </section>
    </main>

    <hr class="divisor">

    <section class="info" id="Info">
        <h1>Información</h1>
        <div class="articles">
            <?php
            $registros = mysqli_query($conexion,"SELECT * FROM informacion") or die("Error en la consulta".mysqli_error($conexion));
            while ($row = mysqli_fetch_array($registros)) { ?>
            <article>
                <figure>
                    <img src="img/<?php echo $row['imagen']?>" alt="Lavender Fields">
                </figure>
                <div class="article-preview">
                    <h2>
                        <?php echo $row['titulo'] ?>
                    </h2>
                    <p>
                        <?php echo $row['informacion'] ?>

                    </p><br>
                </div>
            </article>
            <?php }
            ?>
        </div>
    </section>
    <hr class="divisor">
    <h1 class="hnoticias">Noticias</h1>
    <section class="noticias" id="Noticias">
        <?php
            $registros = mysqli_query($conexion,"SELECT * FROM noticias") or die("Error en la consulta".mysqli_error($conexion));
            while ($row = mysqli_fetch_array($registros)) { ?>
            
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="img/<?php echo $row['imagen']?>" alt="Fetch API GraphQL Preview">
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

                    </div>
                </div>
            </article>
        </div>
        <?php }
    ?>
    </section>
        <hr class="divisor dvf">
        <footer>
            <div class="footer-wrapper">
                <div class="footer-columns">
                    <div class="footer-logo-column">
                        <a href="/" aria-label="Go to Supabase homepage" title="Go to Supabase Homepage">
                            <img src="img/logo.png" loading="lazy" alt="Supabase logo" class="footer-logo"
                                width="200">
                        </a>
                        <div class="social-wrapper">
                            <div class='social-links'>
                                <ul>
                                    <li>
                                        <a href="#" title="Twitter">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-x" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                                                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="GitHub">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-github" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Discord">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-discord" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M8 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                <path d="M14 12a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                                <path
                                                    d="M15.5 17c0 1 1.5 3 2 3c1.5 0 2.833 -1.667 3.5 -3c.667 -1.667 .5 -5.833 -1.5 -11.5c-1.457 -1.015 -3 -1.34 -4.5 -1.5l-.972 1.923a11.913 11.913 0 0 0 -4.053 0l-.975 -1.923c-1.5 .16 -3.043 .485 -4.5 1.5c-2 5.667 -2.167 9.833 -1.5 11.5c.667 1.333 2 3 3.5 3c.5 0 2 -2 2 -3" />
                                                <path d="M7 16.5c3.5 1 6.5 1 10 0" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Youtube">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-youtube" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
                                                <path d="M10 9l5 3l-5 3z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <!-- <div> -->
                            <section>
                                <h3>Developers</h3>
                                <ul>
                                    <li>
                                        <strong><p>This game was developed by:</p></strong>
                                    </li>
                                    <li>
                                        <p>Santiago Peláez Correa</p>
                                    </li>
                                    <li>
                                        <p>Jose Manuel Muñoz Fernandez</p>
                                    </li>
                                    <li>
                                        <p>Juan Manuel Gutierrez Velasquez</p>
                                    </li>
                                    <li>
                                        <p>Juan Manuel Manrique Tabares</p>
                                    </li>
                                    <li>
                                        <p>Miguel Angel Herrera Giraldo</p>
                                    </li>
                                    <li>
                                        <p>Miguel Angel Herrera Garces</p>
                                    </li>
                                </ul>
                            </section>
                            <section>
                                <h3>Rights</h3>
                                <ul>
                                    <li>
                                        <strong><p>All rights reserverd</p></strong>
                                    </li>
                                    <li>
                                        <p>If you use our game as a product, sell it or make illegal profit of it</p>
                                    </li>
                                    <li>
                                        <p>If you pirate, clone or traffict through the internet illicitly</p>
                                    </li>
                                    <li>
                                        <p>You can mention our game, make videos about it and upload gameplays unless it's for illicit things</p>
                                    </li>
                                    <li>
                                        <p>If you don't respect this Terms Of Condition you'll be sue or you'll be asked to delet the content</p>
                                    </li>
                                </ul>
                            </section>
                            <section>
                                <h3>Company</h3>
                                <ul>
                                    <li>
                                        <p>This is a fictional company <br> made for SENA project.</p>
                                    </li>
                                </ul>
                            </section>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- bottom part section -->
            <div class="footer-bottom">
                <div class="footer-bottom-wrapper">
                    <small>© <span id="year"></span> UnHeaven</small>
                </div>
            </div>
        </footer>


</body>

</html>