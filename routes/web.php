<?php

use Illuminate\Support\Facades\Route;

$portfolio = [
  ['title' => 'Projecto #1'],
  ['title' => 'Projecto #2'],
  ['title' => 'Projecto #3'],
  ['title' => 'Projecto #4'],
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
