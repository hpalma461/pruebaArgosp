<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    //metodo creating para que ocurra el evento antes de que se crea la publicacion
    public function creating(Post $post)
    {
        if (! \App::runningInConsole()) {
            //esto es para que cada vez que se cree un nuevo post se le asigne el user_id del usuario autenticado 
            $post->user_id = auth()->user()->id; 
        }
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */

     //metodo para que se activa antes de que se elimine la publicacion
    public function deleting(Post $post)
    {
        //con esto se logra que cada vez que eliminemos un post se elimine la imagen
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }

    
}
