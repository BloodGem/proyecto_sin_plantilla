<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BancosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
                'banco' => 'required',
                'siglas' => 'required',
                ];
    }
}
