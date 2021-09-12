<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //habilitar la asigancion masiva
    protected $fillable = ['url'];

    //relacion poliformica

    public function imageable() {
        return $this->morphTo();
    }



}
