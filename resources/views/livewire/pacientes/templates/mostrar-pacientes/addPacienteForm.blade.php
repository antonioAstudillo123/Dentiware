<div x-cloak class="container">
    <div class="card">
        <div class="card-header">
            Agregar paciente al sistema
            <button x-on:click="resetVistaPacientes" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input wire:model="nombre" type="text" class="form-control" id="nombre"  placeholder="Ingresa el nombre del paciente">
                            <div>@error('nombre') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="apellidoPaterno">Apellido paterno</label>
                            <input wire:model="apellidoPaterno" type="text" class="form-control" id="apellidoPaterno"  placeholder="Ingresa el apellido paterno del paciente">
                            <div>@error('apellidoPaterno') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="apellidoMaterno">Apellido materno</label>
                            <input wire:model="apellidoMaterno" type="text" class="form-control" id="apellidoMaterno"  placeholder="Ingresa el apellido materno del paciente">
                            <div>@error('apellidoMaterno') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input wire:model="fechaNacimiento" type="date" class="form-control" id="fechaNacimiento">
                            <div>@error('fechaNacimiento') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="genero">Género</label>
                            <select wire:model="genero" class="form-control" id="genero" aria-label="">
                                <option disabled value="" selected>-- Elige una opción --</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                            <div>@error('genero') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input wire:model="telefono" type="number" class="form-control" id="telefono" placeholder="Ingresa el teléfono  del paciente">
                            <div>@error('telefono') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input wire:model="correo" type="email" class="form-control" id="email"  placeholder="Ingresa el correo electrónico del paciente">
                            <div>@error('correo') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="mb-3">
                            <label for="notas" class="form-label">Notas</label>
                            <textarea wire:model="notas" class="form-control" style="resize: none;" id="notas" rows="3" placeholder="Ingresa notas adicionales sobre este paciente"></textarea>
                            <div>@error('notas') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit"  wire:click="create" class="btn btn-primary">Registrar paciente</button>
        </div>
    </div>
</div>



