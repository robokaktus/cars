<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreSaleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand_id' => [
                'required',
                Rule::exists('brands', 'id')
            ],
            'model_id' => [
                'required',
                Rule::exists('models', 'id')
            ],
            'version' => [
                'nullable',
                'string'
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'old_price' => [
                'nullable',
                'numeric'
            ],
            'body_type_id' => [
                'required',
                Rule::exists('body_types', 'id')
            ],
            'engine_capacity' => [
                'required',
                'numeric'
            ],
            'horsepower' => [
                'required',
                'numeric'
            ],
            'mileage' => [
                'required',
                'numeric'
            ],
            'state_number' => [
                'required',
                'numeric'
            ],
            'vin_number' => [
                'required',
                'numeric'
            ],
            'manufactured_at' => [
                'required',
                'numeric'
            ],
            'city_id' => [
                'required',
                Rule::exists('cities', 'id')
            ],
            'phone_number' => [
                'required',
                'numeric'
            ]
        ];
    }
}
