@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Nuevo Registro</h5>
    <div class="card-body">
     
      <p class="card-text">
            <form>
                <label for="">Apellido Paterno:</label>
                <input type="text" name="paterno" class="form-control" required>

                <label for="">Apellido Materno:</label>
                <input type="text" name="materno" class="form-control" required>

                <label for="">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>

                <label for="">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>

                <br>

                <!--PARA REGRESAR-->
                <a href="{{route("personas.index")}}" class="btn btn-info">Regresar </a>

                <!--PARA INSERTAR DATOS-->
                <button class="btn btn-primary">Agregar</button>

            </form>

      </p>
    
    </div>
  </div>


@endsection