<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat1adscripcione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'cat1adscripciones';

    protected $fillable = ['adscripcion'];
	
}
