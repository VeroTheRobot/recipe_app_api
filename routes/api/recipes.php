<?php

use App\Http\Controllers\api\IngredientController;
use App\Http\Controllers\api\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('recipes')->middleware(['auth'])->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');

    Route::prefix('/{recipe}')->group(function () {
        Route::get('/', [RecipeController::class, 'show'])->name('recipes.show');
        Route::put('/', [RecipeController::class, 'update'])->name('recipes.update');
        Route::delete('/', [RecipeController::class, 'destroy'])->name('recipes.destroy');

        Route::prefix('/ingredients')->group(function () {
            Route::get('/', [IngredientController::class, 'index'])->name('recipe.ingredients.index');
            Route::post('/', [IngredientController::class, 'store'])->name('recipe.ingredients.store');
            Route::get('/{ingredient}', [IngredientController::class, 'show'])->name('recipe.ingredient.show');
            Route::delete('/{ingredient}', [IngredientController::class, 'delete'])->name('recipe.ingredient.delete');
        });
    });
});