<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MessageContactoReceived;
use App\Mail\MessageSoporteReceived;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function MailSoporte(Request $request)
    {
     
        $mensaje= request()->validate([
            'NombreEmpresa'=>'required',
            'TipoIdentificacion'=>'required',
            'IDService'=>'required',
            'NombreService'=>'required',
            'NombreContactoSitio'=>'required',
            'TelefonoContactoSitio'=>'required',
            'ExtTelefonoContactoSitio'=>'required',
            'AtencionRequire'=>'required',
            'Observaciones'=>'required',
        ]);
        Mail::to('desarrollo1@stratecsa.com')->send(new MessageSoporteReceived($mensaje));

        return redirect('/');
    }
    public function MailContacto(Request $request)
    {
     
        $mensaje= request()->validate([
            'Nombre'=>'required',
            'Telefono'=>'required',
            'Correo'=>'required',
            'Departamento'=>'required',
            'Mensaje'=>'required',
        ]);
        Mail::to('desarrollo1@stratecsa.com')->send(new MessageContactoReceived($mensaje));

        return redirect('/Contacto');
    }
}
