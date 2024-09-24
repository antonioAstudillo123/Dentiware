<div>

    <div x-data="main" class="container-fluid p-3">
        <div x-show="tablaPacientes">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <button x-on:click="agregarPaciente" class="btn btn-success">Agregar paciente</button>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <input type="text" placeholder="Buscar paciente" class="form-control">
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <livewire:pacientes.mostrar-pacientes />
        </div>

        <div x-show="addFormPaciente">
            <div x-on:paciente-created="pacienteCreated">
                <livewire:pacientes.crear-pacientes />
            </div>
        </div>

        <div x-show="showDetallePaciente">
            <livewire:pacientes.detalle-paciente />
        </div>


    </div>

</div>


@script
    <script>
            Alpine.data('main', () => ({
                tablaPacientes:true,
                addFormPaciente:false,
                showDetallePaciente:false,

                mostrarTablaPaciente(){
                    // 1- Mostrar la tabla pacientes
                    this.tablaPacientes = true;
                },
                esconderFormAddPaciente(){
                    //Esconder el form de agregar paciente
                    this.addFormPaciente = false;
                },
                esconderTablaPaciente(){
                    //Esconder la tabla de pacientes
                    this.tablaPacientes = false;
                },
                mostrarFormAddPaciente(){
                    //Mostramos el form de agregar paciente
                    this.addFormPaciente = true;
                },
                agregarPaciente(){
                this.esconderTablaPaciente();
                this.mostrarFormAddPaciente();
                },
                resetVistaPacientes(){
                    //Reseteamos la vista de pacientes a su estado inicial
                    this.mostrarTablaPaciente();
                    this.esconderFormAddPaciente();
                },
                mostrarDetallePaciente(){
                    this.showDetallePaciente = true;
                    this.esconderTablaPaciente();
                },
                pacienteCreated(){
                    this.toast('success' , '¡Paciente registrado correctamente!')
                    this.resetVistaPacientes();
                },
                validarDataAddPaciente(){

                },
                toast(icon , title){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });

                    Toast.fire({
                    icon: icon,
                    title: title
                    });
                }
            }));



            /*
                Evento global para todas las solicitudes que fallen en algun componente
            */
            $wire.on('error-request', (event) => {
                Swal.fire({
                    title: "Ups!",
                    text: event[0].message,
                    icon: "error"
                });
            });

    </script>

@endscript
