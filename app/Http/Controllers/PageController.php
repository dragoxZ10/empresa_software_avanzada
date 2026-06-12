<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest; 
use Illuminate\Support\Facades\DB;



class PageController extends Controller
{
    public function servicios($param = null) {
        return view('pages.servicios', ['param' => $param]);
    }

    public function proyectos($param = null) {
        return view('pages.proyectos', ['param' => $param]);
    }

    public function blog($param = null) {
        return view('pages.blog', ['param' => $param]);
    }

    public function clientes()
    {
        $personas = DB::table('persona')->orderByDesc('nPerCodigo')->get();

        return view('pages.clientes', compact('personas'));
    }

    public function create()
    {
        return view('pages.create_cliente');
    }

    public function store(CreatePersonaRequest $request)
    {
        // Recuperamos los datos que ya pasaron por el filtro estricto de validación
        $camposValidados = $request->validated();

        // Inyectamos campos del backend automáticos
        $camposValidados['cPerRnd'] = 'RND-' . strtoupper(substr(uniqid(), -5));
        $camposValidados['nPerEstado'] = '1'; // Activo por defecto

        // Guardado limpio usando Eloquent
        Persona::create($camposValidados);

        return redirect()->route('clientes.index')->with('success', '¡Nuevo cliente empresarial registrado e indexado con éxito!');
    }
}
