<?php

namespace App\Livewire\Dentistas;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Services\Dentistas\DentistaService;

class EliminarDentista extends Component
{
    private $service;

    public function boot(DentistaService $service){
        $this->service = $service;
    }



    public function render()
    {
        return view('livewire.dentistas.eliminar-dentista');
    }


    /**
     * A este método se le pone un evento delete, ya que desde la vista blade se utiliza el dispatchTo hacia este componente para poder
     * poner en escucha  cada vez que se requiera eliminar un dentista del sistema.
     */

    #[On('delete')]
    public function delete($id){
        $this->service->delete($id);
        $this->dispatch('dentista-refresh-table');
        $this->dispatch('dentista-delete');
    }
}
