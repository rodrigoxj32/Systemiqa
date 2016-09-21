<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    //
    protected $table = 'ciclos';

    protected $fillable = [
        'codigo',
        'ciclo_academico',
        'anio_academico',
        'fecha_inicio',
        'fecha_fin',
    ];
}
