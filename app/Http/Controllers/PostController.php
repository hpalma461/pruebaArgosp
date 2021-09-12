<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
//para trabajar con canche hay que inportar el facade cache
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index() {

        //condicional para preguntar si por la url esta pasando la informacion de la pagina
        //si se mando la informacion guardarla en una variable key
        //esto para que al momento de consultar las paginas busque en cache si existe conforme la pagina
        if (request()->page) { 
            $key = 'posts' . request()->page;
        }else{
            $key = 'posts';
        }

        //para validar la consulta si existe en CACHE dentro de la variable posts
        //se le manda la variable key ya consultada por que es variable dinamica
        if (Cache::has($key)) {
            $posts = Cache::get($key);
        } else {
             //para listar todos los posts filtrandolos con el que tiene estatus 2
            $posts = Post::where('status', 2)->latest('id')->paginate(8);
            
            //Luego de que se hace la consulta se almacena la informacion en cache
            Cache::put($key, $posts);
        }       

        //para retornar una vista y pasarle la variable posts
        return view('posts.index', compact('posts'));

    }

    public function show(Post $post){

        $this->authorize('published' , $post );

        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->latest('id')
                            ->take(4)
                            ->get();

        return view('posts.show', compact('post', 'similares'));
    }

    public function category(Category $category){
        //retornara la consulta en base al id de la categoria, donde el estatus es 2 que es posts activos
        //latest para orden por id, y paginado con 6 o los que queramos
        $posts = Post::where('category_id', $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(4);
    // retornara la vista de categorias que esta en la carpeta post
    // retornara la vista con la coleccion recuperada previamente del psost con las condicionales y
    // se las mandaremos a la vista.
        return view('posts.category', compact('posts', 'category'));

    }

    public function tag(Tag $tag) {
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(4);
        return view('posts.tag', compact('posts', 'tag'));

    }

}
