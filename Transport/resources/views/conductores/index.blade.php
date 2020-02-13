@extends('layout')
@section('content')
    <div class="container">
    <h2>Lista de conductores<a href="conductores/create"><button type="button" class="btn btn-success float-right">Agregar Conductor</button></a></h2>
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
    @foreach($conductores as $conductor)
    <tbody>
        <tr>
        <th scope="row">{{$conductor->id}}</th>
        <td>{{$conductor->cedula}}</td>        
        <td>{{$conductor->nombre}}</td>
        <td>{{$conductor->apellido}}</td>    
        <td>{{$conductor->direccion}}</td>
        <td>
            <form action="{{ route('conductores.destroy', $conductor->id) }}" method="POST">
            <a href="{{ route('conductores.show', $conductor->id) }}">
                <button type="button" class="btn btn-secondary">Ver</button>
            </a>
            <a href="{{ route('conductores.edit', $conductor->id) }}">
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
            {{$conductores->links()}}
        </div>
    </div>
    </div>    
@endsection