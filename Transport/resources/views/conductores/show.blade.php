@extends('layout')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$conductor->nombre}}</h1>
    <p class="lead">Cedula: {{$conductor->cedula}}</p>
    <p class="lead">Apellidos: {{$conductor->apellido}}</p>
    <p class="lead">Direccion: {{$conductor->direccion}}</p>
    <p class="lead">Telefono: {{$conductor->telefono}}</p>
    <p class="lead">Creado: {{$conductor->created_at}}</p>
    <p class="lead">Actualizado: {{$conductor->updated_at}}</p>
  </div>
</div>
@endsection
