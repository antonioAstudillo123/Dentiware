<?php

namespace App\Livewire\Pacientes;

use Exception;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Models\Pacientes\PacienteModel;
use App\Services\Pacientes\PacienteService;
use App\Services\Domicilios\DomicilioService;

class EditPaciente extends Component
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

    #[Locked]
    public $id;


    //Propieades de domicilio
    #[Validate('required', message: 'La calle del paciente es requerida')]
    public $calle;

    #[Validate('required', message: 'El número de la calle del paciente es requerido')]
    public $numero;

    #[Validate('required', message: 'La colonia del paciente es requerida')]
    public $colonia;

    #[Validate('required', message: 'La ciudad del paciente es requerida')]
    public $ciudad;

    public $estado;

    #[Validate('required', message: 'El código postal del paciente es requerido')]
    public $codigoPostal;


    #[Validate('required', message: 'El país del paciente es requerido')]
    public $pais = "";

    #[Validate('max:250', message: 'Las referencias no pueden ser mayor a 250 caracteres')]
    public $referencias;


    //servicio
    private $pacienteService;
    private $domicilioService;


    public function boot(PacienteService $pacienteService , DomicilioService $domicilioService){
        $this->pacienteService = $pacienteService;
        $this->domicilioService = $domicilioService;
    }


    public function render()
    {
        return view('livewire.pacientes.edit-paciente');
    }


    #[On('setIdPacienteEdit')]
    public function setIdPaciente($id)
    {
        $this->setDataPaciente($this->pacienteService->getDetailsPacient($id));
    }


        /**
     * Con este método vamos a setear los atributos del paciente
     */

     public function setDataPaciente(?PacienteModel $model)
     {
         if(is_null($model))
         {
             $this->nombre = 'N/D';
             $this->apellidoPaterno = 'N/D';
             $this->apellidoMaterno = 'N/D';
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
             $this->referencias = 'N/D';
         }
         else
         {
             $this->id = $model->id;
             $this->nombre = $model->nombre;
             $this->apellidoPaterno  = $model->apellido_paterno;
             $this->apellidoMaterno =  $model->apellido_materno;
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
             $this->referencias = $model->domicilio->referencia ?? 'N/D';
         }
     }


    public function update(){
        $this->validate();

        try{
            DB::beginTransaction();
                $this->pacienteService->update($this->formatDataPaciente());
                $this->domicilioService->update($this->formDataDomicilio());
            DB::commit();

            $this->resetPropriedades();
            $this->dispatch('paciente-refresh-table');
            $this->dispatch('paciente-updated');
        }catch(Exception $e){
            DB::rollBack();
            $this->dispatch('error-request' , ['message' => 'No pudimos registrar al paciente, error en el servidor. ']);
        }
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
            'calle',
            'numero',
            'colonia',
            'ciudad',
            'estado',
            'codigoPostal',
            'pais',
            'referencias',
        ]);
    }


      /**
     * Formateamos la data de los atributos generales para poder enviarlos a la clase servicio correspondiente
     *
     * @return void
     */
    private function formatDataPaciente(): array{
        return [
            'nombre' => Str::title($this->nombre),
            'apellido_paterno' => Str::ucfirst(Str::lower($this->apellidoPaterno)),
            'apellido_materno' => Str::ucfirst(Str::lower($this->apellidoMaterno)),
            'fecha_nacimiento' => $this->fechaNacimiento,
            'genero' => $this->genero,
            'telefono' => $this->telefono,
            'correo' => Str::lower($this->correo),
            'notas' => $this->notas,
            'id' => $this->id,
        ];
    }



     /**
     * Formateamos la data de los atributos del domicilio, para poder enviarlos a la clase servicio correspondiente
     *
     * recibimos el id del paciente
     */

     private function formDataDomicilio(){
        return [
            'id_paciente' => $this->id,
            'calle' => Str::lower($this->calle),
            'numero' => Str::lower($this->numero),
            'colonia' => Str::lower($this->colonia),
            'ciudad' => Str::lower($this->ciudad),
            'estado' => Str::lower($this->estado),
            'codigo_postal' => Str::lower($this->codigoPostal),
            'pais' => Str::lower($this->pais),
            'referencia' => Str::lower($this->referencias),

        ];
     }
}
