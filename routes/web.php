<?php

use Illuminate\Support\Facades\Route;

// Ruta Home
Route::get('/', function () {
    return view('pages.home');
});

// Ruta Servicios
Route::get('/servicios/{param?}', function ($param = null) {
    return view('pages.servicios', ['param' => $param]);
})->where('param', '[A-Za-z]+');

// Ruta Proyectos
Route::get('/proyectos/{param?}', function ($param = null) {
    return view('pages.proyectos', ['param' => $param]);
})->where('param', '[A-Za-z]+');

// Ruta Clientes
Route::get('/clientes/{param?}', function ($param = null) {
    return view('pages.clientes', ['param' => $param]);
})->where('param', '[A-Za-z]+');

// Ruta Blog
Route::get('/blog/{param?}', function ($param = null) {
    return view('pages.blog', ['param' => $param]);
})->where('param', '[0-9]+');

// Ruta Contacto
Route::get('/contacto', function () {
    return view('pages.contacto');
});