@extends('layout')
@section('content')
    <div class="container">
    <h2>Lista de Propietarios<a href="propietarios/create"><button type="button" class="btn btn-success float-right">Agregar Propietario</button></a></h2>
    <h6>
        @if($search)
            <div class="alert alert-primary" rol="alert">
            Los resultados de la busqueda {{ $search }} son:
            </div>
        @endif
    </h6>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Cedula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Direccion</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    @foreach($propietarios as $propietario)
    <tbody>
        <tr>
        <th scope="row">{{$propietario->id}}</th>
        <td>{{$propietario->cedula}}</td>        
        <td>{{$propietario->nombre}}</td>
        <td>{{$propietario->apellido}}</td>    
        <td>{{$propietario->direccion}}</td>
        <td>
            <form action="{{ route('propietarios.destroy', $propietario->id) }}" method="POST">
            <a href="{{ route('propietarios.show', $propietario->id) }}">
                <button type="button" class="btn btn-secondary">Ver</button>
            </a>
            <a href="{{ route('propietarios.edit', $propietario->id) }}">
                <button type="button" class="btn btn-primary">Editar</button>
            </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>            
            </td>
        </tr>
    </tbody>    
    @endforeach    
    </table>    
    <div class="row">
        <div class="mx-auto">
            {{$propietarios->links()}}
        </div>
    </div>
    </div>    
@endsection