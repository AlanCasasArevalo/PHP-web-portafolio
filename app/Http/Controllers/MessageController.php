<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:8'],
            'content' => ['required', 'min:10'],
        ], [
            'name.required' => __('I need your name')
        ]);

        //Queue son hilos para que el usuario no espere
        Mail::to('alancasasarevalo@gmail.com')->queue(new MessageReceived($msg));

        /*
         * Metodo back es para volver, es similar a redirect
         */
        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas, por favor ten paciencia');
    }
}
