<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest; 
use Illuminate\Support\Facades\DB;
// Importamos Storage por si más adelante necesitas eliminar imágenes viejas
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    // SEMANA 13 - TAREA 3: MIDDLEWARE DE SEGURIDAD
    public function __construct()
    {
        // Protegemos SOLO los métodos del CRUD que alteran información.
        // Las vistas estáticas y el listado general (index) siguen siendo públicos.
        $this->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function servicios($param = null) {
        return view('pages.servicios', ['param' => $param]);
    }

    public function proyectos($param = null) {
        return view('pages.proyectos', ['param' => $param]);
    }

    public function blog($param = null) {
        return view('pages.blog', ['param' => $param]);
    }

    // SEMANA 13: Renombrado de 'clientes' a 'index' para cumplir con el estándar de Resource
    public function index()
    {
        // Se mantiene tu Query Builder ordenando de forma descendente
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
        $camposValidados = $request->validated();

        // Campos automáticos del backend
        $camposValidados['cPerRnd'] = 'RND-' . strtoupper(substr(uniqid(), -5));
        $camposValidados['nPerEstado'] = '1'; 

        // NUEVO: Lógica para procesar la imagen si el usuario subió una
        if ($request->hasFile('image')) {
            // Guarda físicamente la imagen en storage/app/public/images y retorna la ruta
            $camposValidados['image'] = $request->file('image')->store('images');
        }

        // Guardado limpio usando Eloquent
        Persona::create($camposValidados);

        return redirect()->route('clientes')->with('success', '¡Nuevo cliente empresarial registrado e indexado con éxito!');
    }

    /**
     * Muestra el formulario de edición.
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);

        return view('pages.editar_cliente', compact('persona'));
    }

    /**
     * Procesa la actualización del registro.
     */
    public function update(CreatePersonaRequest $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $camposValidados = $request->validated();

        // NUEVO: Lógica para actualizar la imagen si el usuario seleccionó una nueva
        if ($request->hasFile('image')) {
            // Opcional: Eliminar la imagen anterior del servidor para ahorrar espacio
            if ($persona->image) {
                Storage::delete($persona->image);
            }
            
            // Guardar la nueva imagen
            $camposValidados['image'] = $request->file('image')->store('images');
        }

        $persona->update($camposValidados);

        return redirect()->route('clientes')->with('success', '¡Registro actualizado!');
    }

    /**
     * Elimina el registro de la base de datos.
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        
        // NUEVO: Si eliminamos al cliente, también borramos su imagen del servidor
        if ($persona->image) {
            Storage::delete($persona->image);
        }
        
        $persona->delete();

        return redirect()->route('clientes')->with('success', '¡El cliente ha sido eliminado correctamente del sistema!');
    }
}