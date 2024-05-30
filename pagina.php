<?php
include 'main-pages/conexion.php';

session_start();
$var_session = $_SESSION['usuario'];
if ($var_session == null || $var_session == " ") {
    echo "<script>window.alert('No tienes autorizacion para ingresar'); window.location.href = './main-pages/login.html'</script>";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luzbel</title>
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="frontend/style.css">
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

  <main class="main-inicio" id="Inicio">
    <section id="inicio">
      <h1>Unheaven</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores dignissimos quis aperiam eaque quod cumque
        officia sunt magni sapiente impedit porro, iste consectetur quasi velit nostrum molestiae repellat deleniti ut.
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

    <section class="noticias">
        <div class="container">
            <article class="card">
                <div class='background'>
                    <img src="img/4.jpg" alt="Fetch API GraphQL Preview">
                </div>
                <div class='content'>
                    <div class="card-header">
                        <div class="card-type">
                            Web Dev
                        </div>
                        <div class="latest-article">
                            Latest Article
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>Using Fetch API For Executing GraphQL Queries And Mutations</h2>
                        <p>
                            GraphQL is a powerful tool for querying data from remote servers and my preferred way of
                            building APIs (Application
                            Programming Interface). For some people, it might be difficult to learn as the tutorials are
                            usually written using tools
                            such as Apollo or Relay. These tools are great but often suited for more complicated projects.
                            In certain scenarios,
                            there might be better to choose a more lightweight approach and not increase bundle size with
                            additional libraries. In
                            these cases, you can work directly with the tools available in the browser. In this quick
                            tutorial, we will use fetch,
                            commonly available in your browser. Let’s first quickly revise what fetch is and how it is
                            usually used with REST API,
                            then we can move to simple GraphQL queries execution.
                        </p>
                    </div>
                    <div class="blog-preview__bottom">
                        <div class="blog-author">
                            <img src="assets/profile_small.png" alt="Avatar">
                            <div class="blog-author__name">
                                <div class="blog-author__name">
                                    David Mráz
                                </div>
                                <a rel="author" href="mailto:david@atheros.ai" class="blog-author__alias">
                                    @davidmraz
                                </a>
                            </div>
                        </div>
                        <a class="go-to-article-button" href="/my-blog" title="New Blog">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M15 16l4 -4" />
                                <path d="M15 8l4 4" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>
</body>

</html>