<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Ruta optimizada que llama al controlador
Route::get('/clientes', [PageController::class, 'clientes'])->name('clientes');

// Páginas estáticas con Route::view y ->name()
Route::view('/', 'pages.home')->name('home');
Route::view('/contacto', 'pages.contacto')->name('contacto');

$regexEmpresa = '[A-Za-z0-9\-]+';

// Rutas dinámicas conectadas al PageController
Route::get('/servicios/{param?}', [PageController::class, 'servicios'])
    ->name('servicios')->where('param', $regexEmpresa);

Route::get('/proyectos/{param?}', [PageController::class, 'proyectos'])
    ->name('proyectos')->where('param', $regexEmpresa);

Route::get('/clientes/{param?}', [PageController::class, 'clientes'])
    ->name('clientes')->where('param', $regexEmpresa);

// Blog validado solo para números
Route::get('/blog/{param?}', [PageController::class, 'blog'])
    ->name('blog')->where('param', '[0-9]+');