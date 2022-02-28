<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'calle'=> ['required'],
            'num_int'=> ['required'],
            'num_ext'=> ['required'],
            'colonia'=> ['required'],
            'municipio'=> ['required'],
            'cp'=> ['required'],
            'estatus' => ['required'],
        ];
    }
}
