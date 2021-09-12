<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=['name','slug','color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    //relacion muchos a muchos

    public function posts(){
        return $this->BelongsToMany(Post::class); 
    }
}
