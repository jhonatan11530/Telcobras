<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto de la pagina web</title>
</head>

<body>
    <p>TELCOBRAS</p>
    <span>Usted Ha recibido un nuevo Correo Emitido por la pagina web <a href="https://telcobras.com/">Telcobras.com</a></span>
    <hr>
    <p>Datos del Contacto</p>
    <ul>
        <li>
            Nombre : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['Nombre']}}</span> </strong>
        </li>
        <li>
            Tipo de Documento : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['tipo_identificacion']}}</span></strong>  Numero de Identificación : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['identificacion']}}</span></strong>
        </li>
        <li>
            Teléfono de Contacto : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['Telefono']}}</span></strong>
        </li>
        <li>
            Correo Electrónico : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['Correo']}}</span></strong>
        </li>
        <li>
            Departamento Solicitado : <strong><span style="color: #75A034;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['AreaEncargada']}}</span></strong>
        </li>
        <li>
            Nombre del Asunto : <strong><span style="color: black;font-family: Arial, Helvetica, sans-serif;">{{$mensaje['Asunto']}}</span></strong>
        </li>
        <li>
            Observaciones del Asunto : <span style="font-family: Arial, Helvetica, sans-serif;">{{$mensaje['Mensaje']}}</span>
        </li>
    </ul>
    <p>Este correo es de tipo informativo y por lo tanto, le pedimos no responda a este mensaje. Si no desea recibir más información relacionada con Telcobras,por favor ingrese a <a href="https://telcobras.com/">Telcobras.com</a></p>
    <span>Este mensaje y sus adjuntos se dirigen exclusivamente a su destinatario, puede contener información
        privilegiada y/o confidencial para uso exclusivo de la persona o entidad destino. Si no es usted el destinatario
        indicado, queda notificado de que la lectura, utilización, divulgación y/o copia sin autorización puede estar
        prohibida en virtud de la legislación vigente. Si ha recibido este mensaje por equivocación, por favor comunique
        inmediatamente por esta misma vía y proceda a eliminarlo. Agradeciendo su colaboración Telcobras S.A.S.</span>
</body>

</html>