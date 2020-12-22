<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellido',
        'mail',
        'usuario'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
