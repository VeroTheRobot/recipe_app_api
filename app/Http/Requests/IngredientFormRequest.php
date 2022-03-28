<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;


class IngredientFormRequest extends FormRequest
{
    #[ArrayShape([
        'name' => "string",
        'quantity' => "string",
        'unit_measure' => "string"
    ])]
    public function rules():array
    {
        return [
            'name' => 'required',
            'quantity' => 'required|numeric',
            'unit_measure' => 'nullable'
        ];
    }
}
