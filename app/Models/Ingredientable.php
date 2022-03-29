<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

abstract class Ingredientable extends Model
{
    public abstract static function getClassName(): string;

    public function ingredients(): MorphMany
    {
        return $this->morphMany(Ingredient::class, 'ingredientable');
    }
}
