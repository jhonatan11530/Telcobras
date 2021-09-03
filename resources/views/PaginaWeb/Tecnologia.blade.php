@extends('plantilla.layout')
@section('content')
<div class="parallax2">
    <h1 class="text-center" style="padding: 150px; color: white;">Tecnologías</h1>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/fibra-oscura.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card col-lg-6 col-xl-6" id="ID1">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Fibra óptica</h1>
            <h2 style="color: #1CA658">Troncales Municipales:</h2>
            <p>Ofrecemos
                servicios de soluciones de datos de alta
                disponibilidad y de anchos de banda
                dedicados en fibra óptica extremo –
                extremo para garantizar troncales
                exclusivas en las localidades de
                cobertura</p>
            <h2 style="color: #1CA658">Última Milla Iluminada / Oscura:</h2>
            <p>Ofrecemos servicios de últimas millas en
                fibra óptica iluminada mono-modo con
                equipos de interconexión gestionables y
                bajo los estándares de calidad y
                velocidad de acuerdo a las necesidades
                de la solución, así como servicios de fibra
                oscura NO gestionable y exclusivos de
                acuerdo a las necesidades de la solución.</p>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters" id="ID2">
    <div class="col-lg-6 col-xl-6" >
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Inalámbrica (Radio Enlaces)</h1>
            <h2 style="color: #1CA658">Troncales dedicadas:</h2>
            <p>Ofrecemos un
                servicio de enlaces Punto a Punto (PTP)
                de alta disponibilidad y de anchos de
                banda dedicados de hasta 100 Km de
                distancia, brindando interconexiones
                entre las diferentes sucursales del cliente
                y puntos estratégicos de nuestra red de
                acceso para soluciones de conectividad.</p>
            <h2 style="color: #1CA658">Últimas millas (UK):</h2>
            <p >Ofrecemos
                enlaces sobre los sitios de su interés con
                nodos o centros de datos mediante
                soluciones extremo a extremo
                totalmente integradas</p>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6"  >
        <div class="card" >
            <img src="{{URL::asset('image/network-connection-9.jpg')}}" width="100%" height="100%" alt="Error Image" >
        </div>
    </div>
    
</div>
<div class="card-group" >
    <div class="card">
        <img src="{{URL::asset('image/internet-satelital.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card" >
        <div class="container" id="ID3">
            <h1 style="color: #1CA658" class="text-center mb-4">Internet satelital</h1>
            <p>Ofrecemos un servicio con los beneficios de acceso a Internet vía satélite, el cual le permite a su
                empresa estar conectado a la red sin importar su ubicación con altos niveles de calidad y
                disponibilidad, bajo las siguientes modalidades:</p>
            <ul>
                <li><strong style="color: #1CA658">Soluciones VSAT Banda KA</strong></li>
                <li><strong style="color: #1CA658">Soluciones VSAT Banda KU</strong></li>
                <h4 style="color: #1CA658">Ventajas que nuestro Carrier puede trasladar a
                    sus clientes finales:</h4>
                <li>Conectividad permanente y desde cualquier lugar.</li>
                <li>Diferentes alternativas de velocidades. en simetría y proporción.</li>
                <li>Priorización de trafico.</li>
                <li>Escalabilidad y flexibilidad en el servicio.</li>
                <li>Alto porcentaje de disponibilidad.</li>
                <li>Atención y soporte proactivo 7x24x365.</li>
                <li>Ideal para instituciones ubicadas en zonas rurales y comunidades apartadas.</li>
                <li>Tramites en linea de entidades gubernamentales en municipios retirados.</li>
                <li>Interconectar compañías en proceso de expansión.</li>
                <li>Implementación de eventos en sitios con conectividad deficiente o nula</li>
                <li>Manejo de aplicativos basados en Web.</li>
            </ul>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters" id="ID4">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Collocations</h1>
            <p>Ofrecemos un servicio de alojamiento de espacio físico sofisticado y seguro de sus equipos o servidores
                en nuestros Datacenters de operación regional que le garantizara una adecuada gestión, administración y
                control de sus aplicativos bajo los estándares internacionales que le permitirán alojar sus equipos o
                servidores de forma segura y con el monitoreo de red 7x24x365.</p>
            <h5 style="color: #1CA658">Ventajas:</h5>
            <ul>
                <li>Entregamos al cliente y a sus equipos
                    una nueva alternativa de interconexión a
                    Internet, de alta velocidad, con los
                    mejores y más eficientes esquemas
                    redundantes, así como también la
                    disminución de costos y una mayor
                    competitividad para su negocio.</li>
                <li>Garantizamos una administración
                    dedicada del espacio contratado,
                    asegurando la continuidad operativa de
                    su servidor o de sus equipos.</li>
                <li>Los clientes contaran con un sistema de
                    respaldo automatizado por un costo
                    mensual que en todos los casos
                    representara mayor rentabilidad.</li>
                <li>Este servicio brinda el soporte y
                    monitoreo necesario para nuestros
                    clientes con el respaldo continuo de
                    ingenieros de gran experiencia en
                    servicios de Datacenters. Disponibilidad
                    24x7 los 365 días del año.</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <img src="{{URL::asset('image/network-connection-7.jpg')}}" style="width: 100%;height: 100%;" alt="Error Image">
    </div>
</div>
<div class="card-group" id="ID5">
    <div class="card">
        <img src="{{URL::asset('image/Outsourcing.png')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card" >
        <div class="container" >
            <h1 style="color: #1CA658" class="text-center mb-4">Outsourcing de TI</h1>
            <p>Brindamos un equipo humano altamente
                calificado y a su vez herramientas tecnológicas
                que le permitirán implementar, operar y
                gestionar sus procesos de TI. Escalabilidad,
                versatilidad y calidad en el contacto con sus
                clientes internos/externos, así como el soporte
                técnico remoto o en sitio sobre sus plataformas,
                aplicaciones y equipos. Administre y gestione
                todos los incidentes relacionados con la
                infraestructura de TI, garantizando acuerdos de
                nivel de servicio (SLA) y reduciendo costos, al
                tiempo que permite al área de TICs
                concentrarse en aumentar la productividad del
                negocio.</p>
            <ul>
                <li>Contact Center</li>
                <li>Mesa de ayuda TI</li>
                <li>Consultoría procesos TI</li>
                <li>Administración y Gestión</li>
                <li>Gestión Documental</li>
            </ul>
        </div>
    </div>
</div>