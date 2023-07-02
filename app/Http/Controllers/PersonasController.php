<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
 
    public function index()
    {
        //TRAE TODA LA TABLA DE PERSONAS
        $datos = Personas::all();
        return view('inicio', compact('datos')); //ENTRE COMILLAS SIMPLES
    }

    /*PARA TRAER FORMULARIO INSERTAR*/    
    public function create()
    {
        //Formulario para agregar datos
        return "Aquí puedes agregar";
    }

  
    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
    }

   /*PARA TRAER UN SOLO REGISTRO*/ 
    public function show(Personas $personas)
    {
        //Obtener UN SOLO REGISTRO de la tabla
    }

   /*PARA EDITAR*/ 
    public function edit(Personas $personas)
    {
        //Sirve para traer los datos que se van a editar 
        //y los coloca en un formulario
        return "Aquí se actualiza";
    }

   
    public function update(Request $request, Personas $personas)
    {
        //ACCESO A DATOS
    }

    
    public function destroy(Personas $personas)
    {
        //ELIMINA UN REGISTRO DE LA BD
    }
    
}
