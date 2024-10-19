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

    public function delete(int $id){
        return DentistaModel::destroy($id);
    }

    public function getDentista(int $id){
        return DentistaModel::findOrFail($id);
    }


    public function update(array $data , $id){
        return DentistaModel::where('id' , $id)->update($data);
    }


}
