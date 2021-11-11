@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    <h1>Relacion de usuarios</h1>
@stop

@section('content')

<div class="container mx-auto">
<div class="h-24 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
    <h1 class="text-center font-bold text-gray-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500 to-indigo-800 ">Listado de Usuarios </h1>
</div>
    <livewire:datatable
        model="App\Models\User"
        searchable="name"
    >
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop