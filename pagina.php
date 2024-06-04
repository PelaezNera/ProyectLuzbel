<?php
include 'main-pages/conexion.php';

session_start();
error_reporting(0);
$var_session = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luzbel</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="frontend/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($var_session) && $var_session != NULL && $var_session != "" && $var_session != " ") {
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "Bienvenido",
            text: "Sesión iniciada con éxito 👌, Usuario/a '.$_SESSION['usuario'].' ",
            showConfirmButton: false,
            timer: 1500
        });
    </script>';
}elseif ($var_session == NULL || $var_session = "" || $var_session == " ") {
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "ERROR",
        text: "NO HAS INICIADO SESIÓN",
        showConfirmButton: false,
        timer: 1500
    }).then(function() {
        window.location = "./backend/cerrar_sesion.php";
    });
</script>';
    print 'ERROR ❌❗ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}else{
    echo '<script>
        Swal.fire({
            icon: "error",
            title: "UN RARO ERROR HA OCURRIDO",
            text: "NO HAS INICIADO SESIÓN",
            showConfirmButton: false,
            timer: 1500
        });
    </script>';
    print 'ERROR 401 🩻🏴‍☠️ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}
?>

    <header>
        <nav class="nav-header">
            <img src="img/logotest.png" alt="">
            <h1>
                Hallucination Studios
            </h1>
            <a href="#Inicio">Inicio</a>
            <a href="#Info">Information</a>
            <a href="#Noticias">Noticias</a>
            <a href="#User">Usuario</a>
            <a href="backend/cerrar_sesion.php">Cerrar sesion</a>
        </nav>
    </header>

    <main class="main-inicio" id="Inicio">
        <section id="inicio">
            <h1>Unheaven</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dignissimos quis aperiam eaque quod
                cumque
                officia sunt magni sapiente impedit porro, iste consectetur quasi velit nostrum molestiae repellat
                deleniti ut.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur.</p><br>

            <a class="button" href="#" title="Descargar">
                <svg height="60" width="300" xmlns="http://www.w3.org/2000/svg">
                    <rect class="shape" height="60" width="300" />
                    <div class="text">Descargar</div>
                </svg>
            </a>
        </section>
    </main>

    <hr class="divisor">

    <section class="info" id="Info">
        <div class="articles">
            <article>
                <figure>
                    <img src="img/6.jpg" alt="Lavender Fields">
                </figure>
                <div class="article-preview">
                    <h2>La Nada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/5.jpg" alt="Snowy Mountains">
                </figure>
                <div class="article-preview">
                    <h2>El Divisor</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/2.jpg" alt="Wooden Bridge">
                </figure>
                <div class="article-preview">
                    <h2>El Suplente</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Praesent in mauris eu tortor porttitor accumsan.
                    </p>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/3.jpg" alt="Autumn Forest">
                </figure>
                <div class="article-preview">
                    <h2>Common Protector</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor
                        accumsan.
                    </p>
                </div>
            </article>
            <article>
                <figure>
                    <img src="img/4.jpg" alt="Freezing Forest">
                </figure>
                <div class="article-preview">
                    <h2>Gate Protector</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor
                        accumsan.
                    </p>
                </div>
            </article>
        </div>
    </section>
    <hr class="divisor">

    <section class="noticias" id="Noticias">
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="img/4.jpg" alt="Fetch API GraphQL Preview">
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
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="img/6.jpg" alt="Fetch API GraphQL Preview">
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
                        <h2>Progreso en la creación de personajes</h2>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus tenetur nesciunt molestias
                            voluptas? Magni provident dicta fuga inventore. Praesentium delectus sint debitis, odit,
                            quos dignissimos, deserunt voluptas enim corporis reiciendis eum. Illum sit dolore libero
                            reprehenderit mollitia. Natus temporibus maiores delectus quae eveniet voluptatibus id
                            voluptatum, iure dicta tempore nemo? Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Earum suscipit nobis adipisci voluptates! Repellendus voluptatem eum quo alias non
                            quaerat.
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>
</body>

</html>