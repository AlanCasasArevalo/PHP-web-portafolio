<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
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

        return 'Mensaje enviado';
    }
}
