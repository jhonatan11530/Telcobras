@extends('plantilla.layout')
@section('content')
<div class="parallaxContanto mb-4"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-4"><span style="color:#048ABF">Nuestro</span> <span style="color:#03A65A">Compromiso</span>
            </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5079777501073!2d-76.52875928573731!3d3.468935852072074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a89bccc500b5%3A0x4f96a68ef214692!2sSTRATECSA!5e0!3m2!1ses!2sco!4v1629470303933!5m2!1ses!2sco"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-6">
            <h5>
                <p class="card-text mb-5">Nuestros servicios se prestan a nivel nacional, pero en caso de que quieras
                    comunicarte para una solicitud, nuestra sede principal se encuentra en la ciudad de Cali - Colombia.
                </p>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-search-location"></i>
                    </span>UBICACIÓN : ### ### ####</div>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-phone-alt"></i>
                    </span>LINEAS TELEFÓNICAS : ### ### ### - ### ### ####</div>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-envelope"></i>
                    </span>EMAIL : <a href="mailto:correo@telcobras.com">info@telcobras.com</a></div>
            </h5>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center mb-4"><span style="color:#048ABF">ENVÍANOS UN</span> <span
                    style="color:#03A65A">MENSAJE</span></h3>

            <form action="Telcobras/Contacto" method="POST">
                {{ csrf_field() }}
                <div class="form-row col-md-12">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nombre Completo</label>
                        <input name="Nombre" type="text" class="form-control" id="inputName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPhone">Telefono</label>
                        <input name="Telefono" type="number" class="form-control" id="inputPhone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCorreo">Correo</label>
                        <input name="Correo" type="email" class="form-control" id="inputCorreo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress2">Departamento</label>
                        <input name="Departamento" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputAddress2">Mensaje</label>
                        <textarea name="Mensaje" class="form-control" rows="9"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary center-text">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="parallax1"></div>