<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

App::setLocale('en');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

/*
 * Esto permite listar todas las rutas del controlador
 */
Route::resource('portfolio', ProjectController::class)->names('projects')->parameter('portfolio', 'project');

Auth::routes();
