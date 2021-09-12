<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la publicacion']) !!}
{{-- imprimir los metodos de validacion --}}
@error('name')
    <small class="text-danger">{{$message}}</small>    

@enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug de la publicacion', 'readonly']) !!}
{{-- imprimir los metodos de validacion --}}
    @error('slug')
        <small class="text-danger">{{$message}}</small>    

    @enderror
</div>

{{-- es para crear el desplegable con laravel colective con los datos recuperados del controlador --}}
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
{{-- imprimir los metodos de validacion --}}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>    

    @enderror
</div>

{{-- para crear la lista de tag para seleccionar con checkbox con laravel colective --}}
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
    
    {{-- se pone el nombre y el checkbox dentro del label para que al seleccionar el nombre automaticamente se seleccione el checkbox --}}
    <label class="mr-2" >
        {!! Form::checkbox('tags[]', $tag->id, null) !!}
        {{$tag->name}}
    </label>
    @endforeach
   
    
    {{-- imprimir los metodos de validacion --}}
    @error('tags')
    <br>
        <small class="text-danger">{{$message}}</small>    

    @enderror

</div>
{{-- mostrar input con opciones radio --}}
<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('status', 1, true) !!}        
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    {{-- imprimir los metodos de validacion --}}
        @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>    
        @enderror
</div>
{{-- crear una gid de bootstrap con 2 columnas con la clase row --}}
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}">
            @else
                <img id="picture" src="/storage/img/bg.jpg" alt="">                  
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en la publicacion') !!}
            {{-- condicionar que el input tipo file solo acepte imagenes con cualquier tipo de extension --}}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept'=> 'image/*']) !!} 
            @error('file')
                <span class="text-danger">{{$message}}</span>                        
            @enderror  
        </div>

        

       <p>Aqui poner las indicaciones sobre que caracteristicas deberia de tener la imagen que se pondra en la publicacion</p> 
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
{{-- imprimir los metodos de validacion --}}
    @error('extract')
        <small class="text-danger">{{$message}}</small>  
    @enderror

</div>

{{-- este es para crear un textarea(que es una area de texto grande) con laravel colective --}}
<div class="form-group">
    {!! Form::label('body', 'Cuerpo de la publicacion:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
{{-- imprimir los metodos de validacion --}}
    @error('body')
        <small class="text-danger">{{$message}}</small>    
    @enderror
</div>