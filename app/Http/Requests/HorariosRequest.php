<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorariosRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'dia'=> ['required'],
            'inicio'=> ['required'],
            'finalizacion'=> ['required'],
            'id_odontologo'=> ['required'],
        ];
    }
}
