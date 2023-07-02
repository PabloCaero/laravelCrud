@extends('layout/plantilla')

@section("tituloPagina", "Actualizar un registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Actualizar Registro</h5>
    <div class="card-body">

      <!--RECIBO A LA PERSONA TRAIDA DESDE EL CONTROLADOR-->
      @php
        //print_r($personas); //ESTE ES NUESTRO OBJETO
      @endphp
     
      <p class="card-text">
            <form action="{{route('personas.update', $personas->id)}}" method= "POST">
              @csrf
              @method("PUT") <!--PARA ACTUALIZAR-->

                <label for="">Apellido Paterno:</label>
                <input type="text" name="paterno" class="form-control" required value="{{$personas->paterno}}"> <!--CON INTERPOLACIÓN TRAIGO LOS DATOS-->

                <label for="">Apellido Materno:</label>
                <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}">

                <label for="">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">

                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">

                <br>

                <!--PARA REGRESAR-->
                <a href="{{route("personas.index")}}" class="btn btn-info">
                  <span class="fas fa-undo-alt"> </span> Regresar </a>

                <!--PARA INSERTAR DATOS-->
                <button class="btn btn-warning">
                  
                  <span class="fas fa-user-edit"></span> Modificar
                </button>

            </form>

      </p>
    
    </div>
  </div>


@endsection