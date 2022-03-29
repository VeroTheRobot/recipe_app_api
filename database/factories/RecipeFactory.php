<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;


class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    #[ArrayShape([
        'user_id' => "int",
        'name'    => "array|string",
        'notes'   => "string"
    ])]
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name'    => $this->faker->words(3, true),
            'notes'   => $this->faker->paragraph(2),
        ];
    }
}
