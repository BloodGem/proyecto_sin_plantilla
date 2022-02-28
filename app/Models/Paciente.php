<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $apellido_p
 * @property $apellido_m
 * @property $rfc
 * @property $curp
 * @property $fecha_de_nacimiento
 * @property $calle
 * @property $num_int
 * @property $num_ext
 * @property $localidad
 * @property $municipio
 * @property $codigo_postal
 * @property $correo_electronico
 * @property $contraseña
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido_p' => 'required',
		'apellido_m' => 'required',
		'rfc' => 'required',
		'curp' => 'required',
		'fecha_de_nacimiento' => 'required',
		'calle' => 'required',
		'num_int' => 'required',
		'num_ext' => 'required',
		'localidad' => 'required',
		'municipio' => 'required',
		'codigo_postal' => 'required',
		'correo_electronico' => 'required',
		'contrasena' => 'required',
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido_p','apellido_m','rfc','curp','fecha_de_nacimiento','calle','num_int','num_ext','localidad','municipio','codigo_postal','correo_electronico','contrasena','estatus'];



}
