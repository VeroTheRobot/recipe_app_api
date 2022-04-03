<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class GroceryList extends Model
{
    use HasFactory;

    protected $fillable = [
        'creation_date',
    ];

    protected $casts = [
        'creation_date' => 'datetime:Y-m-d',
    ];

    public function ingredients(): MorphMany
    {
        return $this->morphMany(Ingredient::class, 'ingredientable');
    }

    public static function getClassName(): string
    {
        return (new \ReflectionClass(GroceryList::class))->getShortName();
    }
}
