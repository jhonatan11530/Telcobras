@extends('plantilla.layout')
@section('content')

<div class="parallax mb-4"></div>

<div class="row" style="width: 100%;">
    <div class="col-sm-5 mb-3">
        <img src="{{URL::asset('image/Telcobras.png')}}" alt="Error Image" height="250px" width="100%">
    </div>
    <div class="col-sm-7 mb-3 text-center">
        <h1><span style="color:#048ABF">Quienes</span> <span style="color:#03A65A">Somos</span></h1>
        <p>Somos una empresa colombiana con más de diez años de experiencia, constituida en una
            de las ciudades más grandes del país y de gran proyección de crecimiento económico, Cali
            - Valle del Cauca, creada con el propósito de e implementar proyectos tecnológicos
            integrales, que permitan la conformación e integración de servicios convergentes para que
            nuestros clientes obtengan un mejoramiento continuo en sus operaciones</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            Conoce Mas
        </button>
    </div>
</div>
<div class="text-center ">
    <h1><span style="color:#048ABF">Nuestro</span> <span style="color:#03A65A">Compromiso</span></h1>
</div>
<div class="row row-cols-1 row-cols-md-3" style="width: 100%">
    <div class="col-sm-4 mb-2">
        <div class="card">
            <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                class="card-img-top" height="150" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">Responsabilidad</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-2">
        <div class="card">
            <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                class="card-img-top" height="150" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">Compromiso</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-2">
        <div class="card">
            <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                class="card-img-top" height="150" width="100%" alt="...">
            <div class="card-body">
                <h5 class="card-title">Calidad</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel"><img src="{{URL::asset('image/Telcobras.png')}}" alt="Error Image"
                        width="150px" height="70px"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Hemos logrado consolidar una serie de alianzas importantes que nos han permitido
                    ejecutar proyectos en conjunto, tanto a nivel local como a nivel nacional, gracias al trabajo
                    profesional realizado por cada uno de nuestros colabores y con el apoyo de proveedores
                    y contratistas</p>
                <p>Hemos logrado consolidar una serie de alianzas importantes que nos han permitido
                    ejecutar proyectos en conjunto, tanto a nivel local como a nivel nacional, gracias al trabajo
                    profesional realizado por cada uno de nuestros colabores y con el apoyo de proveedores
                    y contratistas</p>
                <p>Hemos logrado consolidar una serie de alianzas importantes que nos han permitido
                    ejecutar proyectos en conjunto, tanto a nivel local como a nivel nacional, gracias al trabajo
                    profesional realizado por cada uno de nuestros colabores y con el apoyo de proveedores
                    y contratistas</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<div class="parallax1 mb-4"></div>

<div class="row" style="width: 100%;">
    <div class="col-sm-6 mb-3 text-center">
        <h1><span style="color:#048ABF">NUESTROS </span> <span style="color:#03A65A">SERVICIOS</span></h1>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                        height="150" width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                        height="150" width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                        height="150" width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                        height="150" width="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 4</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-success">Mas Informacion</a>
    </div>
    <div class="service col-sm-6 mb-3"></div>
</div>

<div class="parallax1"></div>
