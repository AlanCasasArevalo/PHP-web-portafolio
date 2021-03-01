<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Esto te permite pasar parametros opcionales
Route::get('/saludo/{name?}', function ($name = "Invitado") {
    return "Saludos " . $name;
});

Route::get('/', function () {
    echo "<a href='/contactos'>Contactos 1</a><br>";
    echo "<a href='/contactos'>Contactos 2</a><br>";
    echo "<a href='/contactos'>Contactos 3</a><br>";
    echo "<a href='/contactos'>Contactos 4</a><br>";
    echo "<a href='/contactos'>Contactos 5</a><br>";
    echo "<a href='/contactos'>Contactos 6</a><br>";
});

Route::get('/contactos', function () {
    return "Seccion de contactos  ";
});
