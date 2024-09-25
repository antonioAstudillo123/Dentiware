<div>
    <div x-cloak class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Información detalle del paciente</h4>
                    <button x-on:click="resetVistaPacientes()" type="button" class="btn-close"></button>
                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Datos generales</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-sort-alpha-up-alt mr-1"></i>  Nombre completo </strong>

                                    <p class="text-muted" >
                                        {{ $nombreCompleto }}
                                    </p>

                                    <hr>

                                    <strong><i class="far fa-calendar-alt mr-1"></i> Fecha nacimiento</strong>

                                    <p class="text-muted">{{ $fechaNacimiento }}</p>

                                    <hr>

                                    <strong><i class="fas fa-phone-square-alt mr-1"></i> Teléfono</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">{{ $telefono }}</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-envelope-open mr-1"></i> Correo</strong>

                                    <p class="text-muted">{{ $correo }}</p>


                                    <hr>

                                    <strong><i class="fas fa-genderless mr-1"></i> Género</strong>

                                    <p class="text-muted">{{ $genero }}</p>


                                    <hr>

                                    <strong><i class="far fa-comment-alt mr-1"></i> Notas</strong>

                                    <p class="text-muted">{{ $notas }}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-12 col-lg-12">
                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Dirección</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-street-view mr-1"></i> Calle</strong>

                                    <p class="text-muted">
                                        {{ $calle }}
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-sort-numeric-up-alt mr-1"></i> Número</strong>

                                    <p class="text-muted">{{ $numero }}</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Colonia </strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">{{ $colonia }}</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Ciudad</strong>

                                    <p class="text-muted">{{ $ciudad }}</p>


                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Estado </strong>

                                    <p class="text-muted">{{ $estado }}</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Código postal</strong>

                                    <p class="text-muted">{{ $codigoPostal }}</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> País</strong>

                                    <p class="text-muted">{{ $pais }}</p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Referencia</strong>

                                    <p class="text-muted">{{ $referencia }}</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                {{-- cierra row de cards --}}
            </div>

            <div class="card-body">
                <button x-on:click="resetVistaPacientes()" type="button" class="btn btn-primary btn-lg btn-block hover-overlay">Cerrar</button>
            </div>
        </div>
    </div>
</div>
