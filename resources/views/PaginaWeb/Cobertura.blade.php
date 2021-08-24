@extends('plantilla.layout')
@section('content')
<div class="parallaxCobertura mb-4"></div>
<div class="container-fluid">
    <div class="row" style="width: 100%;">
        <div class="col-sm-12 mb-3 text-center">
            <h1><span style="color:#048ABF">NUESTRA</span> <span style="color:#03A65A">COBERTURA</span></h1>
            <p>Operamos una de las redes privadas más
                extensas del occidente colombiano, contando
                con instalaciones completamente
                acondicionadas para aplicaciones de misión
                crítica. <br>
                Nuestra red propia une los mercados clave de la
                región y convergen en el Backbone principal,
                ubicado en Cali - Colombia, donde nos
                interconectamos con los Carriers más
                importantes a nivel nacional e internacional,
                permitiéndonos llevar nuestros servicios a otras
                partes del mundo y obtener una excelente
                performance en la conectividad.</p>
        </div>

        <div class="col-sm-4 mb-3 text-center">
            <h3 class="mb-4">NUESTRA COBERTURA</h3>
            <p>Operamos una de las redes privadas mas extensas del occidente colombiano, contando con instalaciones
                completamente acondicionadas para aplicaciones de misión crítica.</p>
            <p>Nuestra red propia une los mercados clave de la región y convergen en el Backbone principal. ubicado en
                Cali
                – Colombia, donde nos interconectamos con los Carriers mas importantes a nivel nacional e internacional,
                permitiéndonos llevar nuestros servicios a otras partes del mundo y obtener una excelente performance en
                la
                conectividad.</p>
            <h3 class="mb-4">MANTENIMIENTO Y SOPORTE</h3>
            <p>Ofrece el servicio de mantenimiento preventivo/correctivo para los equipos y demás elementos
                suministrados,
                así como el apoyo técnico del centro de gestión corporativo y soporte de servicio a fallas el cual opera
                las
                24 horas del dia y los 365 dias del año.</p>
        </div>
        <div class="col-sm-8 mb-3 text-center">
            <img src="{{URL::asset('image/MAPA-PLITICO-COLOMBIA.png')}}" alt="Error Image" height="100%" width="100%">
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