<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store()
    {
        // 1. Validamos los datos y los guardamos en la variable $mensaje
        $mensaje = request()->validate([
            'nombre'  => 'required',
            'email'   => 'required|email',
            'asunto'  => 'required',
            'mensaje' => 'required|min:3',
        ], [
            'nombre.required'  => 'Ingresa tu nombre',
            'email.required'   => 'Ingresa tu correo electrónico',
            'asunto.required'  => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje'
        ]);

        // 2. Retornamos la vista del Mailable directo al navegador para previsualizarlo
        Mail::to('ebertruiz700@ebertech.com')->send(new MensajeRecibido($mensaje));
        
        return back()->with('success', '¡Mensaje enviado correctamente!');
    }
}