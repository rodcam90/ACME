@extends('layout')
@section('content')
<div class="container">
	<div class="row">		
    	 <div class="well profile">
            <div class="col-lg-12">
                    <h2>{{$user->name}}</h2>
                    <p><strong>Email: </strong> {{$user->email}} </p>
                    <p><strong>Creado: </strong> {{$user->created_at}}</p>
                    <p><strong>Actualizado: </strong> {{$user->updated_at}}</p>
            </div>            
		</div>
	</div>
</div>
@endsection