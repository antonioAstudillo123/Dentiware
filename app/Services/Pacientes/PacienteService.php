<?php

namespace App\Services\Pacientes;

use App\Repositories\Pacientes\PacienteRepository;

class PacienteService{
    private $repository;


    public function __construct(PacienteRepository $repository)
    {
       $this->repository = $repository;
    }


    //Obtenemos todos los pacientes registrados en el sistema
    public function all(){
        return $this->repository->all();
    }


    //Obtenemos todos los pacientes que cumplan o coincidan con el valor ingresado por el usuario dentro del input de busqueda en la tabla pacientes
    public function searchPaciente(string $search){
        return $this->all()
        ->where('nombre' , 'LIKE' , '%'. $search . '%')
        ->orWhere('apellido_paterno' , 'LIKE' , '%'. $search . '%' )
        ->orWhere('apellido_materno' , 'LIKE' , '%'. $search . '%' )
        ->orWhere('telefono' , 'LIKE' , '%'. $search . '%' )
        ->orWhere('correo' , 'LIKE' , '%'. $search . '%' );
    }


    //Creamos un paciente en el sistema
    public function create(array $data){
        return $this->repository->create($data);
    }


    //Obtenemos la información de un Paciente junto con la información de su domicilio para de esa manera obtener el detalle de este paciente
    public function getDetailsPacient($id){
        return $this->repository->getDetailsPacient($id);
    }


    //Eliminamos un paciente del sistema
    public function delete($id){
        return $this->repository->delete($id);
    }


    //Actualizamos la información de un paciente
    //El array que nos envíen debe de venir el id del paciente que queremos actualizar
    public function update(array $data){
        return $this->repository->update($data);
    }


}
