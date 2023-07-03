<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController; //DEBE IMPORTARSE




//ASOCIAMOS EL CONTROL DE LA CLASE INDEX
Route::get('/', [PersonasController::class, 'index']) -> name('personas.index');

//RUTA DE FORMULARIO CREATE
Route::get('/create', [PersonasController::class, 'create']) -> name('personas.create');

//RUTA DE INSERCIÓN EN LA BASE
Route::post('/store', [PersonasController::class, 'store']) -> name('personas.store');

//RUTA DE FORMULARIO EDIT - DEBEMOS RECIBIR PARAMETROS
Route::get('/edit/{id}', [PersonasController::class, 'edit']) -> name('personas.edit');

//RUTA DE FORMULARIO ELIMINAR
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy']) -> name('personas.destroy');

//RUTA DE MODIFICACIÓN EN LA BASE
Route::put('/update/{id}', [PersonasController::class, 'update']) -> name('personas.update');

//RUTA PARA TRAER UN SOLO REGISTRO
Route::get('/show/{id}', [PersonasController::class, 'show']) -> name('personas.show');