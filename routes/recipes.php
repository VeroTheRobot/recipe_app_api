<?php

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
            Route::get('/', [RecipeController::class, 'showIngredients'])->name('ingredients.show');
            Route::post('/', [RecipeController::class, 'addIngredient'])->name('ingredients.store');
        });
    });
});
