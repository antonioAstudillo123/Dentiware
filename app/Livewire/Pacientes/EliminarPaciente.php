<?php

namespace App\Livewire\Pacientes;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\Pacientes\PacienteService;

class EliminarPaciente extends Component
{
    private $service;



    public function render()
    {
        return view('livewire.pacientes.eliminar-paciente');
    }


    public function boot(PacienteService $service){
        $this->service = $service;
    }

    #[On('delete')]
    public function delete($id){
        $this->service->delete($id);
        $this->dispatch('paciente-refresh-table');
        $this->dispatch('paciente-delete');
    }



}
