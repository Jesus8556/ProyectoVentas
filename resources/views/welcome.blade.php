<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Carousel Template · Bootstrap v5.2</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])





  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }

    /* rtl:end:ignore */


    /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    /* rtl:begin:remove */
    .featurette-heading {
      letter-spacing: -.05rem;
    }

    /* rtl:end:remove */

    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema de Ventas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registrate</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" tabindex="2" style="background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(https://compy.pe/assets/images/nosotros.png); background-position: center; background-size: cover;">

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Compra!!</h1>
              <p>Tu nuevo celular y pagalo en 8 cuotas.</p>
              <p><a class="btn btn-lg btn-success" href="#">Enterate como</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" tabindex="2" style="background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(https://s1.eestatic.com/2020/02/05/actualidad/actualidad_465215402_144406101_864x486.jpg); background-position: center; background-size: cover;">

          <div class="container">
            <div class="carousel-caption">
              <h1>Pagando</h1>
              <p>Tu deposito o transferencia obten tu descuento.</p>
              <p><a class="btn btn-lg btn-success" href="#">mas</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item" tabindex="2" style="background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%), url(https://imagekit.androidphoria.com/wp-content/uploads/Fondos-de-pantalla-animados-para-Android.jpg); background-position: center; background-size: cover;">

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Los mejores !!</h1>
              <p>Accesorios de tecnologia, solo para ti.</p>
              <p><a class="btn btn-lg btn-success" href="#">ver mas</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Confiabilidad <span class="text-muted">Seguridad de tus datos personales</span></h2>
          <p class="lead">Actualizaciones de seguridad las 24 horas del dia</p>
        </div>
        <div class="col-md-5 order-md-1">

        <img src="https://www.nutanix.com/content/dam/nutanix-cxo/thumbnails/database_thumb.jpg" class="img-fluid" alt="Responsive image">
          
        </div>
      </div>

      <!-- /.row -->


      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Administra con nosotros <span class="text-muted">Facilidad en autenticacion de registros</span></h2>
          <p class="lead">Facilidades en la organizacion de datos en empresas. </p>
        </div>
        <div class="col-md-5">
          <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">Hola</text></svg> -->
          <img src="https://seaasesores.com/wp-content/uploads/2020/03/Imagen-blog.jpg" class="img-fluid" alt="Responsive image">
          <!--<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="https://images.contentstack.io/v3/assets/bltf4ed0b9a176c126e/blt82e5424125120264/631634538c6aa1311ba17c30/FF-Apple.pngss" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text> -->
        </div>
      </div>

      <hr class="featurette-divider">



      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">Seguridad en todo momento <span class="text-muted">Informacion de registros guardada las 24 horas del dia</span></h2>
          <p class="lead">Actualizaciones de seguridad las 24 horas del dia</p>
        </div>
        <div class="col-md-5 order-md-1">

        <img src="https://moviling.net/wp-content/uploads/2020/05/mejores-apps-seguridad-celular.png" class="img-fluid" alt="Responsive image">
          
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FETURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>&copy; 2022 Company, Inc. &middot; &middot; <a href="#">Terms</a></p>
    </footer>
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>