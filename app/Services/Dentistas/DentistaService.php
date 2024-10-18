<?php

namespace App\Services\Dentistas;

use App\Repositories\Dentistas\DentistaRepository;


class DentistaService{
    private $repository;

    public function __construct(DentistaRepository $repository)
    {
        $this->repository = $repository;
    }

    //Obtenemos todos los dentistas del sistema
    public function all(){
        return $this->repository->all();
    }


    //Creamos un dentista en el sistema

    public function create(array $data){
        return $this->repository->create($data);
    }




}
