<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'dia_horas'=> ['required'],
            'id_odontologo'=> ['required'],
            'id_paciente'=> ['required'],
            'estatus'=> ['required'],
            'situacion'=> ['required'],
        ];
    }
}
