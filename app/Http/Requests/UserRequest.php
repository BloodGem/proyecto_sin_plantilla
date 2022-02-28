<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'imagen' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'calle'=> ['required'],
            'num_int'=> ['required', 'int'],
            'num_ext'=> ['required', 'int'],
            'colonia'=> ['required'],
            'municipio'=> ['required', 'string'],
            'cp'=> ['required', 'int'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol' => ['required','string'],
            'estatus' => ['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
