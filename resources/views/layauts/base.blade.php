<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD_L^8-@yield('title')</title> <!--nombre de la pagina-->

        <!--Estilos de Boopstrap y CSS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!--Se agrega Boostrap a traves de el CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!--Para agragar el icono de basurero-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!--Para iconoz-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body style="background-color: #E8F8F5;">
<nav class="navbar navbar-expand-lg navbar-light bg-p-3 mb-2 text-white" style="background-color: #002752;">
    <!--Logo de navbar-->
    <a class="navbar-brand" href="{{url('/menu')}}"><img src="https://umg.edu.gt/assets/umg.png" alt="" width="80" class="rounded-circle"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav nav-pills ml-auto flex justify-end">
    <li class="nav-item">
        <a class="btn btn-outline-primary offset-1 " id="pills-home-tab"  href="{{url('/menuProfer')}}" role="tab" aria-controls="pills-home" aria-selected="true">Profesor</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-primary offset-3 " id="pills-profile-tab"  href="{{url('/menuInscribir')}}" role="tab" aria-controls="pills-profile" aria-selected="false">Estudiante</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-primary offset-4 " id="pills-contact-tab" href="{{url('/menuNota')}}"  role="tab" aria-controls="pills-contact" aria-selected="false">Calificaciones</a>
    </li>
        <li class="nav-item">
            <a class="btn btn-outline-primary offset-9 " id="pills-contact-tab" href="{{url('/menuCurso')}}"  role="tab" aria-controls="pills-contact" aria-selected="false">Cursos</a>
        </li>
    </ul>

    </ul>
</nav>

<div class="container">
    @yield('content') <!--para navbar-->
</div>

<script src="{{asset('js/app.js')}}"></script>
@yield('js')<!--Ayuda con mostrar el mensaje de error-->

</body>
</html>
