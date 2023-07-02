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
        return view('agregar');
    }

  
    public function store(Request $request)
    {
        //Sirve para guardar datos en la BD
        $personas = new Personas();

        //PARA TOMAR DATOS DEL FORMULARIO
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento= $request->post('fecha_nacimiento');

        //METODO PARA GUARDAR
        $personas->save();

        //PARA RETORNAR
        return redirect()->route("personas.index")->with("success", "Agregado con éxito!");     
    }

   /*PARA TRAER UN SOLO REGISTRO*/ 
    public function show(Personas $personas)
    {
        //Obtener UN SOLO REGISTRO de la tabla
        return view('eliminar');
    }

   /*PARA EDITAR*/ 
    public function edit($id) //ID QUE RECIBE DE LA RUTA
    {
        //Sirve para traer los datos que se van a editar 
        //y los coloca en un formulario
       
        $personas = Personas::find($id); //BUSCA POR ID

        return view("actualizar", compact('personas'));
    }

   
    public function update(Request $request, $id)
    {
        //ACCESO A DATOS
        //CON $id TIENE QUE HACER UNA BUSQUEDA RAPIDA
        $personas = Personas::find($id);

        //NUEVOS DATOS DEL FORMULARIO
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento= $request->post('fecha_nacimiento');

         //METODO PARA GUARDAR
         $personas->save();

         //PARA RETORNAR
         return redirect()->route("personas.index")->with("success", "Modificado con éxito!");   

    }

    
    public function destroy(Personas $personas)
    {
        //ELIMINA UN REGISTRO DE LA BD
       
    }
    
}
