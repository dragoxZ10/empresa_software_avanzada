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
        // Se mantiene el query builder que retorna objetos básicos stdClass
        $personas = DB::table('persona')->orderByDesc('nPerCodigo')->get();

        return view('pages.clientes', compact('personas'));
    }

    public function create()
    {
        return view('pages.create_cliente', [
            'persona' => new Persona()
        ]);
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

        // CORRECCIÓN: Redireccionamos al nombre de ruta correcto que es 'clientes'
        return redirect()->route('clientes')->with('success', '¡Nuevo cliente empresarial registrado e indexado con éxito!');
    }

    /**
     * Muestra el formulario de edición.
     * Recibe el parámetro $id desde la ruta /personas/{id}/editar
     */
    public function edit($id)
    {
        // Buscamos a la persona usando Eloquent a través de su llave primaria 'nPerCodigo'
        $persona = Persona::findOrFail($id);

        return view('pages.editar_cliente', compact('persona'));
    }

    /**
     * Procesa la actualización del registro en la base de datos.
     * Inyecta 'CreatePersonaRequest' para reutilizar las mismas reglas de validación.
     */
    public function update(CreatePersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        
        // Esto debería actualizar todos los campos validados, incluido nPerEstado
        $persona->update($request->validated());

        return redirect()->route('clientes')->with('success', '¡Registro actualizado!');
    }

    public function destroy($id)
    {
        // Buscamos a la persona
        $persona = Persona::findOrFail($id);
        
        // Eliminamos
        $persona->delete();

        // Redireccionamos a la lista con un mensaje
        return redirect()->route('clientes')->with('success', '¡El cliente ha sido eliminado correctamente del sistema!');
    }

}