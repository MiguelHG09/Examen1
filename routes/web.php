<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/directorio', function () {
    return view('directorio');
});

Route::get('/crear-entrada', function () {
    return view('crearEntrada');
})->name('crear-entrada');

Route::get('/buscar-entrada', function () {
    return view('buscar');
})->name('buscar-entrada');

Route::get('/ver-contactos/{id}', function ($id) {
    // Aquí deberías pasar la lógica para obtener la información de la entrada y los contactos
    return view('vercontactos', ['id' => $id]);
})->name('ver-contactos');

Route::get('/eliminar-entrada/{id}', function ($id) {
    return view('eliminar', ['id' => $id]);
})->name('eliminar-entrada');

    
