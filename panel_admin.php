<?php
include 'main-pages/conexion.php';

session_start();
error_reporting(0);
$var_session = $_SESSION['usuario'];
$var_rank = $_SESSION['tipo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="frontend/style2.css">
</head>

<body>

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
              <h2>Arcangel San Miguel</h2>
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
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luzbel Admin</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="frontend/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"
        integrity="sha256-4lhPGIWv8kmCP7JRGJE4IdRod2IdQEZPui6f0uICZ6w=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($var_session) && $var_session != NULL && $var_session != "" && $var_session != " " && $var_rank != "user" && $var_rank == "admin") {
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "Bienvenido",
            text: "Sesión iniciada con éxito 👌, Admin '.$_SESSION['usuario'].' ",
            showConfirmButton: false,
            timer: 2000
        });
    </script>';
}elseif ($var_session == NULL || $var_session = "" || $var_session == " ") {
    echo '<script>
    Swal.fire({
        icon: "error",
        title: "ERROR",
        text: "NO HAS INICIADO SESIÓN",
        showConfirmButton: false,
        timer: 2000
    }).then(function() {
        window.location = "./backend/cerrar_sesion.php";
    });
</script>';
    print 'ERROR ❌❗ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}elseif (($var_rank == "user" || $var_rank == NULL || $var_rank = "" || $var_rank == " ") && $var_rank != "admin") {
    echo '<script>
    Swal.fire({
        icon: "warning",
        title: "NO ERES ADMIN",
        text: "NO TIENES PERMISO DE ESTAR AQUI!",
        showDenyButton: true,
        confirmButtonText: "Llévame a la pagina de usuario",
        denyButtonText: `Cierra sesión y llévame al login`
      }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Ok",
                icon: "success",
                timer: 1000,
                showConfirmButton: false
            }).then(function() {
            window.location = "pagina.php";
            });
        } else if (result.isDenied) {
            Swal.fire({
                title: "Ok",
                icon: "success",
                timer: 1000,
                showConfirmButton: false
            }).then(function() {
            window.location = "./backend/cerrar_sesion.php";
            });
        }
      });
</script>';
    print 'TIENES QUE SER ADMIN ⚠️❗ <br> No tienes autorización para ingresar a este sitio <br>';
    die('<br><a href="pagina.php"><input type="reset" value="Vuelva a la pagina"></a>
    <br><a href="./backend/cerrar_sesion.php"><input type="reset" value="Vuelva al login"></a>');
}else{
    echo '<script>
        Swal.fire({
            icon: "question",
            title: "UN RARO ERROR HA OCURRIDO",
            text: "POSIBLEMENTE NO HAS INICIADO SESIÓN",
            showConfirmButton: false,
            timer: 2000
        }).then(function() {
            window.location = "./backend/cerrar_sesion.php";
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
>>>>>>> 3166944bdfbe2b1ac43bb53332e076cf0e7ba72b
    </section>
</body>

</html>