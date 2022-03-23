<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GastosRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'categoria'=> ['required'],
            'detalle'=> ['required'],
            'fecha_pago'=> ['required'],
            'fecha_factura'=> ['required'],
            'total'=> ['required'],
        ];
    }
}
