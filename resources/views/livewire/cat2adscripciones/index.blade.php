@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('cat2adscripciones')
        </div>     
    </div>   
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop