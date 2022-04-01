<?php

namespace App\View\Components;

use App\Models\Recipe;
use Illuminate\View\Component;

class RecipeThumbnail extends Component
{
    public Recipe $recipe;

    /**
     * Create a new component instance.
     * @return void
     */
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    public function render()
    {
        return view('components.recipe-thumbnail');
    }
}
