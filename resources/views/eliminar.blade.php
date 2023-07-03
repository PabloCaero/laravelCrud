@extends('layout/plantilla')

@section("tituloPagina", "Eliminar un Registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Registro</h5>
    <div class="card-body">

      <!--RECIBO A LA PERSONA TRAIDA DESDE EL CONTROLADOR-->
      @php
       //print_r($personas); //ESTE ES NUESTRO OBJETO
      @endphp
     
      <p class="card-text">
            
          <div class="alert alert-danger d-flex align-items-center" role="alert">
              <div>
                ¿Estas seguro de eliminar este registro?
              </div>
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>

            <table class="table table-sm table-hover">
                 <thead>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    
                 </thead>
                 <tbody>
                    <td>{{$personas->paterno}}</td>
                    <td>{{$personas->materno}}</td>
                    <td>{{$personas->nombre}}</td>
                    <td>{{$personas->fecha_nacimiento}}</td>
                 </tbody>

            </table>
            <hr>
            
            
            
            
            
        </p>
        
    </div>
    <form action="{{route('personas.destroy', $personas->id)}}" method= "POST">
      @csrf
      @method('DELETE')
        <!--PARA REGRESAR-->
        <a href="{{route("personas.index")}}" class="btn btn-info">
          <span class="fas fa-undo-alt"> </span> Regresar 
        </a>
        <button class="btn btn-danger">
          <span class="fas fa-user-times"></span>
          Eliminar 
        </a>
    </form>
  </div>


@endsection