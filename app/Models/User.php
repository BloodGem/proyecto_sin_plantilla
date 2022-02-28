<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = [
        'imagen',
        'name',
        'apellido_p',
        'apellido_m',
        'fecha_nacimiento',
        'rfc',
        'curp',
        'calle',
        'num_ext',
        'num_int',
        'colonia',
        'cp',
        'municipio',
        'email',
        'rol',
        'estatus',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
