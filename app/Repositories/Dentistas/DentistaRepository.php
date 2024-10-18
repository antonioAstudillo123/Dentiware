<?php

namespace App\Repositories\Dentistas;

use App\Models\Dentistas\DentistaModel;


class DentistaRepository{


    public function all(){
        return DentistaModel::query();
    }


    public function create(array $data){
        return DentistaModel::create($data);
    }


}
