<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

   //para crear una nueva regla de authorization crear un nuevo metodo
   public function author(User $user, Post $post) {
        
    if ($user->id == $post->user_id) {
        return true;
    }else {
        return false;
    }
   }
   //ruta protegida por un policy
   //crear un nuevo metodo para verificar que la publicacion este en estado de publicado
   //ponerle un signo de interroacion(?) para indicarle que el parametro es opcional
   public function published(?User $user, Post $post) {
       //preguntar si el estatus de la publicacion es igual a 2(publicado)
    if ($post->status == 2) {
        return true;
    }else {
        return false;
    }
   }
}
