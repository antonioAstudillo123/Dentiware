<?php

namespace App\Services\Domicilios;

use App\Repositories\Domicilios\DomicilioRepository;

class DomicilioService{
    private $repository;

    public function __construct(DomicilioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data){
        $this->repository->create($data);
    }


}
