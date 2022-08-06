@extends('layauts.base') <!--para heredar de base-->
@section('title', 'Lista') <!--nombre pagina, nombre de seccion-->
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="cold-md-11">
                <h1 class="text-center mb-5">
                    <i class="fas fa-user-graduate">Libros</i>
                </h1>
                <a class="btn btn-primary  mb-1" href="{{url('/formLibro')}}">
                    <i class="fas fa-user-plus"> AGREGAR</i>
                </a>
                <a class="btn btn-primary  mb-1" href="{{url('/')}}" role="button">
                    <i  class="fas fa-arrow-left"> Regresar</i>
                </a>

                <table class="table table-striped table-hover">
                    <thead>
                    <tr>

                        <th>Nombre Libro</th>
                        <th>Fecha Apertura</th>
                        <th>Nombre Autor</th>
                        <th>Numero Serie</th>
                        <th>Nombre de Casa Editorial</th>

                    </tr>
                    </thead>

                    <tbody>

                        @foreach($libro as $libros)
                            <tr>


                                <td>{{$libros->nombre}}</td>
                                <td>{{$libros->fecha_apertura}}</td>
                                <td>{{$libros->nombre_autor}}</td>
                                <td>{{$libros->numro_serie}}</td>
                                <td>{{$libros->nombre_casa}}</td>



                                <td>


                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

            <!--paginas-->
            {{ $nota->onEachSide(3)->links() }}

        </div>
    </div>
    </div>

@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Mensaje de Modificacion-->
    @if(session('Modificado')=='Modificado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'LIb Modificado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    <!--Mensaje de Guardado-->
    @if(session('notaGuardado')=='Guardado')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Calificacion Guardado',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif


    <!--Mensaje de Eliminado-->
    @if(session('notaEliminado')=='Eliminado')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Se elimino la Calificacion exitosamente',
                'success'
            )
        </script>
    @endif
    <script>
        $('.Alert-eliminar').submit(function (e){
            e.preventDefault();

            Swal.fire({
                title: '¿Esta seguro que desea eliminar la Calificacion?',
                text: "Si presiona si se eliminara definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

    @if(session('alerta')=='ok')

        <script>
            Swal.fire({
                title: 'No se puede eliminar la Calificacion',
                text:'Esta Calificacion ya esta ligado a los Estudiantes, por ende es imposible eliminarlo',
                width: 600,
                padding: '3em',
                color: '#050404',
                background: '#fff url(/images/trees.png)',
                backdrop: `#F82D23`
            })
        </script>
    @endif
@endsection
