<?php

namespace App\Models\Domicilios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
