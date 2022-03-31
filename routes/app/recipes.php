<?php

use App\Http\Controllers\app\IngredientController;
use App\Http\Controllers\app\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('recipes')->middleware(['auth'])->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::post('/', [RecipeController::class, 'create'])->name('recipes.create');

    Route::prefix('/{recipe}')->group(function () {
        Route::get('/', [RecipeController::class, 'show'])->name('recipes.show');
        Route::put('/', [RecipeController::class, 'edit'])->name('recipes.edit');
        Route::delete('/', [RecipeController::class, 'delete'])->name('recipes.delete');

        Route::prefix('/ingredients')->group(function () {
            Route::get('/', [IngredientController::class, 'index'])->name('recipe.ingredients.index');
            Route::post('/', [IngredientController::class, 'create'])->name('recipe.ingredients.create');
            Route::get('/{ingredient}', [IngredientController::class, 'show'])->name('recipe.ingredient.show');
            Route::delete('/{ingredient}', [IngredientController::class, 'delete'])->name('recipe.ingredient.delete');
        });
    });
});
