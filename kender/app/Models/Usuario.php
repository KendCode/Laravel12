<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'estado',
        'rol',
        'genero',
        'celular',
        'email',
        'hobbies',
        'password'
    ];
    
}
