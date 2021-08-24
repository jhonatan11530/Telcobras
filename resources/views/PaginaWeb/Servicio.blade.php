@extends('plantilla.layout')
@section('content')
<div class="parallax2">
    <h1 class="text-center" style="padding: 150px; color: white;">Servicios</h1>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/INTERNET-DEDICADO.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Internet Dedicado</h1>
            <p>Ofrecernos un servicio de acceso a Internet Carrier Class sin reúso y capacidad de proveer anchos de
                banda
                diferenciados a nivel de acceso nacional e internacional que le permitirá a nuestros usuarios optimizar
                las
                comunicaciones con un servicio estable y continuo.</p>
            <h2 style="color: #1CA658">Ventajas:</h2>
            <ul>
                <li>Conectar empleados remotos o pequeñas oficinas con las aplicaciones de su empresa a través de Redes
                    Privadas Virtuales – VPN y direccionamiento público internacional.</li>
                <li>Disponer de un único punto de acceso a Internet para todas las sucursales de su empresa que estén
                    interconectadas a la red de datos corporativa, facilitando el control de acceso y establecimiento de
                    políticas de seguridad y control de contenidos.</li>
                <li>Emplea las tecnologías de acceso y transporte de la red de Conectrvidad Avanzada IP para ofrecer
                    enlaces
                    permanentes y exclusivos, con ancho de banda simétrico garantizado hacia la red mundial Internet.
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Internet Banda Ancha</h1>
            <p>Ofrecemos un servicio de acceso a Internet con anchos de banda asimétricos dependiendo de las necesidades
                del
                cliente a un costo mucho menor garantizando de igual manera todos los niveles de mantenimiento y
                operación
                del servicio</p>
            <h2 style="color: #1CA658">ventajas:</h2>
            <ul>
                <li>Proveer el servicio de navegación en Internet a sucursales.</li>
                <li>Implementar soluciones de teletrabajo.</li>
                <li>Conectar dispositivos como datafonos, cajeros automáticos, celulares, tablets, entre otros.</li>
                <li>Implementar soluciones de video vigilancia, telemetría y monitoreo de alarmas.</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <div class="card">
            <img src="{{URL::asset('image/fibra-oscura.jpg')}}" width="100%" height="100%" alt="Error Image">
        </div>
    </div>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/interconexion-de-datos.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Interconexión de datos</h1>
            <h2 style="color: #1CA658">Servicios Lan to Lan (Datos):</h2>
            <p>Ofrecemos un servicio con los beneficios de transporte de datos en tecnologías Ethernet y IP/MPLS, con la
                cual su empresa podrá obtener la topología que se adapte a sus necesidades y las condiciones de servicio
                que
                requiera su tráfico, a través de mecanismos estándares y políticas preestablecidas para el servicio como
                son:</p>
            <h2 style="color: #1CA658">Estándar:</h2>
            <p>con conversor de medio en los extremos.</p>
            <h2 style="color: #1CA658">Avanzado:</h2>
            <p>con instalación de Router gama baja en los extremos.</p>
            <h2 style="color: #1CA658">Premium:</h2>
            <p>con instalación de Router gama alta en los extremos.</p>
            <h2 style="color: #1CA658">Ventajas:</h2>
            <ul>
                <li>Integrar nuevos puntos como sucursales, filiales o centros de procesamiento con la posibilidad de
                    acceder a todos los recursos compartidos de su empresa.</li>
                <li>Transmitir de manera integrada información de servicios de datos, voz y video entre las sedes y
                    oficinas
                    de su empresa, con la posibilidad de seleccionar el ancho de banda necesario para cada aplicación de
                    negocio y de manera independiente al protocolo de comunicaciones empleado.</li>
                <li>Entregar a sus empleados recursos y servicios informáticos centralizados como: correo electrónico,
                    telefonía IP, bases de datos, CRM, ERP e Internet, entre otros.</li>
                <li>Comunicación entre centros de cómputo a través de enlaces de alta capacidad.</li>
                <li>Interconectar equipos que usan protocolos propietarios para la comunicación o dispositivos como
                    centrales de conmutación, troncaleso plantas telefónicas.</li>
            </ul>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Internet Satelital</h1>
            <p><strong>TELCOBRAS S.A.S</strong> es un proveedor autorizado para el suministro de soluciones de capacidad
                Satelital en Banda KA y KU de Colombia, con la posibilidad de ofrecer servicios de internet satelital de
                Alta Velocidad. </p>
            <p>Actualmente somos Distribuidores directos del único proveedor de capacidad satelital de Banda KA y KU en
                Colombia y aprovechamos las necesidades territoriales y sectoriales insatisfechas para complementar
                portafolios de servicios y soluciones de nuestros aliados de negocios, para así poder ofrecer servicios
                de
                acceso a internet satelital de alta velocidad.</p>
            <p>El servicio que brinda <strong>TELCOBRAS S.A.S</strong> está basado en una red Satelital VSAT en banda KA
                y
                KU que permite brindar a sus clientes el acceso a Internet en cualquier punto donde exista cobertura
                satelital del Beam ofrecido por <strong>TELCOBRAS S.A.S</strong> El Sistema (red VSAT) está formado por
                los
                siguientes elementos:</p>
            <ul>
                <li>El Gateway. (Equipamiento RF, Networking, seguridad, Aceleración, DNS, etc.)</li>
                <li>El Segmento Satelital. (Uplink y downlink, plan de frecuencias)</li>
                <li>La Estación Remota. (Equipamiento OUTDOOR e INDOOR)</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <img src="{{URL::asset('image/internet-satelital.jpg')}}" style="width: 100%;height: 100%;" alt="Error Image">
    </div>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/ENSEÑANZA-APROPIACION.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Servicio de promoción y apropiación</h1>
            <p><strong>TELCOBRAS S.A.S</strong> desarrolla programas e iniciativas que buscan promover el uso efectivo y
                la
                apropiación masiva de las TIC. Diseñamos e implementamos proyectos que tienen como meta mejorar la
                calidad
                de vida de cada colombiano, reducir la brecha digital, disminuir la pobreza y contribuir al desarrollo
                del
                país con la apropiación de las TIC.</p>
            <p>Somos un operador que hace presencia a nivel nacional, enseñando sobre la utilización y apropiación del
                uso
                de las zonas Wi-Fi gratis para la gente y en general de las TIC, enterando a la ciudadanía de cómo
                ingresar
                a este servicio y utilizarlo para un buen provecho. Por ejemplo, encontrar los puntos de corte del
                Sisben
                requeridos para el acceso a programas sociales a través de su portal Web, como se enseñó a personas que
                pertenecen a ‘Más Familias en Acción’.</p>
            <p>Contamos con personal entrenado y calificado para que en distintos sectores del territorio nacional a
                donde
                se ha llegado la apropiación del servicio de internet, la población usuaria de las Zonas Wi-Fi gratis y
                en
                general de las TIC atiende al llamado de formación por medio de la apropiación tecnológica.</p>
        </div>
    </div>
