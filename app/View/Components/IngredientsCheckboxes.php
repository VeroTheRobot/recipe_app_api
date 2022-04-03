<?php

namespace App\View\Components;

use App\Models\Recipe;
use Illuminate\View\Component;

class IngredientsCheckboxes extends Component
{
    public Recipe $recipe;

    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function render()
    {
        return view('components.ingredients-checkboxes');
    }
}
