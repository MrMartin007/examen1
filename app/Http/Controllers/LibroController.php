<?php

namespace App\Http\Controllers;

use App\Models\libro;
use App\Models\casa_editorial;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LibroController extends Controller
{
    public function login(){
        return view('libro.listaLibro');
    }

 public function listaLibro(Request $request){
     $libro=DB::table('libro')
         ->join('casa_editorial','libro.casa_editorial_id','=','casa_editorial.id')
         ->select('libro.*','casa_editorial.nombre_casa')
         ->paginate(10);

    return view('libro.listaLibro',compact('libro'));
}

    public function formLibro(){
        $casa_editorial=casa_editorial::all();
    return view('libro.crearLibro',compact('casa_editorial'));
}

    public function guardarLibro(Request $request){
    try{
        $validar=$this->validate($request,[
            'nombre'=>'required',
            'fecha_apertura'=>'required',
            'nombre_autor'=>'required',
            'numro_serie'=>'required',

        ]);
        libro::create([
            'nombre'=>$validar['nombre'],
            'fecha_apertura'=>$validar['fecha_apertura'],
            'nombre_autor'=>$validar['nombre_autor'],
            'numro_serie'=>$validar['numro_serie'],
        ]);
    }catch (QueryException $queryException){
        Log::debug($queryException->getMessage());
        return redirect('/formLibro')->with('alertaQery', 'no');
    } catch (\Exception $exception){

        Log::debug($exception->getMessage());

        return redirect('/formLibro')->with('alerta', 'si');
    }
    return redirect('/listaLibro')->with('Guardado', 'Guardado');
}

}

