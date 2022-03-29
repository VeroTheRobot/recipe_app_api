<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeFormRequest;
use App\Http\Resources\RecipeCollection;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index(): RecipeCollection
    {
        return new RecipeCollection(Recipe::all());
    }

    public function store(RecipeFormRequest $request)
    {
        Recipe::create($request->validated());
    }

    public function update(Recipe $recipe, RecipeFormRequest $request)
    {
        $recipe->update($request->validated());
    }

    public function show(Recipe $recipe): RecipeResource
    {
        return new RecipeResource($recipe);
    }

    public function delete(Recipe $recipe)
    {
        $recipe->delete();
    }
}
