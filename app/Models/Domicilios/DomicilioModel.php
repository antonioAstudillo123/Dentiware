<?php

namespace App\Models\Domicilios;

use App\Models\Pacientes\PacienteModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DomicilioModel extends Model
{
    use HasFactory;

    protected $table = "direcciones";


    protected $fillable = [
        'calle',
        'numero',
        'colonia',
        'ciudad',
        'estado',
        'codigo_postal',
        'pais',
        'referencia',
        'id_paciente'
    ];


    public function paciente(){
        return $this->belongsTo(PacienteModel::class ,'id_paciente' , 'id' );
    }

}
