<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Divine Corruption</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@200&family=Cute+Font&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oxygen:wght@300&family=Quicksand:wght@300;400;500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" /> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
  <script src="https://kit.fontawesome.com/1cda85bad0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="frontend/style.css" />
</head>

<body class="modo-claro">
  <!-- HEADER -->
  <!-- prettier-ignore -->
  <header>
    <nav class="header-main">
      <ul>
        <li>
          <form action="#" method="get">
            <input type="image" src="img/logotest.png" alt="Nuestro Logo/Recargar pagina"
              title="Nuestro Logo/Recargar pagina" class="logo-imagen" />
          </form>
        </li>
        <li><a href="#descarga"><button>Descarga</button></a></li>
        <li><a href="#info"><button>Información del juego</button></a></li>
        <li class="desplegable-noticias">
          <a href="#noticias"><button>Noticias</button></a>
          <ul class="desplegable-menu">
            <li><a href="#noticia1"><button>Noticia 1</button></a></li>
            <li><a href="#noticia2"><button>Noticia 2</button></a></li>
            <li class="sub-desplegable-noticias">
              <a href="#noticia3"><button>Noticia 3</button></a>
              <ul class="sub-desplegable-menu">
                <li><a href="#articulo1"><button>Articulo 1</button></a></li>
                <li><a href="#articulo2"><button>Articulo 2</button></a></li>
                <li><a href="#articulo3"><button>Articulo 3</button></a></li>
              </ul>
            </li>
            <li><a href="#noticia4"><button>Noticia 4</button></a></li>
          </ul>
        </li>
        <li><a href="#records"><button>Records</button></a></li>
        <li><a href="login"><button>Iniciar Sesion</button></a></li>
        <li><a href="singup"><button>Registrarse</button></a></li>
        <li><a href="pNow"><button class="btn">Juega ya</button></a></li>
        <li>
          <button class="switch" id="switch">
            <span class="material-symbols-outlined pulso" id="tema_icono_2">wb_sunny</span>
            <span class="material-symbols-outlined pulso" id="tema_icono">dark_mode</span>
            <!-- <span class="material-symbols-outlined pulso" id="tema_icono_2">\2600</span> -->
            <!-- <span class="material-symbols-outlined pulso" id="tema_icono">&#xe51c</span> -->
            <input type="checkbox" name="temas" id="tema" checked="false" style="display:none;">
          </button>
          <!-- </form> -->
        </li>
      </ul>
    </nav>
  </header>

  <!-- MAIN TODO:
    FIXME:-->

  <main>
    <section id="descarga" class="descarga">

      <div class="slider">
        <figure>
          <img src="img/6.jpg" alt="Imagen del personaje">
          <img src="img/10.jpg" alt="Imagen de fondo de una iglesia 1">
          <img src="img/9.jpg" alt="Imagen de fondo de una iglesia 2">
          <img src="img/11.jpg" alt="Imagen del cielo">
        </figure>
      </div>

      <h1>
        <span class="fondo">
          D<span class="title-clr2">iv</span>i<span class="title-clr1">ne
            Corr</span>up<span class="title-clr2">tio</span>n
        </span>
      </h1>

      <h2><span class="fondo">Download</span></h2>

      <p>
        <span class="fondo">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
          perferendis a repellat exercitationem quam consectetur qui voluptates,
          culpa nihil at doloremque eius magnam nesciunt voluptatum ipsa
          consequuntur recusandae illum nostrum!
        </span>
      </p>

      <button class="descargador" title="Presiona aquí y el juego sera descargado">
        <strong>Descargar</strong>
      </button>

      <p>
        <span class="fondo">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quo
          laboriosam ex, earum XD
        </span>
      </p>
      <br>
    </section>
    <br>
    <div class="fondo">
      <hr class="hr-desc separador" />
      <section id="info" class="info">
        <div class="info-content">
          <h2>Info</h2><br>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ratione soluta saepe! Magni harum adipisci vero
            et iure vel sunt voluptatibus possimus non inventore recusandae perferendis temporibus, cum reprehenderit
            eum accusantium impedit eaque omnis obcaecati dolorum ullam quod quo odit. Officiis et corrupti totam
            recusandae veritatis harum, quos maiores voluptas sequi, reprehenderit fuga vitae eum unde tenetur voluptate
            ratione laboriosam adipisci cum nobis in expedita repellat autem dignissimos eligendi. Est quas sunt
            repudiandae. Fuga totam dolores numquam quis nemo, iure consequatur placeat dolorum pariatur, nobis,
            accusantium asperiores veritatis nam quos. Deserunt saepe facilis at corrupti modi praesentium. Optio,
            asperiores accusantium?
          </p>
        </div>
        <img src="img/test1.webp" alt="" />
        <div class="info-content">
          <h3>Lorem</h3>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi
            repellendus accusamus amet, omnis, explicabo sit nobis illum,
            consequuntur aliquid esse placeat nostrum suscipit aperiam magni eius
            fuga saepe error non!
          </p>
        </div>
      </section>
      <hr class="separador" />
      <section id="noticias" class="news">
        <h2>Noticias</h2>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem saepe
          aspernatur unde maiores, quo, suscipit vero, voluptate repellat nisi
          nihil hic vel cupiditate eveniet libero illum neque doloribus.
          Accusantium, commodi? Lorem ipsum, dolor sit amet consectetur
          adipisicing elit. Corporis magnam consequuntur officia dicta quod
          labore provident id, laudantium recusandae, dolorum, quibusdam numquam
          assumenda vero. Distinctio a eligendi possimus rem inventore. Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Quos voluptatibus,
          neque saepe dignissimos ducimus exercitationem magni nostrum ipsam
          consequatur velit ullam expedita. Exercitationem quae minima fugiat
          facilis error reiciendis ad.
        </p>

        <h3 id="noticia1">Lorem</h3>
        <img src="img/1.jpg" alt="" />

        <h3 id="noticia2">Lorem</h3>
        <img src="img/2.jpg" alt="" />

        <article>
          <h3 id="noticia3">Lorem</h3>
          <img src="img/3.jpg" alt="" />
          <h4 id="articulo1">Lorem 1:</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam
            nihil, sed ipsum minima praesentium illo aliquid explicabo iste
            eligendi ad id error similique. Repellendus rem impedit adipisci
            cupiditate, rerum unde.
          </p>
          <h4 id="articulo2">Lorem 2:</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
            laboriosam cumque dolorem veniam voluptas, ratione facere doloribus
            aut nam laborum eveniet sed placeat voluptates porro id commodi
            ullam? Reiciendis, quo.
          </p>
          <h4 id="articulo3">Lorem 3:</h4>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus
            adipisci distinctio ea laborum. Delectus culpa harum vitae cumque.
            Ex tenetur, dolore molestias sed dolor cumque quisquam ipsam
            obcaecati ipsum minus.
          </p>
        </article>

        <h3 id="noticia4">Lorem</h3>
        <img src="img/5.jpg" alt="" />

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta
          quibusdam eum et ipsa cupiditate velit praesentium dolores, alias at
          dicta reprehenderit, numquam rerum minus doloremque officia voluptatem
          architecto. Saepe, in. Lorem ipsum dolor sit amet consectetur
          adipisicing elit. Perferendis est ipsa, quibusdam possimus
        </p>
      </section>
      <hr class="separador" />
      <section id="records" class="record">
        <pre>0</pre>
    </div>
  </main>

  <!-- FOOTER -->

  <footer>
    <a id="redes_sociales">
      <h2 align="center">Redes sociales:</h2>
    </a>
    <nav class="submenu_redes">
      <ul class="logos_redes">
        <li>
          <a href="#" aria-label="Facebook" class="facebook">
            <b class="circulo"><i class="fab fa-facebook" aria-hidden="true"></i></b>
            <span class="logos_texto facebook">Facebook</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="WhatsApp" class="whatsapp">
            <b class="circulo"><i class="fab fa-whatsapp" aria-hidden="true"></i></b>
            <span class="logos_texto whatsapp">WhatsApp</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Instagram" class="instagram">
            <b class="circulo"><i class="fab fa-instagram" aria-hidden="true"></i></b>
            <span class="logos_texto instagram">Instagram</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Twitter" class="twitter">
            <b class="circulo">
              <div class="icono-XT">
                <b class="circulo"><i class="fab fa-twitter" aria-hidden="true"></i>
                  <i class="fab fa-brands fa-x-twitter" aria-hidden="true"></i></b>
              </div>
            </b>
            <span class="logos_texto XT twitter">X (Twitter)</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="YouTube" class="youtube">
            <b class="circulo"><i class="fab fa-youtube" aria-hidden="true"></i></b>
            <span class="logos_texto youtube">
              <div class="youtube tube">
                <span id="firts-tube">You</span><!-- contenteditable="true" -->
                <span id="second-tube">Tube</span>
              </div>
            </span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="TikTok" class="tiktok">
            <b class="circulo"><i class="fab fa-tiktok" aria-hidden="true"></i></b>
            <span class="logos_texto tiktok">TikTok</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="GitHub" class="github">
            <b class="circulo"><i class="fa-brands fa-github"></i></b>
            <span class="logos_texto">
              <div class="github hub">
                <span id="firts-hub">Git</span><!-- contenteditable="true" -->
                <span id="second-hub">Hub</span>
              </div>
            </span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Discord" class="discord">
            <b class="circulo"><i class="fab fa-brands fa-discord" aria-hidden="true"></i></b>
            <span class="logos_texto discord">Discord</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Reddit" class="reddit">
            <b class="circulo"><i class="fab fa-brands fa-reddit" aria-hidden="true"></i></b>
            <span class="logos_texto reddit">Reddit</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Pinterest" class="pinterest">
            <b class="circulo"><i class="fab fa-brands fa-pinterest" aria-hidden="true"></i></b>
            <span class="logos_texto pinterest">Pinterest</span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="LinkedIn" class="linkedin">
            <b class="circulo"><i class="fab fa-brands fa-linkedin" aria-hidden="true"></i></b>
            <span class="logos_texto linkedin">
              <div class="linkedin ink">
                <span id="firts-ink">Linke</span><!-- contenteditable="true" -->
                <span id="second-ink">In</span>
              </div>
            </span>
          </a>
        </li>
        <li>
          <a href="#" aria-label="Blogger" class="blogger">
            <b class="circulo"><i class="fab fa-brands fa-blogger-b" aria-hidden="true"></i></b>
            <span class="logos_texto blogger">Blogger</span>
          </a>
        </li>
      </ul>
    </nav>
    <h3 align="center" id="contactenos">Contáctenos:</h3>
    <address>
      <ul>
        <li>
          <h4>Teléfono: <a href="#tel">+123456789</a></h4>
        </li>
        <li>
          <h4>Email: <a href="#@">info@tudominio.com</a></h4>
        </li>
        <li>
          <h4>Dirección: <a href="#dic">Av. Principal #1234, Ciudad, País</a></h4>
        </li>
      </ul>
    </address>
    <a href="dashboard.html">
      <h6>Dahsboard</h6>
    </a>
  </footer>


  <!-- Javascript para que la barra de navegación no tape los id y el modo claro y oscuro (y más cosas en el futuro) -->

  <script src="frontend/frontscript.js"></script>
  <script src="backend/backscript.js"></script>
</body>

</html>