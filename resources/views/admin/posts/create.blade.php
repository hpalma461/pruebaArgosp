@extends('adminlte::page')

@section('title', 'ARGOSP')

@section('content_header')
    <h1>Crear nueva publicacion</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- se le agrega el autocomplete con valor off para que no se vea el historico en el input de lo que se ha escrito --}}
            {{-- siempre que vayamos a enviar archivos hay que habilitar el formulario con el atrbuto files en laravel colective para indicar que estamos enviendo un archivo dentro del formulario --}}
            {!! Form::open(['route'=> 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {{-- incluir un input oculta para que no se vea en el formulario, se hace con laravel colective --}}
            {{-- {!! Form::hidden('user_id', auth()->user()->id) !!} --}}

            @include('admin.posts.partials.form')

            {{-- este es para crear un boton con laravel colective --}}
            {!! Form::submit('Crear publicacion', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    {{-- Plugin para el ckEditor de texto enriquecido --}}
    <script src="/ckeditor5/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
            .create( document.querySelector( '#extract' ) )
            .catch( error => {
                console.error( error );
            } );

        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );


        //cambiar imagen con codigo javascript
        document.getElementById("file").addEventListener('change', cambiarImagen);//se mantiene a la escucha sobre algun cambio del input con id de nombre "file"
        //esta funcion trasnsfomra la imagen con base64
        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection