<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('recipes')->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/{recipe_id}', [RecipeController::class, 'show'])->name('recipes.show');
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');
    Route::put('/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/{recipe}', [RecipeController::class, 'delete'])->name('recipes.delete');
});
