<div>
    <div>
        <div class="card">
            <div class="card-header">
                Listado de dentistas registrados en el sistema
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @if(count($this->dentistas) > 0)
                            @foreach ($this->dentistas as $dentista )
                                <tr>
                                    <th scope="row">{{ $dentista->id }}</th>
                                    <td>{{ $dentista->nombre }}</td>
                                    <td>{{ $dentista->apellido_paterno }}</td>
                                    <td>{{ $dentista->apellido_materno }}</td>
                                    <td>{{ $dentista->especialidad }}</td>
                                    <td>{{ $dentista->telefono }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button wire:click=""
                                                x-on:click=""
                                                type="button"
                                                class="btn btn-info fas fa-eye"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Visualizar la información del dentista">
                                            </button>
                                            <button wire:click="$dispatchTo('dentistas.editar-dentista', 'setDataDentista', { id: {{ $dentista->id }} })"
                                                x-on:click="showFormEditDentista"
                                                type="button"
                                                class="btn btn-warning fas fa-edit"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Editar la información del dentista">
                                            </button>
                                            <button wire:click="$dispatchTo('dentistas.eliminar-dentista', 'delete', { id: {{ $dentista->id }} })"
                                                wire:confirm="Está seguro de que desea eliminar este dentista?"
                                                type="button"
                                                class="btn btn-danger fas fa-trash-alt"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar dentista del sistema">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="text-center">
                                <td colspan="7">
                                    <p>No hay dentistas que mostrar</p>
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $this->dentistas->links() }}
            </div>
        </div>

    </div>



</div>
