<div>
    <div>
        <div x-cloak class="container">
            <div class="card">
                <div class="card-header">
                    Agregar dentista al sistema
                    <button x-on:click="resetDom" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="card-body">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Información general del dentista
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body P-5">
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="nombre">Nombre</label>
                                                <input wire:model="nombre" type="text" class="form-control" id="nombre"  placeholder="Ingresa el nombre del dentista">
                                                <div>@error('nombre') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="apellidoPaterno">Apellido paterno</label>
                                                <input wire:model="apellidoPaterno" type="text" class="form-control" id="apellidoPaterno"  placeholder="Ingresa el apellido paterno del dentista">
                                                <div>@error('apellidoPaterno') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="apellidoMaterno">Apellido materno</label>
                                                <input wire:model="apellidoMaterno" type="text" class="form-control" id="apellidoMaterno"  placeholder="Ingresa el apellido materno del dentista">
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
                                                <input wire:model="telefono" type="number" class="form-control" id="telefono" placeholder="Ingresa el teléfono  del dentista">
                                                <div>@error('telefono') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input wire:model="correo" type="email" class="form-control" id="email"  placeholder="Ingresa el correo electrónico del dentista">
                                                <div>@error('correo') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="rfc">RFC</label>
                                                <input wire:model="rfc" type="text" class="form-control" id="rfc"  placeholder="Ingresa el RFC del dentista">
                                                <div>@error('rfc') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="email">NSS</label>
                                                <input wire:model="nss" type="text" class="form-control" id="email"  placeholder="Ingresa el NSS del dentista">
                                                <div>@error('nss') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="curp">CURP</label>
                                                <input wire:model="curp" type="text" class="form-control" id="curp"  placeholder="Ingresa el CURP del dentista">
                                                <div>@error('curp') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label for="genero">Especialidad</label>
                                                <select wire:model="especialidad" class="form-control" id="genero" aria-label="">
                                                    <option disabled value="" selected>-- Elige una opción --</option>
                                                    <option value="Odontologo">Odontologo</option>
                                                    <option value="Periodoncista">Periodoncista</option>
                                                    <option value="Endodoncista">Endodoncista</option>
                                                    <option value="Cirujano Maxilofacial">Cirujano Maxilofacial</option>
                                                    <option value="Odontopediatra">Odontopediatra</option>
                                                    <option value="Prostodoncista">Prostodoncista</option>
                                                    <option value="Implantologo">Implantologo</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                                <div>@error('especialidad') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="fechaIngreso">Fecha de ingreso</label>
                                                <input wire:model="fechaIngreso" type="date" class="form-control" id="fechaIngreso">
                                                <div>@error('fechaIngreso') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="mb-3">
                                                <label for="notas" class="form-label">Notas</label>
                                                <textarea wire:model="notas" class="form-control" style="resize: none;" id="notas" rows="3" placeholder="Ingresa notas adicionales sobre este dentista"></textarea>
                                                <div>@error('notas') <small id="nombreHelp" class="form-text text-danger">{{ $message }}.</small>  @enderror</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
                <div class="card-footer">
                    <button type="submit"  wire:click="create" class="btn btn-primary">Registrar dentista</button>
                </div>
            </div>
        </div>
    </div>

</div>