</div>

<div class="row flex-column-reverse flex-lg-row no-gutters">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Zonas WIFI</h1>
            <p>Gracias a nuestras tecnologías e infraestructura podemos llegar a lugares remotos y prestar este servicio
                de forma integral con las licencias, software y seguridad que estas requieren.</p>
            <p>Desarrollamos estudios de factibilidad para determinar el medio de comunicación más adecuado para
                conectar y transmitir el servicio, de esta forma adecuamos espacios externos e internos entregando
                conexión a la red mundial por medio de canales dedicados con altos estándares de calidad, disponibilidad
                y soporte técnico.</p>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <div class="card">
            <img src="{{URL::asset('image/WIFI.jpg')}}" width="100%" height="100%" alt="Error Image">
        </div>
    </div>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/CCTV.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Soluciones de Seguridad (CCTV)</h1>
            <p>Innovamos y nos ponemos a la vanguardia de la tecnología para que nuestros usuarios puedan administrar de
                manera centralizada la seguridad de todo tipo de infraestructura mediante redes inteligentes de Video.
            </p>
            <p>Utilizamos aplicativos que permiten visualizar en tiempo real las imágenes recogidas por las cámaras de
                video en cualquier dispositivo móvil o equipo de cómputo fijo. Por lo anterior brindamos visualización
                simultánea de cada cámara y se almacena el registro digital de todas las imágenes captadas.</p>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Soluciones de VoIP</h1>
            <p>Sistemas de comunicación para voz y datos con tecnología IP, para esto implementamos soluciones que nos
                permitan integrar en un único sistema la telefonía de su compañía</p>
            <h2 style="color: #1CA658">Beneficios:</h2>
            <ul>
                <li>Mejorar la Atención a sus Clientes. (implementación de contestadores automáticos y almacenamiento de
                    mensajes)</li>
                <li>Mejorar la comunicación entre sus empleados. (Extensiones personalizadas para cada departamento de
                    su empresa)</li>
                <li>Adecuas el sistema de comunicación de su empresa haciéndolo compactible a futuras implementaciones
                    tecnológicas.</li>
                <li>Simplificar y reducir costos en sus sistemas de comunicación.</li>
            </ul>
            <p>La tecnología voz IP hace posible que la señal de voz viaje a través de Internet empleando el protocolo
                IP (Protocolo de Internet). Esto significa que se envía la señal de voz en forma digital, en paquetes de
                datos, en lugar de enviarla en forma analógica a través de circuitos utilizables solo por telefonía
                convencional.</p>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <img src="{{URL::asset('image/VOIP.jpg')}}" style="width: 100%;height: 100%;" alt="Error Image">
    </div>
