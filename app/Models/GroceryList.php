<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroceryList extends Model
{
    use HasFactory;

    protected $fillable = [
        'creation_date',
    ];

    protected $casts = [
        'creation_date' => 'datetime:Y-m-d',
    ];

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }
}
