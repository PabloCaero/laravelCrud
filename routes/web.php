<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController; //DEBE IMPORTARSE




//ASOCIAMOS EL CONTROL DE LA CLASE INDEX
Route::get('/', [PersonasController::class, 'index']) -> name('personas.index');

//RUTA DE FORMULARIO CREATE
Route::get('/create', [PersonasController::class, 'create']) -> name('personas.create');

//RUTA DE FORMULARIO EDIT
Route::get('/edit', [PersonasController::class, 'edit']) -> name('personas.edit');