<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'recipe_id',
        'grocery_id',
        'quantity',
        'unit_measure',
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function grocery(): BelongsTo
    {
        return $this->belongsTo(GroceryList::class);
    }
}
