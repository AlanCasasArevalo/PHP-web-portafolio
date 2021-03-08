<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

App::setLocale('en');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('message.store');

Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/{id}', [ProjectController::class, 'show'])->name('projects.show');
