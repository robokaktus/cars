<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePreferencesRequest extends FormRequest
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
            'description' => [
                'nullable',
                'string'
            ],
            'paint_id' => [
                'required',
                Rule::exists('paints', 'id')
            ],
            'paint_type_id' => [
                'required',
                Rule::exists('paint_types', 'id')
            ],
            'paint_condition_id' => [
                'required',
                Rule::exists('paint_conditions', 'id')
            ],
            'technical_condition_id' => [
                'required',
                Rule::exists('technical_conditions', 'id')
            ],
            'fuel_type_id' => [
                'required',
                Rule::exists('fuel_types', 'id')
            ],
            'gearbox_type_id' => [
                'required',
                Rule::exists('gearbox_types', 'id')
            ],
            'drive_type_id' => [
                'required',
                Rule::exists('drive_types', 'id')
            ],
            'delivered_from_iso' => [
                'nullable',
                'string'
            ],
            'is_cleared_through_customs' => [
                'required',
                'boolean'
            ],
            'is_traded' => [
                'required',
                'boolean'
            ],
            'is_exchanged' => [
                'required',
                'boolean'
            ]
        ];
    }

    public function messages()
    {
        return [
            'paint_id.required' => 'Будь ласка, вкажіть колір',
            'paint_type_id.required' => 'Будь ласка, вкажіть тип покраски',
            'paint_condition_id.required' => 'Будь ласка, вкажіть стан покраски',
            'technical_condition.required' => 'Будь ласка, вкажіть технічний стан',
            'fuel_type_id.required' => 'Будь ласка, вкажіть тип палива',
            'gearbox_type_id.required' => 'Будь ласка, вкажіть тип коробки передач',
            'drive_type_id.required' => 'Будь ласка, вкажіть тип приводу',
            'is_cleared_through_customs.required' => 'Будь ласка, вкажіть чи розтаможене авто',
            'is_traded.required' => 'Будь ласка, вкажіть чи готові ви до торгу',
            'is_exchanged.required' => 'Будь ласка, вкажіть чи готові ви до обміну'
        ];
    }
}
