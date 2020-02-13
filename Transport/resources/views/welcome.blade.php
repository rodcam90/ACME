<?php
use App\Propietario;
use App\Conductor;
use App\Vehiculo;
?>
@extends('layout')
@section('content')
<div class="container">
	<div class="row">		
    	 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="fa fa-users" style="color: white;"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Usuarios</span>
              <span class="info-box-number">{{ Auth::user()->count()  }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user-tie"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Propietarios</span>
              <span class="info-box-number">{{Propietario::all()->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fas fa-id-card" style="color: white;"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Conductores</span>
              <span class="info-box-number">{{ Conductor::all()->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fas fa-truck-moving" style="color: white;"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vehiculos</span>
              <span class="info-box-number">{{ Vehiculo::all()->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
	</div>
</div>
@endsection