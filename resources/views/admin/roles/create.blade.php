@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    <h1>Crear nuevo Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.roles.store']) !!}
                
            {{-- Incluir la vista del formulario que creamos aparte para reutilizar el formulario en varias vistas --}}
            @include('admin.roles.partials.form')

                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}            
            {!! Form::close() !!}
        </div>
    </div>
@stop

