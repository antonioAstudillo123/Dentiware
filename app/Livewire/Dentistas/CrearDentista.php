<?php

namespace App\Livewire\Dentistas;

use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use App\Services\Dentistas\DentistaService;


class CrearDentista extends Component
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

    private $service;


    public function boot(DentistaService $service){
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.dentistas.crear-dentista');
    }



    public function create(){

        $this->validate();

        try{
            $this->service->create($this->formatDataDentista());
            $this->dispatch('dentista-refresh-table');
            $this->dispatch('dentista-created');
            $this->resetPropriedades();
        }catch(Exception $e){
           $this->dispatch('error-request' , ['message' => 'No pudimos registrar al dentista, error en el servidor.' . $e->getMessage()]);
        }

    }




        /**
     * Formateamos la data de los atributos generales para poder enviarlos a la clase servicio correspondiente
     *
     * @return void
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
            'nss' => $this->nss,
            'curp' => $this->curp,
            'rfc' => $this->rfc,
            'fecha_ingreso' => $this->fechaIngreso,
        ];
    }



        /**
     * Resetamos todos los atributos de la clase, para no guardar ningun estado una vez realizada una solicitud con éxito
     *
     * @return void
     */
    private function resetPropriedades(){
        $this->reset(
            ['nombre' ,
            'apellidoPaterno' ,
            'apellidoMaterno' ,
            'fechaNacimiento' ,
            'genero' ,
            'telefono' ,
            'correo' ,
            'notas',
            'rfc',
            'nss',
            'curp',
            'fechaIngreso',
            'especialidad',
        ]);
    }
}
