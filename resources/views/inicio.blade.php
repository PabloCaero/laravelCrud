

@extends('layout/plantilla')   <!-- Para extender a la plantilla -->

@section('tituloPagina', 'Crud con Laravel')

@section('contenido')

<!-- TRAIDO DESDE BOOTSTRAP -->

<div class="card">
  <h5 class="card-header">CRUD con LARAVEL y MySQL</h5>
  <div class="card-body">
    <h5 class="card-title text-center">Listado de Personas</h5>

    <!--PARA QUE MUESTRE UN MENSAJE-->

    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success')) <!--SI MENSAJE ESTA DEFINIDO-->
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                
            @endif
                
           
        </div>
    </div>

    <p>
        <a href="{{route('personas.create')}}" class="btn btn-primary"> 
            <span class="fas fa-user-plus"> </span><!--ICONO-->
            Agregar Nueva Persona 
            
            </a>
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
                    <form action="{{route('personas.edit', $item->id)}}" method="GET">  <!--ENVIA EL ID-->
                    <td><button class="btn btn-warning">
                        <span class="fas fa-user-edit"></span> Modificar
                    </button></td>   
                     </form>  
                     <form action="{{route('personas.show')}}"> 
                    <td><button class="btn btn-danger" >
                        <span class="fas fa-user-times"></span> Eliminar
                    </button></td> 
                   </form>    
                </tr>  
                
                @endforeach
           </tbody>

           </div>
        </table>




    </p>
   
  </div>
</div>

  

   
@endsection
