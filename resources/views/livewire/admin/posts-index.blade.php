<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una publicacion">
    </div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if ($posts->count())      
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="card footer">
            {{-- Llamar a la coleccion link para nuestra paginacion --}}
            {{$posts->links()}}
        </div>

    @else
    <div class="card-body">
        <strong>No hay ningun registro... </strong>
    </div>
    @endif

</div>
