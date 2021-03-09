<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Esta validacion permite que se puedan o no crear proyectos nuevos, por ejemplo que sea o no necesario ser administrador
        //Aqui pondremos un verdadero
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    /*
     * Ponemos las reglas de validacion de el formulario de crear proyectos
     */
    public function rules()
    {
        return [
            //
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // __('Texto a traducir') Para hacer traducciones
            'title.required' => __('El proyecto necesita un titulo'),
            'url.required' => 'El proyecto necesita una url',
            'description.required' => 'El proyecto necesita una descripción',
        ];
    }
}
