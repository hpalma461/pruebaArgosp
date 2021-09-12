<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Post;

//se debe de importar esta clase para poder usar la paginacion con livewire
use Livewire\WithPagination;

class PostsIndex extends Component
{

    //debemos de declarar que vamos a usar la paginacion de livewire
    use WithPagination;
    //metodo para usar los estilos de bootstrap en la paginacion en lugar de los de tailwind
    protected $paginationTheme = "bootstrap";

    //definir una propiedad search para el input del buscador a medida que vayamos escribiendo
    public $search;


    //metodo para que se resetee la pagina cuando busco en el input y pueda consultar en todas las paginas
    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                    //concatenar el search con busqueda en general de la palabra y filtrarlo con where
                    ->where('name', 'LIKE','%' .$this->search .'%')
                    ->latest('id')
                    ->paginate();


        return view('livewire.admin.posts-index', compact('posts'));
    }
}
