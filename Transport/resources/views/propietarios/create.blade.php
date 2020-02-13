@extends('layout')
@section('content')    
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/propietarios" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Cedula</label>
                <input type="text" class="form-control" name="cedula" placeholder="Ingrese su # de cedula">        
            </div>
            <div class="form-group">
                <label for="name">Nombres</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">        
            </div>
            
            <div class="form-group">
                <label for="name">Apellidos</label>
                <input type="text" class="form-control" name="apellido" placeholder="Ingrese sus apellidos">        
            </div>
            <div class="form-group">
                <label for="name">Direccion</label>
                <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion">        
            </div>
            <div class="form-group">
                <label for="name">Telefono</label>
                <input type="text" class="form-control" name="telefono" placeholder="Ingrese su telefono">        
            </div>
    </select>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection