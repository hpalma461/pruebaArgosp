<?php

namespace Database\Factories;

use App\Models\Cat1adscripcione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Cat1adscripcioneFactory extends Factory
{
    protected $model = Cat1adscripcione::class;

    public function definition()
    {
        return [
			'adscripcion' => $this->faker->name,
        ];
    }
}
