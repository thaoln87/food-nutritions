<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:1'],
            'serving' => ['required', 'string', 'regex:/^((\d+\s+)(\d+\/\d+\s)|(\d+\/\d+\s)|(\d+\s+))[\w|\s]+$/'], // fraction text: 1/2 cup
            'serving_per_container' => ['required', 'min:0', 'numeric'],
            'calories'=> ['numeric', 'min:0'],
            'total_fat'=> ['numeric', 'min:0'],
            'saturated'=> ['numeric', 'min:0'],
            'polyunsaturated'=> ['numeric', 'min:0'],
            'monounsaturated'=> ['numeric', 'min:0'],
            'trans'=> ['numeric', 'min:0'],
            'cholesterol'=> ['numeric', 'min:0'],
            'sodium'=> ['numeric', 'min:0'],
            'potassium'=> ['numeric', 'min:0'],
            'total_carbs'=> ['numeric', 'min:0'],
            'dietary_fiber'=> ['numeric', 'min:0'],
            'sugar'=> ['numeric', 'min:0'],
            'protein'=> ['numeric', 'min:0'],
            'vitamin_a'=> ['numeric', 'min:0'],
            'vitamin_c'=> ['numeric', 'min:0'],
            'calcium'=> ['numeric', 'min:0'],
            'iron'=> ['numeric', 'min:0'],
        ];
    }
}
