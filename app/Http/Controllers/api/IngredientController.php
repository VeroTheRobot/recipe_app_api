<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IngredientFormRequest;
use App\Http\Resources\IngredientCollection;
use App\Http\Resources\IngredientResource;
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

    public function show(Ingredient $ingredient): IngredientResource
    {
        return new IngredientResource($ingredient);
    }

    public function delete(Ingredient $ingredient)
    {
        $ingredient->delete();
    }
}