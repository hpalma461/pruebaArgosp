<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat2adscripcione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'cat2adscripciones';

    protected $fillable = ['adscripcion'];
	
}
