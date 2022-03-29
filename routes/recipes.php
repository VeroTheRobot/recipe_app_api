<?php

use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('recipes')->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');

    Route::prefix('/{recipe}')->group(function () {
        Route::get('/', [RecipeController::class, 'show'])->name('recipes.show');
        Route::put('/', [RecipeController::class, 'update'])->name('recipes.update');
        Route::delete('/', [RecipeController::class, 'delete'])->name('recipes.delete');

        Route::prefix('/ingredients')->group(function () {
            Route::get('/', [IngredientController::class, 'index'])->name('ingredients.index');
            Route::post('/', [IngredientController::class, 'store'])->name('ingredients.store');
            Route::get('/{ingredient}', [IngredientController::class, 'show'])->name('ingredients.show');
            Route::delete('/{ingredient}', [IngredientController::class, 'delete'])->name('ingredients.delete');
        });
    });
});
