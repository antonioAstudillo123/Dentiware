<?php

namespace App\Repositories\Pacientes;

use App\Models\Pacientes\PacienteModel;

class PacienteRepository{

    public function all(){
        return PacienteModel::query();
    }


    public function create(array $data){
        return PacienteModel::create($data);
    }
}
