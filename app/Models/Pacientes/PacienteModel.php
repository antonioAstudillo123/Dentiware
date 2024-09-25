<?php

namespace App\Models\Pacientes;

use Illuminate\Database\Eloquent\Model;
use App\Models\Domicilios\DomicilioModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    public function domicilio(){
        return $this->hasOne(DomicilioModel::class , 'id_paciente' , 'id' );
    }
}
