<?php

namespace App\Services\Domicilios;

use App\Repositories\Domicilios\DomicilioRepository;

class DomicilioService{
    private $repository;

    public function __construct(DomicilioRepository $repository)
    {
        $this->repository = $repository;
    }



    /**
     * Al momento de crear un domicilio asociado a un paciente, el array que nos envie el cliente
     * debe de venir el id del paciente del domicilio que queremos registrar
     */
    public function create(array $data){
        return $this->repository->create($data);
    }


    /**
     * Actualizamos la informacion de un domicilio para un paciente
     */

    public function update(array $data){
        return $this->repository->update($data);
    }


}
