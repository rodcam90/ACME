@extends('layout')
@section('content')
    <div class="container">
    <h2>Lista de Vehiculos<a href="vehiculos/create"><button type="button" class="btn btn-success float-right">Agregar Vehiculo</button></a></h2>
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
        <th scope="col">Placa</th>
        <th scope="col">Color</th>
        <th scope="col">Marca</th>
        <th scope="col">Tipo</th>
        <th scope="col">Conductor</th>
        <th scope="col">Propietario</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    @foreach($vehiculos as $vehiculo)
    <tbody>
        <tr>
        <th scope="row">{{$vehiculo->id}}</th>
        <td>{{$vehiculo->placa}}</td>        
        <td>{{$vehiculo->color}}</td>
        <td>{{$vehiculo->marca}}</td>
        <td>{{$vehiculo->tipo}}</td>
        <td>{{$vehiculo->conductor}}</td>
        <td>{{$vehiculo->propietario}}</td>
        <td>
            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
            <a href="{{ route('vehiculos.show', $vehiculo->id) }}">
                <button type="button" class="btn btn-secondary">Ver</button>
            </a>
            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">
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
            {{$vehiculos->links()}}
        </div>
    </div>
    </div>    
@endsection