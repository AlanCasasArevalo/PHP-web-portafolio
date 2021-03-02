<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store']);

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
