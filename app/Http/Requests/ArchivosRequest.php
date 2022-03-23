<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArchivosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'archivo' => 'required',
            'comentario' => 'required',
            'id_paciente' => 'required',
            ];
    }
}
