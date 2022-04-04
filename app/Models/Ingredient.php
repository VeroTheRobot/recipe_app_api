<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'unit_measure',
        'ingredientable_id',
        'ingredientable_type',
    ];

    public static array $UNIT_MEASURES = [
        'N/A',
        'cups',
        'oz',
        'tsp',
        'tbsp',
        'lbs',
        'gr',
        'kg'
    ];

    public function ingredientable(): MorphTo
    {
        return $this->morphTo();
    }
}
