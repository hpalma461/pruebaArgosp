@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')

{{-- para agregar un boton en la plantilla --}}
<a class="btn btn-secondary btn.sm float-right" href="{{route('admin.posts.create')}}">Nueva Publicacion</a>
    <h1>Listado de Publicaciones</h1>
@stop

@section('content')
  {{-- Para enviar la alerta si existe un mensaje de sesion --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>    
    @endif
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop