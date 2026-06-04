<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Consultamos de forma limpia todos los registros de la tabla persona
        $personas = DB::table('persona')->get();

        // Enviamos la variable $personas directamente a la vista correspondiente
        return view('pages.clientes', compact('personas'));
    }
}