</div>
<div class="card-group">
    <div class="card">
        <img src="{{URL::asset('image/soporte-y-mantenimiento.jpg')}}" width="100%" height="100%" alt="Error Image">
    </div>
    <div class="card">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Mantenimiento y Soporte</h1>
            <p>Ofrece el servicio de mantenimiento preventivo/correctivo para los equipos y demás elementos
                suministrados, así como el apoyo técnico del centro de gestión corporativo y soporte de servicio a
                fallas el cual opera las 24 horas del dia y los 365 dias del año.</p>
            <h2 style="color: #1CA658">Ventajas:</h2>
            <ul>
                <li>Niveles de servicio garantizados con disponibilidad del 99,7%.</li>
                <li>Soporte técnico 24x7x365.</li>
                <li>Personal profesional calificado y experto en atención de soluciones.</li>
                <li>Sistema de gestión centralizado que garantiza un monitoreo continuo, eficaz y constante sobre la
                    red, respaldada por los procesos de aseguramiento y soporte lógico y en sitio, que garantiza en todo
                    momento la confiabilidad y altos niveles de disponibilidad en los enlaces.</li>
            </ul>
        </div>
    </div>
</div>
<div class="row flex-column-reverse flex-lg-row no-gutters">
    <div class="col-lg-6 col-xl-6">
        <div class="container">
            <h1 style="color: #1CA658" class="text-center mb-4">Servicios Adicionales</h1>
            <p>Ofrecemos un amplio portafolio de herramientas encaminadas a mejorar las plataformas tecnológicas de su
                empresa con todo tipo de dispositivos y equipos, capaces de soportar los diferentes procesos TI de una
                organización bajo parámetros escalables y adaptativos a las necesidades que se requieran, como son</p>
            <h2 style="color: #1CA658">Los siguientes:</h2>
            <ul>
                <li>Seguridad Informática/ UTM / Antimalware / Antivirus</li>
                <li>Sistema integrado de seguridad física/ CCTV / Control de Acceso</li>
                <li>Consultoría y asesorías técnicas</li>
                <li>ZonasWiFi</li>
                <li>Cableado Estructurado</li>
                <li>Suministro e instalación de equipos de telecomunicaciones</li>
                <li>Construcción de Datacenter / Servicios en la nube</li>
                <li>Server Backup / DNS, rDNS</li>
                <li>Voz IP Corporativa</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-6 col-xl-6">
        <img src="{{URL::asset('image/INTERNET-DEDICADO.jpg')}}" style="width: 100%;height: 100%;" alt="Error Image">
    </div>
</div>