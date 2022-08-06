@extends('layauts.basee') <!--para heredar de base-->
@section('content')
    <style>
        .j{
            color: white;
            text-shadow: 1px 2px 2px black, 0 0 25px blue, 0 0 15px blue;
            text-align: center;
            margin: 15px 10px;

        }
        .c{
            color: white;
            text-shadow: 1px 2px 2px black, 0 0 25px blue, 0 0 15px blue;
            text-align: center;
            margin: 50px 10px;

        }
        .jj{
            color: white;
            text-shadow: 1px 2px 2px black, 0 0 25px blue, 0 0 15px blue;
            text-align: center;
            margin: 60px 10px;
        }
        .jjj{
            color: white;
            text-shadow: 1px 2px 2px black, 0 0 25px blue, 0 0 15px blue;
            text-align: center;
            margin: 16px 2px;
        }
        .galeria{
            margin: 20px 10px;
            box-shadow: 0 4px 8px 0 lightblue, 0 10px 20px rgb(0,0,0,0.30);
            float: left;
            width: 250px;
        }


        .m{
            width: 100%;
            height: auto;
        }
        .mm{

            width: 230px;
            height: auto;
        }
        .mmm{

            width: 248px;
            height: auto;
        }
        .galeria:hover{
            border: 1px solid lightcoral;
            transform: rotate(-3deg);
        }
        .pie{
            text-align: center;
            text-shadow: 2px 2px 5px purple;
            padding: 23px;
        }
        .pi{
            text-align: center;
            text-shadow: 2px 2px 5px purple;
            padding: 5px;
        }
        .piee{
            text-align: center;
            text-shadow: 2px 2px 5px purple;

        }



    </style>

    <body>
<h1 class="j">Benvenidos</h1>

<div class="galeria" >
    <a href="{{url('/menuProfer')}}">
    <div class="ima" >
        <img class="m" src="https://st3.depositphotos.com/3113551/14087/v/600/depositphotos_140874594-stock-illustration-african-teacher-teaching-in-classroom.jpg">
    </div>
    <div class="piee">
            <h1 class="jj">Profesor</h1>
    </div>
    </a>
</div>
<div class="galeria">
    <a href="{{url('/menuInscribir')}}">
    <div class="ima" >
        <img class="m" src="https://temasdederecho.files.wordpress.com/2012/04/estudiante.jpg" onclick=" ">
    </div>
    <div class="pie">
        <h1 class="j">Estudiante</h1>
    </div>
    </a>
</div>
<div class="galeria">
    <a href="{{url('/menuNota')}}">
    <div class="ima">
        <img class="mm" src="https://d6scj24zvfbbo.cloudfront.net/af082e0e177900703d0ea3cd914d0fc9/200000032-4724347245/450/icono%20test.png?ph=3d937749c5">
    </div>
    <div class="pie">
        <h1 class="jjj">Calificacion</h1>
    </div>
    </a>
</div>

<div class="galeria">
    <a href="{{url('/menuCurso')}}">
        <div class="ima">
            <img class="mmm" src="https://unipython.com/wp-content/uploads/2019/09/unipython-curso-programacion-983x777.jpg">
        </div>
        <div class="pi">
            <h1 class="c">Cursos</h1>
        </div>
    </a>
</div>


    </body>

</html>

@endsection

