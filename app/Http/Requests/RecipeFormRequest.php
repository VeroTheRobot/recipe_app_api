<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RecipeFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'                       => 'string|required',
            'notes'                      => 'string|nullable',
            'ingredients'                => 'array|required',
            'ingredients.*'              => 'array|required',
            'ingredients.*.quantity'     => 'numeric|required',
            'ingredients.*.unit_measure' => 'string|nullable'
        ];
    }
}
