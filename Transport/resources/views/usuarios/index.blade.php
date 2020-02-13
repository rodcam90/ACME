@extends('layout')
@section('content')
    <div class="container">
    <h2>Lista de Usuarios<a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a></h2>
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
        <th scope="col">Email</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    @foreach($users as $user)
    <tbody>
        <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->email}}</td>        
        <td>{{$user->name}}</td>
        <td>
            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
            <a href="{{ route('usuarios.show', $user->id) }}">
                <button type="button" class="btn btn-secondary">Ver</button>
            </a>
            <a href="{{ route('usuarios.edit', $user->id) }}">
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
            {{$users->links()}}
        </div>
    </div>
    </div>    
@endsection