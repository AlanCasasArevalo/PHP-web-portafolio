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
//
//Route::get('/', function () {
//    $name = "Alan";
//
////    return view('home')->with('name', $name);
////    return view('home')->with(['name' => $name]);
////    return view('home', ['name' => $name]);
//    // Este metodo tiene que tener exactamente el mimso nombre el nombre de la variable ['name' => $name]
//    return view('home', compact('name'));
//})->name('home');

/*
 *
 * Este metodo de renderizar vistas es el adecuado cuando vas a enviar politicas de privacidad, terminos y condiciones en definitiva no pasar parametros a la vista o pasarle MUY POCOS
Route::view('/', 'home')->name('home);
Route::view('/', 'home' , ['name' => 'Jorge Juan'])->name('home);
 */

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/portfolio', 'portfolio')->name('portfolio');
