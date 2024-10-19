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


    //Eliminamos un dentista del sistema
    public function delete(int $id){
        return $this->repository->delete($id);
    }

    //Obtenemos la informacion de un dentista
    public function getDentista(int $id){
        return $this->repository->getDentista($id);
    }

    //actualizamos la informacion de un dentista
    public function update(array $data , int $id){
        return $this->repository->update($data , $id);
    }




}
