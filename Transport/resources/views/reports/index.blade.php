@extends('layout')
@section('content')
    <div class="container">
    
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Placa</th>        
        <th scope="col">Tipo</th>
        <th scope="col">Conductor</th>
        <th scope="col">Propietario</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>    
    @foreach($data as $vehiculo)
    <tbody>
        <tr>
        <th scope="row">{{$vehiculo->id}}</th>
        <td>{{$vehiculo->placa}}</td>                
        <td>{{$vehiculo->tipo}}</td>                
        <td>{{$vehiculo->co}}</td>
        <td>{{$vehiculo->pro}}</td> 
        <td>
            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST">
            <a href="{{ route('vehiculos.show', $vehiculo->id) }}">
                <button type="button" class="btn btn-secondary">Ver</button>
            </a>            
            </form>            
            </td>       
        </tr>
    </tbody>    
    
    
    
    @endforeach    
    </table>
    <div class="row">
        <div class="mx-auto">
            
        </div>
    </div>
    </div>    
@endsection