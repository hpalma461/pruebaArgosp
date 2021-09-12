@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    <h1>INDICADORES GENERALES FUERZA CIVIL</h1>
@stop

@section('content')

<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="small-box bg-gradient-success">
      {{-- <div class="overlay">
          <i class="fas fa-2x fa-sync-alt fa-spin"></i>
        </div> --}}
      <div class="inner">
        <h3>{{$countRoles}}</h3>
        <p class="text-lg">Listado de Roles</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="{{route('admin.roles.index')}}" class="small-box-footer">
        Listado de roles <i class="fas fa-arrow-circle-right"></i>
      </a>    
    </div>    
  </div>
  
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$countUsers}}</h3>
        <p class="text-lg">Usuarios</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-clock"></i>
      </div>     
      <a href="{{route('admin.users.index')}}" class="small-box-footer">
        Usuarios <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-12">
    <div class="small-box bg-secondary">
      <div class="inner">
        <h3>4670</h3>
        <p class="text-lg">Total Fuerza Civil</p>
      </div>
      <div class="icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <a href="#" class="small-box-footer">
        Relacion de Personal <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
</div>
  
    <div class="card">        
        <p class="text-center h2">En esta vista se mostraran los indicadores, dashboards, graficas, etc. De toda la informacion de Seccion Primera de Personal</p>
        <img class="img-responsive col-10" src="\storage\img\fondo1fc.png" alt="">
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop