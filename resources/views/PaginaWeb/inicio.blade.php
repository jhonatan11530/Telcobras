@extends('plantilla.layout')
@section('content')

<div class="parallax"></div>

<div class="parallax2">
    <div class="container-fluid mb-4">
        <div class="row" style="background-color:rgb(28, 166, 88,0.5);color: white;">
            <div class="col-sm-6 mb-4">
                <h6 style="margin: 50px;">LA EMPRESA</h6>
                <h1 style="margin: 50px;font-size: 70px">NOSOTROS</h1>
            </div>
            <div class="col-sm-6 mb-4">
                <p style="font-size: 25px">Nuestra Compañía TELCOBRAS S.A.S, es una empresa de
                    telecomunicaciones
                    e integradora de tecnologías, con amplia experiencia en el montaje y operación de redes inalámbricas
                    y
                    macroproyectos de TICS como conexión total para las Instituciones educativas, Zonas Wifi Gratis Para
                    la
                    Gente entre otros, de esta manera acortamos brechas digitales en sitios urbanos, rurales y extra
                    rurales
                    en
                    el Territorio Nacional.</p>
                <img src="{{URL::asset('image/cobertura.jpg')}}" class="w-100" height="400" alt="Error Image">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col-sm-6 mb-3 text-center">
            <div class="card">
                <h5 class="card-title">Mision</h5>
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 text-center">
            <div class="card">
                <h5 class="card-title">Vision</h5>
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax4 mb-5">
    <h1 class="text-center" style="padding: 150px; color: white;">Acortamos brechas digitales en sitios urbanos, rurales
        y extra rurales en el Territorio Nacional.</h1>
</div>

<h1 class="text-center mb-5">NUESTROS ALIADOS</h1>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-6">
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/ERT-1.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/INTERNEXA.jpg')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/Media-Commerce.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/MINEDUCACION.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/MINTIC.jpg')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/TELEFONICA-MOVISTAR.jpg')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/TIGO-UNE.jpg')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/impretics.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/Infotic.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/claro.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/gobernacionlogo.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/SUBACHOQUE.png')}}" width="120px" height="100px" alt="Error Image">
        </div>
    </div>
</div>

<div class="parallax3">
    <div class="container-fluid mb-4">
        <div class="row row-cols-1 row-cols-md-2" style="background-color:rgba(77, 77, 77, 0.8);color: white;">
            <div class="col mb-4">
                <h1 style="margin: 50px;font-size: 70px">NOSOTROS</h1>
                <a href="/Contacto" style="margin: 50px;font-size: 40px;" class="btn btn-primary">SOLICITAR
                    COTIZACION</a>
            </div>
            <div class="col mb-4">
                <img src="{{URL::asset('image/bombillo-idea.png')}}" style="height: 600px" class="card-img-top"
                    alt="Error Image">
            </div>
        </div>
    </div>
</div>


<h1 class="text-center">Medidor de velocidad</h1>
<h5 class="text-center">Verifica la rapidez de tu conexión con este sencillo test y comprueba la velocidad con que
    recibes y subes datos a la red.</h5>
<div style="text-align:right;">
    <div style="min-height:360px;">
        <div style="width:100%;height:0;padding-bottom:50%;position:relative;"><iframe
                style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;"
                src="//openspeedtest.com/Get-widget.php"></iframe>
        </div>
    </div>
</div>