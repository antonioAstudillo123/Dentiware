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


    //Creamos un paciente en el sistema
    public function create(array $data){
        return $this->repository->create($data);
    }
}
