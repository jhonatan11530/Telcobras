<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\MessageContactoReceived;
use App\Mail\MessageSoporteReceived;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function MailContacto(Request $request)
    {

        $mensaje = request()->validate([
            'Nombre' => 'required',
            'tipo_identificacion' => 'required',
            'identificacion' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required',
            'AreaEncargada' => 'required',
            'Asunto' => 'required',
            'Mensaje' => 'required'

        ]);

        if ($mensaje['AreaEncargada'] == "Departamento Comercial") {
            Mail::to('comercial@telcobras.com')->send(new MessageContactoReceived($mensaje));

            // NOTIFICACION A GERENCIA
            Mail::to('vladimir.cordoba@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('Jose.jaramillo@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('jorge.aristizabal@telcobras.com')->send(new MessageContactoReceived($mensaje));
        } elseif ($mensaje['AreaEncargada'] == "Departamento Administrativo") {
            Mail::to('info@telcobras.com')->send(new MessageContactoReceived($mensaje));

            // NOTIFICACION A GERENCIA
            Mail::to('vladimir.cordoba@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('Jose.jaramillo@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('jorge.aristizabal@telcobras.com')->send(new MessageContactoReceived($mensaje));;
        } elseif ($mensaje['AreaEncargada'] == "Departamento Técnico") {
            Mail::to('noc@telcobras.com')->send(new MessageContactoReceived($mensaje));

            // NOTIFICACION A GERENCIA
            Mail::to('vladimir.cordoba@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('Jose.jaramillo@telcobras.com')->send(new MessageContactoReceived($mensaje));
            Mail::to('jorge.aristizabal@telcobras.com')->send(new MessageContactoReceived($mensaje));
        }

        return redirect('/Contacto');
    }
}
