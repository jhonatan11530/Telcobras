<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Telcobras</title>

  <!-- scripts -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
  </script>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-md navbar-dark justify-content-center fixed-top">
      <a class="navbar-brand " href="#">
        <img src="{{URL::asset('image/Telcobras.png')}}" width="250" height="100" class="d-inline-block align-top"
          alt="Error Image">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapsed"
        style="background-color: #03A65A;">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapsed">
        <ul class="navbar-nav ms-auto w-100 justify-content-end">
          <a class="nav-link m-3 text-warning" href="/">
            <h5><strong>Inicio</strong></h5>
          </a>
          <a class="nav-link m-3 text-warning" href="/Productos-Servicios">
            <h5><strong>Productos y Servicios</strong></h5>
          </a>
          <a class="nav-link m-3 text-warning" href="/SobreNosotros">
            <h5><strong>Quienes Somos</strong></h5>
          </a>
          <a class="nav-link m-3 text-warning" href="/Cobertura">
            <h5><strong>Cobertura</strong></h5>
          </a>
          <a class="nav-link m-3 text-warning" href="/Contacto">
            <h5><strong>Contactenos</strong></h5>
          </a>
        </ul>
      </div>
    </nav>
  </header>

  <script>
    $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
    $(".header .navbar").css("background" , "white");
    }else{
    $(".header .navbar").css("background" , "rgb(255, 255, 255,0.5)");
    }
    })
  </script>

  <!-- Contenido AQUI SE PUBLICA EL CONTENIDO -->
  @yield('content')
  <!-- Contenido -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <footer class="bg-success text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Telcobras</h5>
          <p>
            Somos una empresa colombiana con más de diez años de experiencia, constituida en una de las ciudades más
            grandes del país y de gran proyección de crecimiento económico, Cali - Valle del Cauca, creada con el
            propósito de e implementar proyectos tecnológicos integrales, que permitan la conformación e integración de
            servicios convergentes para que nuestros clientes obtengan un mejoramiento continuo en sus operaciones
          </p>
        </div>

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3">COMPAÑÍA</h5>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="/SobreNosotros" class="text-white">Acerca de Nosotros</a>
            </li>
            <li class="mb-2">
              <a href="/Cobertura" class="text-white">Cobertura</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white" data-toggle="modal" data-target="#exampleModal">Soporte</a>
            </li>
            <li class="mb-2">
              <a href="/Contacto" class="text-white">Contáctenos</a>
            </li>
            <li class="mb-2">
              <a href="/terminos" class="text-white">Términos y condiciones</a>
            </li>
            <li class="mb-2">
              <a href="/politica" class="text-white">Políticas de protección de datos</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3">PRODUCTOS Y SERVICIOS</h5>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white">Internet Satelital</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Inalambrica (Radio Enlace)</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Fibra Optica</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Collacations</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Outsourcing de TI</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white">Internet Dedicado</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Redes Sociales</h5>
          <a href="#" type="button" class="btn btn-success"><i class="fab fa-facebook-square fa-3x"></i></a>
          <a href="#" type="button" class="btn btn-success"><i class="fab fa-instagram fa-3x"></i></a>
          <a href="#" type="button" class="btn btn-success"><i class="fab fa-linkedin fa-3x"></i></a>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://.com/">TELCOBRAS S.A.S</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>