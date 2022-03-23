<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotivoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'motivo' => 'required',
            'descripcion' => 'required',
            ];
    }
}
