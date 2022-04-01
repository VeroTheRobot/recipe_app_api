<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecipeFormRequest;
use App\Models\Recipe;


class RecipeController extends Controller
{
    public function index()
    {
        return view('recipes.index', ['recipes' => Recipe::all()]);
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', ['recipe' => $recipe]);
    }

    public function create(RecipeFormRequest $request)
    {
    }

    public function update(Recipe $recipe, RecipeFormRequest $request)
    {
    }

    public function delete(Recipe $recipe)
    {
    }
}