<?php

namespace App\Livewire\Pacientes;

use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use App\Services\Pacientes\PacienteService;

class CrearPacientes extends Component
{
    #[Validate('required', message: 'El nombre del paciente es requerido')]
    #[Validate('min:3', message: 'El nombre del paciente debe ser mayor a 3 letras')]
    public $nombre;

    #[Validate('required', message: 'El apellido paterno del paciente es requerido')]
    #[Validate('min:3', message: 'El apellido paterno del paciente debe ser mayor a 3 letras')]
    public $apellidoPaterno;

    #[Validate('required', message: 'El apellido materno del paciente es requerido')]
    #[Validate('min:3', message: 'El apellido materno del paciente debe ser mayor a 3 letras')]
    public $apellidoMaterno;

    #[Validate('required', message: 'La fecha de nacimiento del paciente es requerida')]
    public $fechaNacimiento;

    #[Validate('required', message: 'El genero del paciente es requerido')]
    public $genero = "";

    #[Validate('required', message: 'El número de teléfono del paciente es requerido')]
    #[Validate('alpha_num:ascii', message: 'El teléfono debe ser un valor númerico')]
    public $telefono;

    #[Validate('required', message: 'El correo del paciente es requerido')]
    #[Validate('email', message: 'El correo del paciente debe ser válido')]
    public $correo;

    #[Validate('max:250', message: 'Las notas no pueden ser mayor a 250 caracteres')]
    public $notas;


    private $service;


    public function boot(PacienteService $service){
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.pacientes.crear-pacientes');
    }


    public function create(){
        $this->validate();

        try{
            $this->service->create($this->formatData());
            $this->resetPropriedades();
            $this->dispatch('paciente-created');
        }catch(Exception $e){
            $this->dispatch('error-request' , ['message' => 'No pudimos registrar al paciente, error en el servidor.']);
        }

    }

    /**
     * Formateamos la data de los atributos para poder enviarlos a la clase servicio
     *
     * @return void
     */
    private function formatData(): array{
        return [
            'nombre' => Str::title($this->nombre),
            'apellido_paterno' => Str::ucfirst(Str::lower($this->apellidoPaterno)),
            'apellido_materno' => Str::ucfirst(Str::lower($this->apellidoMaterno)),
            'fecha_nacimiento' => $this->fechaNacimiento,
            'genero' => $this->genero,
            'telefono' => $this->telefono,
            'correo' => Str::lower($this->correo),
            'notas' => $this->notas,
        ];
    }

    /**
     * Resetamos todos los atributos de la clase, para no guardar ningun estado una vez realizada una solicitud con éxito
     *
     * @return void
     */
    private function resetPropriedades(){
        $this->reset(['nombre' , 'apellidoPaterno' , 'apellidoMaterno' , 'fechaNacimiento' , 'genero' , 'telefono' , 'correo' , 'notas']);
    }

}
