@extends('layout')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$propietario->nombre}}</h1>
    <p class="lead">Cedula: {{$propietario->cedula}}</p>
    <p class="lead">Apellidos: {{$propietario->apellido}}</p>
    <p class="lead">Direccion: {{$propietario->direccion}}</p>
    <p class="lead">Telefono: {{$propietario->telefono}}</p>
    <p class="lead">Creado: {{$propietario->created_at}}</p>
    <p class="lead">Actualizado: {{$propietario->updated_at}}</p>
  </div>
</div>
@endsection
