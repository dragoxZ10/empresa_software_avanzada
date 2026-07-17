<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Autorizamos la petición
    }

    public function rules()
    {
        return [
            'cPerApellido'  => 'required|string|max:50',
            'cPerNombre'    => 'required|string|max:50',
            'cPerDireccion' => 'nullable|string|max:100',
            'dPerFecNac'    => 'required|date',
            'nPerEdad'      => 'required|integer|min:0',
            'nPerSueldo'    => 'required|numeric|min:0',
            // SOLUCIÓN: Cambiamos 'required' por 'nullable'
            'nPerEstado'    => 'nullable|in:0,1', 
            'image'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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
            // NUEVOS MENSAJES DE ERROR PARA LA IMAGEN
            'image.image'           => 'El archivo debe ser una imagen válida.',
            'image.mimes'           => 'Solo se permiten imágenes en formato JPEG, JPG o PNG.',
            'image.max'             => 'La imagen no debe pesar más de 2MB.',
        ];
    }
}