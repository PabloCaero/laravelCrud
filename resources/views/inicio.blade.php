

@extends('layout/plantilla')   <!-- Para extender a la plantilla -->

@section('tituloPagina', 'Crud con Laravel')

@section('contenido')

<!-- TRAIDO DESDE BOOTSTRAP -->

<div class="card">
  <h5 class="card-header">CRUD con LARAVEL y MySQL</h5>
  <div class="card-body">
    <h5 class="card-title text-center">Listado de Personas</h5>

    <p>
        <a href="{{route('personas.create')}}" class="btn btn-primary"> Agregar Nueva Persona</a>
    </p>

    @php    
       // print_r($datos);
    @endphp

    <p class="card-text">
        <div class="table table-responsive">
        <table class="table table-sm table-bordered">
            <thead>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</td>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

            @foreach ($datos as $item)                         

                <tr>
                    <td>{{$item -> paterno}}</td>    
                    <td>{{$item -> materno}}</td>    
                    <td>{{$item -> nombre}}</td>    
                    <td>{{$item -> fecha_nacimiento}}</td>    
                    <td><a class="btn btn-warning" href={{route('personas.edit')}}>Modificar</a></td>    
                    <td><a class="btn btn-danger" href={{route('personas.show')}}>Eliminar</a></td>    
                </tr>  
                
                @endforeach
           </tbody>

           </div>
        </table>




    </p>
   
  </div>
</div>

  
    <div class="row" hidden>

        <h1>Usando Layouts</h1>
        <i class="fab fa-500px"></i>

        <!-- Para recibir datos utilizo INTERPOLACIÓN. print_r imprime datos en pantalla -->
        {{print_r ($datos);}}

        <!-- HREF que utiliza ruta para la vista CREAR -->
       <a href="{{route('personas.create');}}"> Link para Crear </a>

       <!-- HREF que utiliza ruta para la vista edit -->
       <a href="{{route('personas.edit');}}"> Link para Editar </a>

    </div>

   
@endsection
