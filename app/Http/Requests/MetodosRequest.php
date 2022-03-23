<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetodosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
                'metodo' => 'required',
                ];
    }
}
