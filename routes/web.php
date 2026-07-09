<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactoController;

// Páginas estáticas
Route::view('/', 'pages.home')->name('home');

// 1. Ruta para MOSTRAR el formulario (apuntando correctamente a la carpeta pages)
Route::view('/contacto', 'pages.contacto')->name('contacto');

// 2. Ruta para RECIBIR los datos del formulario (Método POST)
Route::post('/contacto', [ContactoController::class, 'store']);

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

// Rutas CRUD Personas
Route::get('personas/{id}/editar', [PageController::class, 'edit'])->name('personas.edit');
Route::patch('personas/{id}', [PageController::class, 'update'])->name('personas.update');
Route::delete('personas/{id}', [PageController::class, 'destroy'])->name('personas.destroy');