@extends('layout')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">Email: {{$user->email}}</p>
    <p class="lead">Creado: {{$user->created_at}}</p>
    <p class="lead">Actualizado: {{$user->updated_at}}</p>
  </div>
</div>
@endsection