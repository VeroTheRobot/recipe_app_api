<?php

namespace Database\Factories;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;


class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;

    #[ArrayShape([
        'name'                => "string",
        'quantity'            => "float",
        'unit_measure'        => "mixed",
        'ingredientable_type' => "string"
    ])]
    public function definition(): array
    {
        return [
            'name'                => $this->faker->word(),
            'quantity'            => $this->faker->randomFloat(2, 0.5, 10),
            'unit_measure'        => $this->faker->randomElement(
                [
                    'cups',
                    'lbs',
                    'oz',
                    'tablespoons',
                    'teaspoons'
                ]
            ),
            'ingredientable_type' => Recipe::class,
        ];
    }
}
