<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    protected $fillable = ['nombre_o','apellido_p_o','apellido_m_o','rfc_o','curp_o','fecha_nacimiento_o','calle_o','num_int_o','num_ext_o','colonia_o','municipio_o','cp_o','estado_o','telefono_o','celular_o','id_usuario_o'];

}
