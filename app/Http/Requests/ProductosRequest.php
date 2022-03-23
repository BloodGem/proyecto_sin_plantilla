<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
                'producto' => 'required',
                'stock_s' => 'required',
                'stock_a' => 'required',
                ];
    }
}
