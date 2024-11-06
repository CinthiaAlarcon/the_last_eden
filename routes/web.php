<?php

use App\Http\Controllers\ContactMessageController;

// Rutas para formulario de contacto
Route::get('/contact', function (){
    return view('contact');
})->name('contact');
// Ruta principal
Route::get('/', function () {
    return view('main'); // Cambia esto por tu vista principal
})->name('main');

