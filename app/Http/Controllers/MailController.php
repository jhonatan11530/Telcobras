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

        $mensaje= request()->validate([
            'Nombre'=>'required',
            'tipo_identificacion'=>'required',
            'identificacion'=>'required',
            'Telefono'=>'required',
            'Correo'=>'required',
            'AreaEncargada'=>'required',
            'Asunto'=>'required',
            'Mensaje'=>'required',
            'g-recaptcha-response'=>'required|recaptcha',
            
        ]);
        Mail::to('jhonatan1153@hotmail.com')->send(new MessageContactoReceived($mensaje));
        Mail::to('noc@telcobras.com')->send(new MessageContactoReceived($mensaje));
       // Mail::to('usuario@telcobras.com')->send(new MessageContactoReceived($mensaje));
       // Mail::to('usuario@telcobras.com')->send(new MessageContactoReceived($mensaje));
        return redirect('/Contacto');
    }
}
