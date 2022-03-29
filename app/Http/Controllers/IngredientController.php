<?php

namespace App\Http\Controllers;

use App\Http\Requests\IngredientFormRequest;
use App\Http\Resources\IngredientCollection;
use App\Models\Ingredient;
use App\Models\Ingredientable;

class IngredientController extends Controller
{
    public function index(Ingredientable $ingredientable): IngredientCollection
    {
        return new IngredientCollection($ingredientable->ingredients());
    }

    public function store(Ingredientable $ingredientable, IngredientFormRequest $request)
    {
        $ingredientable->ingredients()->create($request->validated());
    }

    public function delete(Ingredient $ingredient)
    {
        $ingredient->delete();
    }
}
