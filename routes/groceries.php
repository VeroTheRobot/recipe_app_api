<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::prefix('groceries')->group(function () {
    Route::get('/', [RecipeController::class, 'index'])->name('groceries.index');
    Route::get('/{grocery_list}', [RecipeController::class, 'show'])->name('groceries.show');
    Route::post('/', [RecipeController::class, 'store'])->name('groceries.store');
    Route::delete('/{grocery_list}', [RecipeController::class, 'delete'])->name('groceries.delete');
});
