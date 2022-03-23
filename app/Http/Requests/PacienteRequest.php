<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'rfc' => 'required',
            'curp' => 'required',
            'fecha_nacimiento' => 'required',
            'calle' => 'required',
            'num_int' => 'required',
            'num_ext' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'cp' => 'required',
            'estado' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'id_usuario' => 'required',
        ];

    }
}
