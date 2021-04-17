
@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ Session::get('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="closet">
            <spam aria-hidden="true">&times;</spam>
        </button>
    </div>
    @endif

  


<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar Nuevo Empleado</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleados  )
        <tr>
            <td>{{ $empleados->id }}</td>
            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleados->Foto }}" width="100" alt="">
            
            
            </td>
            <td>{{ $empleados->Nombre }}</td>
            <td>{{ $empleados->ApellidoPaterno }}</td>
            <td>{{ $empleados->ApellidoMaterno }}</td>
            <td>{{ $empleados->Correo }}</td>
            <td>
            
            <a href="{{ url('/empleado/'.$empleados->id.'/edit' ) }}" class="btn btn-warning">
                Editar
            </a>
             
            
            
            
            <form action="{{ url('/empleado/'.$empleados->id ) }}" class="d-inline" method="post">
            
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres en verdad borrar este registro?')" 
                value="Borrar">

            </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
