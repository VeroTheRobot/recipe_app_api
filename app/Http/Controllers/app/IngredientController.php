<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientFormRequest;
use App\Models\Ingredient;
use App\Models\Ingredientable;


class IngredientController extends Controller
{
    public function index(Ingredientable $ingredientable)
    {
    }

    public function create(Ingredientable $ingredientable, IngredientFormRequest $request)
    {
        $ingredientable->ingredients()->create($request->validated());
    }

    public function show(Ingredient $ingredient)
    {
    }

    public function delete(Ingredient $ingredient)
    {
        $ingredient->delete();
    }
}