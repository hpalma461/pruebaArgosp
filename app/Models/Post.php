<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //habilitar la asignacion masiva con el metodo guarded para definir solo los campos que si se ignorar
    //mientras la asignacion masiva es con el metodo fillable se deben de incluir en el array los que no se deben ignorar
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a uno poliformica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
