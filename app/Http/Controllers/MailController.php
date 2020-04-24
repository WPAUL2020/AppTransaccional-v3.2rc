<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Redirect;
use SessionUpdateTimestampHandlerInterface;


class MailController extends Controller
{
    public function store(Request $request)
    {
        Mail::send('emails.contact', $request->all() , function($msj){
            $msj->subject('Correo de Contacto e Informacion');
            $msj->to('williampaul1986@gmail.com');
        });
        return Redirect('Contact')->with("msj" , "Mensaje enviado correctamente'");
    }
}
