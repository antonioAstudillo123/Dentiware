<?php

namespace App\Livewire\Pacientes;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Pacientes\PacienteModel;
use App\Services\Pacientes\PacienteService;


class DetallePaciente extends Component
{
    //servicio
    private $service;

    //datos generales
    public $nombreCompleto;
    public $fechaNacimiento;
    public $genero;
    public $telefono;
    public $correo;
    public $notas;

    //Datos domicilio
    public $calle;
    public $numero;
    public $colonia;
    public $ciudad;
    public $estado;
    public $codigoPostal;
    public $pais;
    public $referencia;


    public function boot(PacienteService $service){
        $this->service = $service;
    }


    #[On('setIdPaciente')]
    public function setIdPaciente($id)
    {
        $this->setDataPaciente($this->service->getDetailsPacient($id));
    }


    /**
     * Con este método vamos a setear los atributos del paciente
     */

    public function setDataPaciente(?PacienteModel $model)
    {
        if(is_null($model))
        {
            $this->nombreCompleto = 'N/D';
            $this->fechaNacimiento ='N/D';
            $this->genero = 'N/D';
            $this->telefono = 'N/D';
            $this->correo = 'N/D';
            $this->notas = 'N/D';
            $this->calle =  'N/D';
            $this->numero = 'N/D';
            $this->colonia =  'N/D';
            $this->ciudad =  'N/D';
            $this->estado =  'N/D';
            $this->pais =  'N/D';
            $this->codigoPostal =  'N/D';
            $this->referencia = 'N/D';
        }
        else
        {
            $this->nombreCompleto = $model->nombre . ' ' .  $model->apellido_paterno  . ' ' . $model->apellido_materno;
            $this->fechaNacimiento = $model->fecha_nacimiento;
            $this->genero = $model->genero;
            $this->telefono = $model->telefono;
            $this->correo = $model->correo;
            $this->notas = $model->notas;
            $this->calle = $model->domicilio->calle ?? 'N/D';
            $this->numero = $model->domicilio->numero ?? 'N/D';
            $this->colonia = $model->domicilio->colonia ?? 'N/D';
            $this->ciudad = $model->domicilio->ciudad ?? 'N/D';
            $this->estado = $model->domicilio->estado ?? 'N/D';
            $this->pais = $model->domicilio->pais ?? 'N/D';
            $this->codigoPostal = $model->domicilio->codigo_postal ?? 'N/D';
            $this->referencia = $model->domicilio->referencia ?? 'N/D';
        }
    }


    public function render()
    {
        return view('livewire.pacientes.detalle-paciente');
    }
}
