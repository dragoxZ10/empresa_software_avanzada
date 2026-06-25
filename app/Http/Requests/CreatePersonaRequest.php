<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
{
    // Cambiar a true para autorizar la petición del formulario
    public function authorize()
    {
        return true;
    }

    //Definición de las reglas de validación corporativas
    public function rules()
    {
        return [
            'cPerApellido'  => 'required|string|max:50',
            'cPerNombre'    => 'required|string|max:50',
            'cPerDireccion' => 'nullable|string|max:100',
            'dPerFecNac'    => 'required|date',
            'nPerEdad'      => 'required|integer|min:0',
            'nPerSueldo'    => 'required|numeric|min:0',
            'nPerEstado' => 'required|in:0,1', // Asegúrate de incluir esto
        ];
    }

    //Mensajes personalizados debajo de cada caja de texto
    public function messages()
    {
        return [
            'cPerApellido.required' => 'El apellido del cliente es totalmente obligatorio.',
            'cPerNombre.required'    => 'El nombre del cliente es totalmente obligatorio.',
            'dPerFecNac.required'    => 'Seleccione una fecha de nacimiento válida.',
            'nPerEdad.required'      => 'La edad cronológica es obligatoria.',
            'nPerSueldo.required'    => 'Debe asignar un sueldo base mayor a cero.',
        ];
    }
}