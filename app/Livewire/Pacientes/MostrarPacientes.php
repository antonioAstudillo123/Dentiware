<?php

namespace App\Livewire\Pacientes;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use App\Services\Pacientes\PacienteService;

class MostrarPacientes extends Component
{
    use WithPagination;
    private $service;

    public $search = '';

    public function boot(PacienteService $service){
        $this->service = $service;
    }

    #[On('paciente-refresh-table')]
    #[On('paciente-filtre-table')]
    #[Computed]
    public function pacientes()
    {
        if($this->search !== ''){
            return $this->service->searchPaciente($this->search)->paginate(10);
        }

        return $this->service->all()->paginate(10);
    }


    #[On('paciente-filtre-table')]
    public function prueba($search){
        $this->search = $search;
    }

    public function render()
    {
        return view('livewire.pacientes.mostrar-pacientes');
    }
}
