@extends('adminlte::page')

@section('title', 'Dashboard')
@section( 'plugins.Sweetalert2',true)
@section('content_header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Album example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .card-text{
        color: black;
        
      }
      section{
        color: blanchedalmond;
        font-size: 20px;
      }
      main {
        background-image: url('https://i.gifer.com/YChF.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:cover;
        background-position: center;
        

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
      h1{
        display: block;
        font-family: monospace;
        white-space: nowrap;
        border-right:4px solid;
        width : 37ch;
        animation: typing 4s steps(12) ,blink .5s infinite step-end alternate;
        overflow: hidden;

      }
      @keyframes typing{
        from {width:0}
      }
      @keyframes blink{
        50% { border-color: transparent}
      }

    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">BIENVENIDO ADMINISTRADOR | CentralCEL</h1>
        <p class="lead text-muted">Las marcas de celulares que se unieron a nosotros las encontraras abajo</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/logo-square-letter.png" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Samsung ha sido reconocido como un líder a nivel mundial en la industria de la tecnología y ahora es una de las diez principales marcas del mundo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                  <button type="button" class="btn btn-info"><a href="https://www.samsung.com/pe/smartphones/?product1=sm-a325mzkmltp&product2=sm-g991bzvlltp&product3=">Ver Mas</a></button>
                </div>
                <small class="text-muted">Samsung</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://yt3.ggpht.com/ytc/AMLnZu9gp0pi3jGok0c4a5p2EsPz6mHwfHZSzL-Qmd-JuQ=s900-c-k-c0x00ffffff-no-rj" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Su innovación la hace diferente. La firma ha sabido desde un primer momento hacer productos únicos en el mercado con características muy concretas.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://www.samsung.com/pe/smartphones/?product1=sm-a325mzkmltp&product2=sm-g991bzvlltp&product3=">Ver Mas</a></button>
                </div>
                <small class="text-muted">Apple</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReFrY7jl1lihTBPIOOEGTuIiKAGh4-XJVwtw&usqp=CAU" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Los teléfonos celulares LG combinan tecnología y diseño. En LG encontrarás desde teléfonos celulares táctiles a teléfonos 4G</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://www.lg.com/cac/telefonos-celulares/view-all">Ver Mas</a></button>
                </div>
                <small class="text-muted">LG</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/2048px-Xiaomi_logo.svg.png" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Lo que destaca de Xiaomi es la relación calidad – precio. Tienes especificaciones técnicas muy altas a un precio muy ajustado. La capa de personalización MIUI, te permite personalizar el diseño y la interfaz de uso.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://xiaomiperu.com/celulares">Ver Mas</a></button>
                </div>
                <small class="text-muted">Xiaomi</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://i0.wp.com/sybyl.com/wp-content/uploads/2020/02/huawei-logo.png?ssl=1" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Los móviles de Huawei destacan por su fácil interfaz y su eficacia. La marca lo atribuye a su experiencia como creadores de redes de telecomunicaciones en todo el mundo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://consumer.huawei.com/pe/phones/">Ver Mas</a></button>
                </div>
                <small class="text-muted">Huawei</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Motorola_logo.svg/2560px-Motorola_logo.svg.png" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">es una empresa estadounidense de telecomunicaciones y electrónica de consumo, y filial del conglomerado tecnológico chino Lenovo. La empresa fabrica principalmente teléfonos inteligentes y otros dispositivos móviles que ejecutan el sistema operativo Android.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://www.motorola.com.pe/?gclid=Cj0KCQiA99ybBhD9ARIsALvZavW3NeurKyYbw3SM3cHxrzA1ujODksPomESD63ZTiqQXx-Hv86V2eYMaAsXhEALw_wcB">Ver Mas</a></button>
                </div>
                <small class="text-muted">Motorola</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="https://www.movilzona.es/app/uploads-movilzona.es/2020/08/realme-logo.jpg" width="100%" height="225" class="img-fluid" alt="Responsive image">

            <div class="card-body">
              <p class="card-text">Es un fabricante de productos electrónicos con sede en Dongguan, Guangdong, China. Es principalmente conocido por sus teléfonos inteligentes.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-info"><a href="https://www.realme.com/pe/">Ver Mas</a></button>
                </div>
                <small class="text-muted">Realme</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>Swal.fire(
  'Hola mundo!!!',
  'Presiona para avanzar!',
  'success'
) </script>
@stop