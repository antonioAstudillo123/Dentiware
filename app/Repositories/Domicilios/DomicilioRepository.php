<?php

namespace App\Repositories\Domicilios;

use App\Models\Domicilios\DomicilioModel;

class DomicilioRepository{

    public function create(array $data){
        return DomicilioModel::create($data);
    }


    public function update(array $data){
        $domicilio = DomicilioModel::where('id_paciente' , '=' , $data['id_paciente'])->first();

        $domicilio->calle = $data['calle'];
        $domicilio->numero = $data['numero'];
        $domicilio->colonia = $data['colonia'];
        $domicilio->ciudad = $data['ciudad'];
        $domicilio->estado = $data['estado'];
        $domicilio->codigo_postal = $data['codigo_postal'];
        $domicilio->pais = $data['pais'];
        $domicilio->referencia = $data['referencia'];

        return $domicilio->save();

    }


}
