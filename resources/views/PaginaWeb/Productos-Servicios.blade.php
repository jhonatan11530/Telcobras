@extends('plantilla.layout')
@section('content')
<div class="parallaxProductService mb-4"></div>
<h1 class="text-center mb-4"><span style="color:#048ABF">Soluciones y</span> <span
        style="color:#03A65A">proyectos</span>
</h1>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 text-center" style="width: 100%">
        <div class="col mb-4">
            <div class="card">
                <img src="{{URL::asset('image/ordenador-portatil.svg')}}"
                    class="card-img-top" alt="error image">
                <div class="card-body">
                    <h5 class="card-title">tecnologías</h5>
                    <p class="card-text">Fibra Óptica- Radio Enlace - Internet Satelital - Collations - Outsourcing de
                        TI.</p>
                </div>
                <a href="/Productos-Servicios/tecnologia" class="stretched-link"></a>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="{{URL::asset('image/proyecto.svg')}}"
                    class="card-img-top" alt="error image">
                <div class="card-body">
                    <h5 class="card-title">Proyectos</h5>
                    <p class="card-text">Conoce los proyectos en que hemos participado.</p>
                </div>
                <a href="/Productos-Servicios/proyecto" class="stretched-link"></a>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <img src="{{URL::asset('image/servicio-al-cliente.svg')}}"
                    class="card-img-top" alt="error image">
                <div class="card-body">
                    <h5 class="card-title">Servicios</h5>
                    <p class="card-text">Conoce todo nuestro portafolio de servicios.</p>
                </div>
                <a href="/Productos-Servicios/servicios" class="stretched-link"></a>
            </div>
        </div>
    </div>
</div>