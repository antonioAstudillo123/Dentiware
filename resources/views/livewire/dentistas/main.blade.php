<div>
    <div x-data="main"  class="container-fluid p-3">
        <div  x-show="tableDentistas">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <button x-on:click="agregarDentista" class="btn btn-success">Agregar dentistas</button>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded" placeholder="Buscar dentista..." aria-label="Search" aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                      <i class="fas fa-search"></i>
                                    </span>
                                </div>
                            </ol>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <livewire:dentistas.mostrar-dentistas />
        </div>



        <div x-show="showFormCreateDentista">
            <div x-on:dentista-created="dentistaCreated">
                <livewire:dentistas.crear-dentista />
            </div>
        </div>


        <div x-show="formEditDentista">
            <div x-on:dentista-updated="dentistaUpdated">
                <livewire:dentistas.editar-dentista />
            </div>
        </div>

        <div x-on:dentista-delete="dentistDeleted">
            <livewire:dentistas.eliminar-dentista />
        </div>




    </div>
</div>

@script
    <script>
            Alpine.data('main', () => ({
                showFormCreateDentista:false,
                tableDentistas:true,
                formEditDentista:false,
                agregarDentista(){
                    this.showFormCreateDentista = true;
                    this.hideTableDentistas();
                },
                hideFormCreateDentista(){
                    this.showFormCreateDentista = false;
                },
                hideTableDentistas(){
                    this.tableDentistas = false;
                },
                showTableDentistas(){
                    this.tableDentistas = true;
                },
                showFormEditDentista(){
                    this.hideTableDentistas();
                    this.formEditDentista = true;
                },
                hideFormEditDentista(){
                    this.formEditDentista = false;
                },
                resetDom(){
                    this.showTableDentistas();
                    this.hideFormCreateDentista();
                    this.hideFormEditDentista();
                },
                dentistaCreated(){
                    this.resetDom();
                    this.toast('success' , 'El dentista fue registrado correctamente!');
                },
                dentistaUpdated(){
                    this.resetDom();
                    this.toast('success' , 'El dentista fue actualizado correctamente!');
                },
                dentistDeleted(){
                    this.toast('success' , 'El dentista fue eliminado correctamente!');
                },
                toast(icon , title){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 2000,
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
                console.log(event);
                // Swal.fire({
                //     title: "Ups!",
                //     text: event[0].message,
                //     icon: "error"
                // });
            });

    </script>

@endscript
