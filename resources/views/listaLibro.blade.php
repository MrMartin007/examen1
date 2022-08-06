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
            {{ $libro->onEachSide(3)->links() }}

        </div>
    </div>
    </div>

@endsection

