<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Telcobras</title>
  <link rel="shortcut icon" href="{{ URL::asset('image/favicon.ico') }}" type="image/x-icon">
  <!-- scripts -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
  </script>
<script src="https://www.google.com/recaptcha/api.js?render=6LefrkscAAAAADHsA2nHM6EfPvhBggr6BKiA9V76"></script>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-md navbar-dark justify-content-center bg-white fixed-top">
      <a class="navbar-brand " href="/">
        <img src="{{URL::asset('image/Telcobras.png')}}" width="100%" height="70px" class="d-inline-block align-top"
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

  <!-- Contenido AQUI SE PUBLICA EL CONTENIDO -->
  @yield('content')
  <!-- Contenido -->

  <script type="text/javascript">
    $(window).on('load',function() {
        var url =  window.location.hash;
        var id = url.substring(url.lastIndexOf('#') + 1);

        if(id=="InternetSatelital"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
        if(id=="Inalambrica"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
        if(id=="FibraOptica"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
        if(id=="Collacations"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
        if(id=="Outsourcing"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
        if(id=="InternetDedicado"){
          $('html, body').animate({
          scrollTop: $("#InternetSatelital1").offset().top
          }, 1500); 
        }
    });

    $(document).ready(function () {

    $("#Optica").click(function() {
      $('html, body').animate({
          scrollTop: $("#ID1").offset().top
          }, 1500);
    }) 
    $("#Inalambrico").click(function() {
      $('html, body').animate({
          scrollTop: $("#ID2").offset().top
          }, 1500);
    })
    $("#Satelital").click(function() {
      $('html, body').animate({
          scrollTop: $("#ID3").offset().top
          }, 1500);
    }) 

    $("#Collacation").click(function() {
      $('html, body').animate({
          scrollTop: $("#ID4").offset().top
          }, 1500);
    }) 
    $("#OutsourcingTI").click(function() {
      $('html, body').animate({
          scrollTop: $("#ID5").offset().top
          }, 1500);
    })
    });
  </script>
  <footer class="bg-success text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Telcobras</h5>
          <p>
            Somos una empresa colombiana con m??s de diez a??os de experiencia, constituida en una de las ciudades m??s
            grandes del pa??s y de gran proyecci??n de crecimiento econ??mico, Cali - Valle del Cauca, creada con el
            prop??sito de e implementar proyectos tecnol??gicos integrales, que permitan la conformaci??n e integraci??n de
            servicios convergentes para que nuestros clientes obtengan un mejoramiento continuo en sus operaciones
          </p>
        </div>

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3">COMPA????A</h5>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="/SobreNosotros" class="text-white">Acerca de Nosotros</a>
            </li>
            <li class="mb-2">
              <a href="/Cobertura" class="text-white">Cobertura</a>
            </li>
            <li class="mb-2">
              <a href="/Contacto" class="text-white">Cont??ctenos</a>
            </li>
            <li class="mb-2">
              <a href="/terminos" class="text-white">T??rminos y condiciones</a>
            </li>
            <li class="mb-2">
              <a href="/politica" class="text-white">Pol??ticas de protecci??n de datos</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-3">PRODUCTOS Y SERVICIOS</h5>
          <ul class="list-unstyled">

            <li class="mb-2">
              <a href="/Productos-Servicios/tecnologia#FibraOptica" id="Optica" class="text-white">Fibra Optica</a>
            </li>
            <li class="mb-2">
              <a href="/Productos-Servicios/tecnologia#Inalambrica" id="Inalambrico" class="text-white">Inalambrica
                (Radio Enlace)</a>
            </li>
            <li class="mb-2">
              <a href="/Productos-Servicios/tecnologia#InternetSatelital" id="Satelital" class="text-white">Internet
                Satelital</a>
            </li>
            <li class="mb-2">
              <a href="/Productos-Servicios/tecnologia#Collacations" id="Collacation"
                class="text-white">Collacations</a>
            </li>
            <li class="mb-2">
              <a href="/Productos-Servicios/tecnologia#Outsourcing" id="OutsourcingTI" class="text-white">Outsourcing de
                TI</a>
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
      ?? 2020 Copyright:
      <a class="text-white" href="https://.com/">TELCOBRAS S.A.S</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>