<?php

namespace App\Models\Pacientes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteModel extends Model
{
    use HasFactory;
    protected $table = "pacientes";

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'correo',
        'notas'
    ];
}
