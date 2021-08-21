@extends('plantilla.layout')
@section('content')
<div class="parallaxContanto mb-4"></div>
<div class="row" style="width: 100%">
    <div class="col-sm-6">
        <h3 class="mb-4"><span style="color:#048ABF">Nuestro</span> <span style="color:#03A65A">Compromiso</span></h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.5079777501073!2d-76.52875928573731!3d3.468935852072074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a89bccc500b5%3A0x4f96a68ef214692!2sSTRATECSA!5e0!3m2!1ses!2sco!4v1629470303933!5m2!1ses!2sco"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="col-sm-6">
        <br><br>
        <p class="card-text mb-5">This is a longer card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer. This is a longer card with supporting text below as a natural
            lead-in to additional
            content. This content is a little bit longer</p>
            <div class="row">
        <div class="col-sm-3 mb-5 no-gutters">
            <span style="font-size: 48px; color: Dodgerblue;">
                <i class="fas fa-map-marker-alt"></i>
            </span>
            <span>asdasd</span>
        </div>
        <div class="col-sm-3 mb-5 no-gutters">
            <span style="font-size: 48px; color: Dodgerblue;">
                <i class="fas fa-phone-square-alt"></i>
            </span>
            <span>asdasd</span>
        </div>
    </div>
    </div>

    <div class="col-sm-12">
        <h3 class="text-center mb-4"><span style="color:#048ABF">ENVÍANOS UN</span> <span
                style="color:#03A65A">MENSAJE</span></h3>

        <form>
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



<div class="parallax1"></div>