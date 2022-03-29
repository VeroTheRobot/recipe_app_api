<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    public function run()
    {
        foreach (Recipe::all() as $recipe) {
            Ingredient::factory()->count(10)->create(
                [
                    'recipe_id' => $recipe->id,
                ]
            );
        }
    }
}
