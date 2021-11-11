@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    @livewireStyles
    <link href="\css\app.css" rel="stylesheet">
@stop

@section('content')

<div class="container mx-auto">
<div class="h-16 bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-500">    
    <h1 class="text-center font-bold text-black-300 sm:text-3x1 sm:truncate py-4 bg-gradient-to-1 from-indigo-500 to-indigo-800" >        
        RELACION DE PERSONAL - FUERZA CIVIL
        <img src="\storage\img\2.jpg" alt="" width="100px"  > 
    </h1>
</div>
    <livewire:datatable
        model="App\Models\User"
        sort="name|asc"
        searchable="name, email"
        exportable
        {{-- hideable="select" --}}
    >
</div>
@livewireScripts
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop