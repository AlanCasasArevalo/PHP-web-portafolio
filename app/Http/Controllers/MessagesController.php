<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return 'Datos validos';
    }
}
