<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OdontologosRequest extends FormRequest
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
            'nombre_o' => 'required',
            'apellido_p_o' => 'required',
            'apellido_m_o' => 'required',
            'rfc_o' => 'required',
            'curp_o' => 'required',
            'fecha_nacimiento_o' => 'required',
            'calle_o' => 'required',
            'num_int_o' => 'required',
            'num_ext_o' => 'required',
            'colonia_o' => 'required',
            'municipio_o' => 'required',
            'cp_o' => 'required',
            'estado_o' => 'required',
            'telefono_o' => 'required',
            'celular_o' => 'required',
            'id_usuario_o' => 'required',
        ];
    }
}
