<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactoController;

// SEMANA 13: Personalización de verbos para mantener tus URLs en español (/crear y /editar)
Route::resourceVerbs([
    'create' => 'crear',
    'edit' => 'editar',
]);

// Páginas estáticas
Route::view('/', 'pages.home')->name('home');

// Formulario de contacto (Semana 12)
Route::view('/contacto', 'pages.contacto')->name('contacto');
Route::post('/contacto', [ContactoController::class, 'store']);

$regexEmpresa = '[A-Za-z0-9\-]+';

// Rutas dinámicas informativas
Route::get('/servicios/{param?}', [PageController::class, 'servicios'])
    ->name('servicios')->where('param', $regexEmpresa);

Route::get('/proyectos/{param?}', [PageController::class, 'proyectos'])
    ->name('proyectos')->where('param', $regexEmpresa);

Route::get('/blog/{param?}', [PageController::class, 'blog'])
    ->name('blog')->where('param', '[0-9]+');

// SEMANA 13: Route::resource

// 1. Recurso para Clientes: Controla el listado (index), el formulario (create) y el guardado (store)
Route::resource('clientes', PageController::class)->only(['index', 'create', 'store'])->names([
    'index' => 'clientes', // Forzamos el nombre exacto 'clientes' para no romper tus vistas
]);

// 2. Recurso para Personas: Controla la edición (edit), actualización (update) y eliminación (destroy)
Route::resource('personas', PageController::class)->only(['edit', 'update', 'destroy']);