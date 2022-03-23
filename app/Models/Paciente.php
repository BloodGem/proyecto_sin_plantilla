<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = ['nombre','apellido_p','apellido_m','rfc','curp','fecha_nacimiento','calle','num_int','num_ext','colonia','municipio','cp','estado','telefono','celular','id_usuario'];

}
