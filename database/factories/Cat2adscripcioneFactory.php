<?php

namespace Database\Factories;

use App\Models\Cat2adscripcione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Cat2adscripcioneFactory extends Factory
{
    protected $model = Cat2adscripcione::class;

    public function definition()
    {
        return [
			'adscripcion' => $this->faker->name,
        ];
    }
}
