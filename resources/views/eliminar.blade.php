@extends('layout/plantilla')

@section("tituloPagina", "Eliminar un Registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Eliminar Registro</h5>
    <div class="card-body">
     
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                 </tbody>

            </table>
            <hr>
            
            
            
            
            
        </p>
        
    </div>
    <form action="">
        <!--PARA REGRESAR-->
        <a href="{{route("personas.index")}}" class="btn btn-info">
          <span class="fas fa-undo-alt"> </span> Regresar 
        </a>
        <button href="{{route("personas.destroy")}}" class="btn btn-danger">
          <span class="fas fa-user-times"></span>
          Eliminar 
        </a>
    </form>
  </div>


@endsection