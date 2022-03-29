<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class GroceryList extends Ingredientable
{
    use HasFactory;

    protected $fillable = [
        'creation_date',
    ];

    protected $casts = [
        'creation_date' => 'datetime:Y-m-d',
    ];

    public static function getClassName(): string
    {
        return (new \ReflectionClass(GroceryList::class))->getShortName();
    }
}
