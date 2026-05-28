<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function servicios($param = null) {
        return view('pages.servicios', ['param' => $param]);
    }

    public function proyectos($param = null) {
        return view('pages.proyectos', ['param' => $param]);
    }

    public function clientes($param = null) {
        return view('pages.clientes', ['param' => $param]);
    }

    public function blog($param = null) {
        return view('pages.blog', ['param' => $param]);
    }
}