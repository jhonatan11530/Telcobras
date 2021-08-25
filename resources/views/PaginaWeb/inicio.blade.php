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
                <img src="{{URL::asset('image/mision.svg')}}" height="150px" class="card-img-top" alt="Error Image">
                <h5 class="card-title">Mision</h5>
                <div class="card-body">
                    Ser una empresa líder en Latinoamérica en la generación de desarrollo sostenible en el sector de las
                    TIC, perfeccionando modelos de apropiación, que produzcan avances a nuestros aliados estratégicos y
                    a sus comunidades.
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 text-center">
            <div class="card">
                <img src="{{URL::asset('image/vision.svg')}}" height="150px" class="card-img-top" alt="Error Image">
                <h5 class="card-title">Vision</h5>
                <div class="card-body">
                    Ser un aliado de las organizaciones en la formulación e implementación de proyectos que impacten a
                    la comunidad mediante la implementación y apropiación de las TIC. Calidad vida.
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
            <img src="{{URL::asset('aliados/ERT-1.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/INTERNEXA.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/Media-Commerce.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/MINEDUCACION.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/MINTIC.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/TELEFONICA-MOVISTAR.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/TIGO-UNE.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/impretics.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/Infotic.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/claro.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/gobernacionlogo.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
        <div class="col mb-4">
            <img src="{{URL::asset('aliados/SUBACHOQUE.svg')}}" width="80%" height="80%" alt="Error Image">
        </div>
    </div>
</div>

<div class="parallax3">
    <div class="container-fluid">
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