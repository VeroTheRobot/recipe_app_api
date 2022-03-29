<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;


class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;

    public function definition()
    {
        return [
            'name'         => $this->faker->word(),
            'quantity'     => $this->faker->randomFloat(2, 0.5, 10),
            'unit_measure' => $this->faker->randomElement(
                [
                    'cups',
                    'lbs',
                    'oz',
                    'tablespoons',
                    'teaspoons'
                ]
            ),
        ];
    }
}
