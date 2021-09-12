<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{

      //se crea un metodo constructor para proteger las rutas y dentro se aplica el middleware
      public function __construct(){
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //se usa el metodo pluck para hacer una array con solo el valor name y asignarle el atributo id, para el desplegable
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        return view('admin.posts.create' , compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //este facade es para mover la imgen de la carpeta temporales a la carpeta de storage del proyecto
        /* return Storage::put('posts', $request->file('file')); */

        $post = Post::create($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts', $request->file('file'));

            $post->image()->create([
                'url' => $url 
            ]);

        }

        //indicar que cada que se cree un nuevo post eliminar los datos en cache
        //con el metodo flush se eliminan todas las variables que se crearon en cache
        Cache::flush();

        //condicional para preguntar si se esta mandando informacion de etiquetas
        //  
        if ($request->tags) {
            //llamar al registro de post que se crea y pedir que recupere la relacion muchos a mucho de etiquetas
           $post->tags()->attach($request->tags);//esto es para agregar el nombre conforme al id, (consulta de mas de dos tablas)
        }

       return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Post $post)
    {

        //regla de autorizacion
        $this->authorize('author', $post);

        //se usa el metodo pluck para hacer una array con solo el valor name y asignarle el atributo id, para el desplegable
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();

        
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        //regla de autorizacion
        $this->authorize('author', $post);

        $post->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('posts' , $request->file('file') );

            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url'=>$url
                ]);
            }else{
                $post->image()->create([
                    'url' => $url
                ]);
            }
        }

          //condicional para preguntar si se esta mandando informacion de etiquetas
        //  
        if ($request->tags) {
            //llamar al registro de post que se crea y pedir que recupere la relacion muchos a mucho de etiquetas
           $post->tags()->sync($request->tags);//esto es para agregar el nombre conforme al id, (consulta de mas de dos tablas)
        }

        //indicar que cada que se cree un nuevo post eliminar los datos en cache
        //con el metodo flush se eliminan todas las variables que se crearon en cache
        Cache::flush();

        return redirect()->route('admin.posts.edit', $post)->with('info', 'La publicación se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //regla de autorizacion 
        $this->authorize('author', $post);

        $post->delete();

         //indicar que cada que se cree un nuevo post eliminar los datos en cache
        //con el metodo flush se eliminan todas las variables que se crearon en cache
        Cache::flush();
        
        return redirect()->route('admin.posts.index', $post)->with('info', 'La publicación se eliminó con éxito');
    }
}
