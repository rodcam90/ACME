@extends('layout')
@section('content')    
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <h2>Editar Conductor: {{ $conductor->nombre }}</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('conductores.update', $conductor->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Cedula</label>
                <input type="text" class="form-control" name="cedula" value=" {{ $conductor->cedula }}" placeholder="">        
            </div>
            <div class="form-group">
                <label for="name">Nombres </label>
                <input type="text" class="form-control" name="nombre" value="{{ $conductor->nombre }}" placeholder="">        
            </div>       
            <div class="form-group">
                <label for="name">Apellidos </label>
                <input type="text" class="form-control" name="apellido" value="{{ $conductor->apellido }}" placeholder="">        
            </div>    
            <div class="form-group">
                <label for="name">Direccion </label>
                <input type="text" class="form-control" name="direccion" value="{{ $conductor->direccion }}" placeholder="">        
            </div>         
            <div class="form-group">
                <label for="name">Telefono </label>
                <input type="text" class="form-control" name="telefono" value="{{ $conductor->telefono }}" placeholder="">        
            </div>         
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection