<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Páginas estáticas
Route::view('/', 'pages.home')->name('home');
Route::view('/contacto', 'pages.contacto')->name('contacto');

$regexEmpresa = '[A-Za-z0-9\-]+';

// Rutas dinámicas
Route::get('/servicios/{param?}', [PageController::class, 'servicios'])
    ->name('servicios')->where('param', $regexEmpresa);

Route::get('/proyectos/{param?}', [PageController::class, 'proyectos'])
    ->name('proyectos')->where('param', $regexEmpresa);


// Rutas Semana 9 - Crear Clientes
Route::get('/clientes/crear', [PageController::class, 'create'])->name('clientes.create');

Route::post('/clientes', [PageController::class, 'store'])->name('clientes.store');


// Tu ruta original de Clientes
Route::get('/clientes/{param?}', [PageController::class, 'clientes'])
    ->name('clientes')->where('param', $regexEmpresa);

Route::get('/blog/{param?}', [PageController::class, 'blog'])
    ->name('blog')->where('param', '[0-9]+');




    