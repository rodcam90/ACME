  @extends('layout')
@section('content')    
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="/vehiculos" method="POST">
            @csrf
            <div class="form-group">            
	                <label for="name">Placa</label>
	                <input type="text" class="form-control" name="placa" placeholder="XJG-777">        
	            </div>
                <div class="form-group">            
                    <label for="name">Marca</label>
                    <input type="text" class="form-control" name="marca" placeholder="XJG-777">        
                </div>
	            <div class="form-group">
	                <label for="name">Color</label>
	                <input type="text" class="form-control" name="color" placeholder="">        	            
	             </div>
	             <div class="form-group">
                	<label for="name">Modelo</label>
                	<input type="text" class="form-control" name="modelo" placeholder="">        
            </div>
            <div class="form-group">
                <label for="name">Tipo Vehiculo</label>
                <select name="tipo" id="inputconductor" class="form-control">
                	<option value="publico">Publico</option>
                	<option value="particular">Particular</option>
                </select>
            </div>            
            <div class="form-group">
            	<label for="name">Conductor</label>
                <select name="conductor" id="inputconductor" class="form-control">
			        @foreach ($conductores as $pro)
			            <option value="{{ $pro->id }}">{{$pro->nombre}}</option>
			        @endforeach        
			    </select>
            </div>
            <div class="form-group">
            	<label for="name">Propietario</label>
                <select name="propietario" id="inputpropietario" class="form-control">
			        @foreach ($propietarios as $pro)
			            <option value="{{ $pro->id }}">{{$pro->nombre}}</option>
			        @endforeach        
			    </select>
            </div>
            <div class="form-group">
            </div>
    </select>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection    