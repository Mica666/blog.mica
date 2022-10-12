<?php

namespace Database\Factories;

use App\Models\codigo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CodigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $codigo=$this->faker->unique()->word();
        return [
            'codigo' => $codigo,
            'slug' => Str::slug($codigo)
        ];
    }
}
