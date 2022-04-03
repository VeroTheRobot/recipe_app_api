<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $recipe = Recipe::factory()->create();

            Ingredient::factory()->count(5)->create(
                [
                    'ingredientable_id' => $recipe->id,
                ]
            );
        }
    }
}
