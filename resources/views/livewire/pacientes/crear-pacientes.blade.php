<div>
    <div x-cloak class="container">
        <div class="card">
            <div class="card-header">
                Agregar paciente al sistema
                <button x-on:click="resetVistaPacientes" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="card-body">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Información general del paciente
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body P-5">
                            @include('livewire.pacientes.templates.dataFormPaciente')
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Datos de domicilio
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('livewire.pacientes.templates.dataFormDomicilio')
                        </div>
                      </div>
                    </div>

                  </div>

            </div>
            <div class="card-footer">
                <button type="submit"  wire:click="create" class="btn btn-primary">Registrar paciente</button>
            </div>
        </div>
    </div>
</div>
