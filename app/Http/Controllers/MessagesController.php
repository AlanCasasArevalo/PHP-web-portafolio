<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => ['required', 'min:8'],
            'content' => ['required', 'min:10'],
        ], [
            'name.required' => 'Necesitamos tu nombre'
        ]);

        return 'Datos validos';
    }
}
