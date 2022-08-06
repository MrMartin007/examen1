<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LibroController::class,'login']);


//Rutas de curso: Ruta de Lista
Route::get('/listaLibro', [LibroController::class,'listaLibro'])->name('listaLibro');

//Ruta de Formulario Guardar
Route::get('/formLibro', [LibroController::class,'formLibro']);

//Ruta para Guardar al categoryController
Route::post('/libro/crearLibro', [LibroController::class,'guardarLibro'])->name('Libro.save');


