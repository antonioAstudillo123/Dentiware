<?php

namespace App\Repositories\Domicilios;

use App\Models\Domicilios\DomicilioModel;

class DomicilioRepository{

    public function create(array $data){
        return DomicilioModel::create($data);
    }


}
