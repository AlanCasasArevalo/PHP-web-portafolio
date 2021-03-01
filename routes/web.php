<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

//Route::view('/', 'home')->name('home');
//Route::view('/about', 'about')->name('about');
//Route::view('/contact', 'contact')->name('contact');
//Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

// Esto permite listar todas las rutas del controlador
Route::resource('projectos', PortfolioController::class);
