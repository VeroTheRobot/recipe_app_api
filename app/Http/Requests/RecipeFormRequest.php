<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;


class RecipeFormRequest extends FormRequest
{
    #[ArrayShape(['name' => "string", 'notes' => "string"])]
    public function rules(): array
    {
        return [
            'name' => 'required',
            'notes' => 'nullable'
        ];
    }
}
