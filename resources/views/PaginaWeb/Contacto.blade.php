@extends('plantilla.layout')
@section('content')
<div class="parallaxContanto mb-4"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-4"><span style="color:#048ABF">Nuestro</span> <span style="color:#03A65A">Compromiso</span>
            </h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22528.545213513302!2d-76.52945696245271!3d3.465660290603861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a61610526cb3%3A0x1c18be191d657849!2sAv.%204%20Nte.%20%2326N-18%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1630686938546!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-6">
            <h5>
                <p class="card-text mb-5">Nuestros servicios se prestan a nivel nacional, pero en caso de que quieras
                    comunicarte para una solicitud, nuestra sede principal se encuentra en la ciudad de Cali - Colombia.
                </p>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-search-location"></i>
                    </span>UBICACIÓN : Avenida 4 norte 26 n 18</div>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-phone-alt"></i>
                    </span>LINEAS TELEFÓNICAS : <a href="tel:+576026530107">(602) 6530107</a> - <a href="tel:+573148946643">314 894 6643</a></div>
                <div class="col mb-5"><span style="font-size: 70px; color: Dodgerblue;">
                        <i class="fas fa-envelope"></i>
                    </span>EMAIL : <a href="mailto:info@telcobras.com">info@telcobras.com</a></div>
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
                    <div class="form-group col-md-3">
                        <label for="inputAddress2">Ciudad</label>
                        <input name="Ciudad" type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
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