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

    public function boot(PacienteService $service){
        $this->service = $service;
    }

    #[On('paciente-created')]
    #[Computed]
    public function pacientes()
    {
        return $this->service->all()->paginate(10);
    }

    public function render()
    {
        return view('livewire.pacientes.mostrar-pacientes');
    }
}
