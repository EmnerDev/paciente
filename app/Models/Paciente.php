<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'temperatura',
        'f_cardiaca',
        'peso',
        'talla',
        'p_arterial',
        'saturacion',
        'p_arterial',
        's_corporal',
        'imc',
        'r_enfermedad',
        'clasificacion_imc'
    ];
}
