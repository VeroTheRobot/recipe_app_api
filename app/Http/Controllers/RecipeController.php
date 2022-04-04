<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeFormRequest;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

use function redirect;
use function view;


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

    public function create()
    {
        return view('recipes.create');
    }

    public function store(RecipeFormRequest $request)
    {
        $request = $request->validated();

        $recipe = Auth::user()->recipes()->create(
            [
                'name'  => $request['name'],
                'notes' => $request['notes'],
            ]
        );

        foreach ($request['ingredients'] as $ingredient) {
            $recipe->ingredients()->create(
                [
                    'name'         => $ingredient['name'],
                    'quantity'     => $ingredient['quantity'],
                    'unit_measure' => $ingredient['unit_measure'] ?? '',
                ]
            );
        }

        return redirect()->route('recipes.show', $recipe->id);
    }

    public function update(Recipe $recipe, RecipeFormRequest $request)
    {
    }

    public function delete(Recipe $recipe)
    {
        $recipe->ingredients()->delete();
        $recipe->delete();

        return redirect()->route('recipes.index');
    }
}