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

    public function ingredientable(): MorphTo
    {
        return $this->morphTo();
    }
}
