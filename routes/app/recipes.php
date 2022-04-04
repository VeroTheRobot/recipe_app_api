<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('recipes')->middleware(['auth'])->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('recipes.index');
    Route::post('/', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/create', [RecipeController::class, 'create'])->name('recipes.create');

    Route::prefix('/{recipe}')->group(function () {
        Route::get('/', [RecipeController::class, 'show'])->name('recipes.show');
        Route::put('/', [RecipeController::class, 'edit'])->name('recipes.edit');
        Route::delete('/', [RecipeController::class, 'delete'])->name('recipes.delete');
    });
});
