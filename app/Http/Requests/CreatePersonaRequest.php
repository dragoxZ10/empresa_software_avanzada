<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Autorizamos la petición
    }

    // Definición de las reglas de validación corporativas
    public function rules()
    {
        return [
            'cPerApellido'  => 'required|string|max:50',
            'cPerNombre'    => 'required|string|max:50',
            'cPerDireccion' => 'nullable|string|max:100',
            'dPerFecNac'    => 'required|date',
            'nPerEdad'      => 'required|integer|min:0',
            'nPerSueldo'    => 'required|numeric|min:0',
            'nPerEstado'    => 'nullable|in:0,1',
            
            // Si hay un parámetro 'persona' en la ruta (estamos editando), es nullable. Si no, es required.
            'image' => [
                $this->route('persona') ? 'nullable' : 'required', 
                'image', 
                'mimes:jpeg,png,jpg', 
                'max:2048'
            ],
        ];
    }

    public function messages()
    {
        return [
            'cPerApellido.required' => 'El apellido del cliente es totalmente obligatorio.',
            'cPerNombre.required'   => 'El nombre del cliente es totalmente obligatorio.',
            'dPerFecNac.required'   => 'Seleccione una fecha de nacimiento válida.',
            'nPerEdad.required'     => 'La edad cronológica es obligatoria.',
            'nPerSueldo.required'   => 'Debe asignar un sueldo base mayor a cero.',
            
            // TAREA 3: Mensajes de error personalizados para la imagen
            'image.required'        => 'Debes seleccionar una imagen.',
            'image.image'           => 'El archivo seleccionado debe ser una imagen válida.',
            'image.mimes'           => 'Solo se permiten imágenes en formato JPEG o PNG.',
            'image.max'             => 'El peso máximo del archivo es 2000 kb.',
        ];
    }
}