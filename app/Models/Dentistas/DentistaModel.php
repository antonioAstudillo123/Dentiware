<?php

namespace App\Models\Dentistas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DentistaModel extends Model
{
    use HasFactory;

    protected $table = "dentistas";


    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'correo',
        'notas',
        'rfc' ,
        'nss' ,
        'curp',
        'especialidad',
        'fecha_ingreso'
    ];
}
