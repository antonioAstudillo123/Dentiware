<?php

namespace App\Livewire\Dentistas;

use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use App\Services\Dentistas\DentistaService;

class EditarDentista extends Component
{
    #[Validate('required', message: 'El nombre del dentista es requerido')]
    #[Validate('min:3', message: 'El nombre del dentista debe ser mayor a 3 letras')]
    public $nombre;

    #[Validate('required', message: 'El apellido paterno del dentista es requerido')]
    #[Validate('min:3', message: 'El apellido paterno del dentista debe ser mayor a 3 letras')]
    public $apellidoPaterno;

    #[Validate('required', message: 'El apellido materno del dentista es requerido')]
    #[Validate('min:3', message: 'El apellido materno del dentista debe ser mayor a 3 letras')]
    public $apellidoMaterno;

    #[Validate('required', message: 'La fecha de nacimiento del dentista es requerida')]
    public $fechaNacimiento;

    #[Validate('required', message: 'El genero del dentista es requerido')]
    public $genero = "";

    #[Validate('required', message: 'El número de teléfono del dentista es requerido')]
    #[Validate('alpha_num:ascii', message: 'El teléfono debe ser un valor númerico')]
    public $telefono;

    #[Validate('required', message: 'El correo del dentista es requerido')]
    #[Validate('email', message: 'El correo del dentista debe ser válido')]
    public $correo;

    #[Validate('max:250', message: 'Las notas no pueden ser mayor a 250 caracteres')]
    public $notas;

    #[Validate('required', message: 'El RFC es requerido')]
    public $rfc;

    #[Validate('required', message: 'El NSS es requerido')]
    public $nss;

    #[Validate('required', message: 'La curp es requerida')]
    public $curp;

    #[Validate('required', message: 'La especialidad es requerida')]
    public $especialidad ="";


    #[Validate('required', message: 'La fecha de ingreso es requerida')]
    public $fechaIngreso;

    public $id;

    private $service;

    public function boot(DentistaService $service){
        $this->service = $service;
    }


    /*
        Este método lo usamos para setear los atributos de esta clase al momento de que presionan sobre
        editar dentista.

        Tenemos que asignarle un evento, para que se pueda emitir desde la plantilla blade
    */
    #[On('setDataDentista')]
    public function setDataDentista($id){
        $dentista = $this->service->getDentista($id);

        if(!is_null($dentista))
        {
            $this->id = $dentista->id;
            $this->nombre = $dentista->nombre;
            $this->apellidoPaterno  = $dentista->apellido_paterno;
            $this->apellidoMaterno =  $dentista->apellido_materno;
            $this->fechaNacimiento = $dentista->fecha_nacimiento;
            $this->genero = $dentista->genero;
            $this->telefono = $dentista->telefono;
            $this->correo = $dentista->correo;
            $this->notas = $dentista->notas;
            $this->rfc = $dentista->rfc;
            $this->curp = $dentista->curp;
            $this->nss = $dentista->nss;
            $this->especialidad = $dentista->especialidad;
            $this->fechaIngreso = $dentista->fecha_ingreso;

        }
    }



    public function update(){
        $this->validate();

        try{
            $this->service->update($this->formatDataDentista() , $this->id);
            $this->dispatch('dentista-refresh-table');
            $this->dispatch('dentista-updated');
        }catch(Exception $e){
            $this->dispatch('error-request' , ['message' => 'No pudimos actualizar al dentista, error en el servidor. ']);
        }
    }


    /**
     * Formateamos la informacion del dentista, para poder enviarla al momento de actualizar
     *
     * @return array
     */
    private function formatDataDentista(): array{
        return [
            'nombre' => Str::title($this->nombre),
            'apellido_paterno' => Str::ucfirst(Str::lower($this->apellidoPaterno)),
            'apellido_materno' => Str::ucfirst(Str::lower($this->apellidoMaterno)),
            'fecha_nacimiento' => $this->fechaNacimiento,
            'genero' => $this->genero,
            'telefono' => $this->telefono,
            'correo' => Str::lower($this->correo),
            'notas' => $this->notas,
            'especialidad' => $this->especialidad,
            'rfc' => $this->rfc,
            'curp' => $this->curp,
            'nss' => $this->nss,
            'fecha_ingreso' => $this->fechaIngreso
        ];
    }




    public function render()
    {
        return view('livewire.dentistas.editar-dentista');
    }
}
