<div>
    <div class="card">
        <div class="card-header">
            Listado de pacientes registrados en el sistema
        </div>

        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @if(count($this->pacientes) > 0)
                        @foreach ($this->pacientes as $paciente )
                            <tr>
                                <th scope="row">{{ $paciente->id }}</th>
                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->apellido_paterno }}</td>
                                <td>{{ $paciente->apellido_materno }}</td>
                                <td>{{ $paciente->telefono }}</td>
                                <td>{{ $paciente->correo }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button"
                                        class="btn btn-primary fas fa-clock"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="Crear cita al paciente"
                                        x-on:click="mostrarFormCreateCita()"
                                        >
                                    </button>
                                        <button wire:click="$dispatchTo('pacientes.detalle-paciente', 'setIdPaciente', { id: {{ $paciente->id }} })"
                                            x-on:click="mostrarDetallePaciente()"
                                            type="button"
                                            class="btn btn-info fas fa-eye"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar la información del paciente">
                                        </button>
                                        <button wire:click="$dispatchTo('pacientes.edit-paciente', 'setIdPacienteEdit', { id: {{ $paciente->id }} })"
                                            x-on:click="showFormEdit()"
                                            type="button"
                                            class="btn btn-warning fas fa-edit"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Editar la información del paciente">
                                        </button>
                                        <button wire:click="$dispatchTo('pacientes.eliminar-paciente', 'delete', { id: {{ $paciente->id }} })"
                                            wire:confirm="Está seguro de que desea eliminar este paciente?"
                                            type="button"
                                            class="btn btn-danger fas fa-trash-alt"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar paciente del sistema">
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="7">
                                <p>No hay pacientes que mostrar</p>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $this->pacientes->links() }}
        </div>
    </div>

</div>


