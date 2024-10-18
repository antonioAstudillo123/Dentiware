<?php

namespace App\Livewire\Dentistas;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use App\Services\Dentistas\DentistaService;

class MostrarDentistas extends Component
{
    use WithPagination;
    private $service;

    public function boot(DentistaService $service){
        $this->service = $service;
    }


    /**
     * Creamos una propiedad computada para poder ir controlando la tabla con los dentistas registrados en el sistema
     */
    #[On('dentista-refresh-table')]
     #[Computed]
     public function dentistas()
     {
         return $this->service->all()->paginate(15);
     }


    public function render()
    {
        return view('livewire.dentistas.mostrar-dentistas');
    }
}
