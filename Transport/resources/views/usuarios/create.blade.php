@extends('layout')
@section('content')    
<div class="container">
    <div class="row">
        <form action="/usuarios" method="POST" style="margin: auto;">
           @csrf
           <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                       <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre">        
                        </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" name="email" placeholder="Ingrese su email">        
                        </div>
                    </div>      
                </div>      
                <div class="row">
                    <div class="col-lg-12">   
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña">
                        </div>
                    </div>
                </div>
                
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                
            </div>
            </form>
        </div>
    </div>
@endsection