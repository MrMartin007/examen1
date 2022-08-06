<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LibroController extends Controller
{
 public function listaLibro(Request $request){
     $libro=DB::table('libro')
         ->join('casa_editorial','libri.casa_editorial_id','=','casa_editorial.id')
         ->select('libro.*','casa_editorial.nombre_casa')
         ->paginate(10);

    return view('libro.listaLibro',compact('libro',));
}

    public function formLibro(){
        $libro=libro::all();
    return view('libro.crearLibro',compact('libro'));
}

    public function guardarLibro(Request $request){
    try{
        $validar=$this->validate($request,[
            'nombre'=>'required',
            'fecha_apertura'=>'required',
            'nombre_autor'=>'required',
            'numro_serie'=>'required',

        ]);
        customer::create([
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

    public function editformLibro($id){
        $casa_editorial=casa_editorial::all();
        $libro=libro::findOrFail($id);

    return view('libro.editLibro', compact('libro','casa_editorial'));
}
    public function editLibro(Request $request, $id ){
    $dato=request()->except((['_token','_method']));
    libro::where('id','=', $id)->update($dato);
    return redirect('/listaLibro')->with('Modificado', 'Modificado');
}
    public function destroy($id){
    try {
        libro::destroy($id);
        return redirect('/listaLibro')->with('Eliminado', 'Eliminado');
    }catch (\Exception $exception){
        Log::debug($exception->getMessage());
        return redirect('/listaLibro')->with('alerta','si');
    }
}
}

