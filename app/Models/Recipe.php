<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'image_path',
    ];

    public function ingredients(): MorphMany
    {
        return $this->morphMany(Ingredient::class, 'ingredientable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

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
