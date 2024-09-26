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


    public function getDetailsPacient($id){
       return PacienteModel::with('domicilio')->find($id);
    }


    public function delete($id){
        return PacienteModel::destroy($id);
    }


    public function update(array $data){
        $paciente = PacienteModel::find($data['id']);

        $paciente->nombre = $data['nombre'];
        $paciente->apellido_paterno = $data['apellido_paterno'];
        $paciente->apellido_materno = $data['apellido_materno'];
        $paciente->fecha_nacimiento = $data['fecha_nacimiento'];
        $paciente->genero = $data['genero'];
        $paciente->telefono = $data['telefono'];
        $paciente->correo = $data['correo'];
        $paciente->notas = $data['notas'];

        return $paciente->save();
    }


}
