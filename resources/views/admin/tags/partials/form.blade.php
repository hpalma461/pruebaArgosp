<div class="form-group">
    {!! Form::label('name', 'Nombre: ',) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta...']) !!}
@error('name')
    <small class="text-danger">{{$message}}</small>
@enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug: ',) !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug de la etiqueta', 'readonly']) !!}
@error('color')
<small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="form-group">

    {{-- de esta manera se crea el menu desplegable de los colores con el metodo html
    <label for="">Color:</label>

    <select name="color" id="" class="form-control">
        <option value="red">Color rojo</option>
        <option value="green">Color verde</option>
        <option value="blue" selected>Color azul</option>
    </select> --}}
    {{-- De esta forma se hace el menu desplegado pero con el metodo laravel colectiv. --}}
    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

</div>