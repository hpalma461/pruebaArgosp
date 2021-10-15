<?php

namespace Database\Factories;

use App\Models\Bloque;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BloqueFactory extends Factory
{
    protected $model = Bloque::class;

    public function definition()
    {
        return [
			'bloque' => $this->faker->name,
        ];
    }
}
