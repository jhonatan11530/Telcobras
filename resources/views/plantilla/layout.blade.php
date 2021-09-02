<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Telcobras</title>
  <link rel="icon" href="{{ asset('image/icono.ico') }}" type="image/x-icon">
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Soporte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formulario_soporte" action="Telcobras/Soporte" method="POST">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="NameBusiness">Nombre De la Empresa <span style="color: red">*</span></label>
                <input id="NameBusiness" type="text" class="form-control" name="NombreEmpresa" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="IdVerificacion">Tipo de Identificacion <span style="color: red">*</span></label>
                <select id="IdVerificacion" name="TipoIdentificacion" class="form-control" required>
                  <option disabled selected>Seleccione</option>
                  <option value="Registro civil">Registro civil(RC)</option>
                  <option value="Tarjeta de identidad">Tarjeta de identidad(TI)</option>
                  <option value="Cedula de ciudadania">Cédula de ciudadanía(CC)</option>
                  <option value="Tarjeta de extranjeria">Tarjeta de extranjería(TE)</option>
                  <option value="Cedula de extranjeria">Cédula de extranjería(CE)</option>
                  <option value="Numero de identificación tributaria">Número de identificación tributaria(NIT)</option>
                  <option value="Pasaporte">Pasaporte(PP)</option>
                  <option value="Documento de identificación extranjero">Documento de identificación extranjero(DIE)
                  </option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                <label for="IDService">ID del servicio <span style="color: red">*</span></label>
                <input id="IDService" type="number" class="form-control" min="0" name="IDService" required>
              </div>
              <div class=" form-group col-sm-6">
                <label for="NameService">Nombre del servicio <span style="color: red">*</span></label>
                <select id="NameService" name="NombreService" class="form-control" required>
                  <option disabled selected>Seleccione</option>
                  <option value="DATO 1">DATO 1</option>
                  <option value="DATO 1">DATO 2</option>
                  <option value="DATO 1">DATO 3</option>
                  <option value="DATO 1">DATO 4</option>
                  <option value="DATO 1">DATO 5</option>
                </select>
              </div>
            </div>
            <hr>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="NameContacs">Nombre Contacto En Sitio <span style="color: red">*</span></label>
                <input id="NameContacs" type="text" class="form-control" name="NombreContactoSitio" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="Phone">Teléfono <span style="color: red">*</span></label>
                <input id="Phone" type="number" class="form-control" min="0" name="TelefonoContactoSitio" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="ExtPhone">Extensión Teléfono <span style="color: red">*</span></label>
                <input id="ExtPhone" type="number" class="form-control" min="0" name="ExtTelefonoContactoSitio"
                  required>
              </div>
            </div>
            <hr>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="AtencionRequire">REQUIERE ATENCION <span style="color: red">*</span></label>
                <select id="AtencionRequire" name="AtencionRequire" class="form-control" required>
                  <option value="" disabled selected>Seleccione</option>
                  <option value="DIFICULTAD BAJA">DIFICULTAD BAJA</option>
                  <option value="DIFICULTAD MEDIA">DIFICULTAD MEDIA</option>
                  <option value="DIFICULTAD ALTA">DIFICULTAD ALTA</option>
                  <option value="ATENCION URGENTE">ATENCION URGENTE</option>
                </select>
              </div>
              <div class="form-group col-sm-12">
                <label for="Observe">Observaciones </label>
                <textarea id="Observe" name="Observaciones" cols="5" rows="5" class="form-control"
                  placeholder="Opcional"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="col-sm-3">
                <button type="submit" class="form-control btn btn-primary">Enviar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <script>
    $(document).ready(function () {
      $("#formulario_soporte").on("submit", function(e){
        $.ajax({
              type: $(this).attr("method"),
              url: $(this).attr("action"),
              data:$(this).serialize(),
              beforeSend: function(){
                alert("Enviando");
                // btnEnviar.val("Enviando");
              },
              complete:function(data){
                alert("Enviar formulario");
                //  btnEnviar.val("Enviar formulario");
              },
              success: function(data){
                alert("ok");
                // $(".respuesta").html(data);
              },
              error: function(data){
                  alert("Problemas al tratar de enviar el formulario");
              }
          });
      });
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