<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Ingredientable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'image_path',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
        );
    }

    public static function getClassName(): string
    {
        return (new \ReflectionClass(Recipe::class))->getShortName();
    }
}
