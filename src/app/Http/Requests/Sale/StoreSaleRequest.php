<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;
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
            'is_hide_state_number' => [
                'required',
                'boolean'
            ],
            'vin_number' => [
                'required',
                'numeric'
            ],
            'is_hide_vin_number' => [
                'required',
                'boolean'
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
            ],
            'telegram' => [
                'nullable',
                'numeric'
            ],
            'email' => [
                'nullable',
                'numeric'
            ],
        ];
    }

    public function messages()
    {
        return [
            'brand_id.required' => 'Будь ласка, вкажіть марку',
            'model_id.required' => 'Будь ласка, вкажіть модель',
            'price.required' => 'Будь ласка, вкажіть ціну',
            'body_type_id.required' => 'Будь ласка, вкажіть тип кузову',
            'engine_capacity.required' => 'Будь ласка, вкажіть об\'єм двигуна',
            'horsepower.required' => 'Будь ласка, вкажіть потужність',
            'mileage.required' => 'Будь ласка, вкажіть пробіг',
            'state_number.required' => 'Будь ласка, вкажіть державний номер',
            'vin_number.required' => 'Будь ласка, вкажіть VIN-номер',
            'manufactured_at.required' => 'Будь ласка, вкажіть рік випуску',
            'city_id.required' => 'Будь ласка, вкажіть місто',
            'phone_number.required' => 'Будь ласка, вкажіть номер телефону'
        ];
    }
}
