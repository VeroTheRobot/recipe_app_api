<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class RecipeFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'                       => 'bail|required|string',
            'notes'                      => 'bail|nullable|string',
            'ingredients'                => 'array|required',
            'ingredients.*'              => 'array|required',
            'ingredients.*.name'         => 'bail|required|string',
            'ingredients.*.quantity'     => 'bail|required|numeric',
            'ingredients.*.unit_measure' => 'bail|nullable|string'
        ];
    }
}
