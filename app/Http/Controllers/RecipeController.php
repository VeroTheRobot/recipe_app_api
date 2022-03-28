<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeFormRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(): Collection
    {
        return Recipe::all();
    }

    public function store(RecipeFormRequest $request)
    {
        Recipe::create($request->validated());
    }

    public function update(Recipe $recipe, RecipeFormRequest $request)
    {
        $recipe->update($request->validated());
    }

    public function show($recipeId)
    {
        return Recipe::where('id', $recipeId);
    }

    public function delete(Recipe $recipe)
    {
        $recipe->delete();
    }
}
