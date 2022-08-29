<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreCrashRequest extends FormRequest
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
            'is_crash_exist' => [
                'required',
                'boolean'
            ],
            'is_top_crash' => [
                'required_if:is_crash_exist,true',
                'boolean'
            ],
            'is_rear_crash' => [
                'required_if:is_crash_exist,true',
                'boolean'
            ],
            'is_front_crash' => [
                'required_if:is_crash_exist,true',
                'boolean'
            ],
            'is_left_crash' => [
                'required_if:is_crash_exist,true',
                'boolean'
            ],
            'is_right_crash' => [
                'required_if:is_crash_exist,true',
                'boolean'
            ],
            'description' => [
                'nullable',
                'string'
            ],
        ];
    }

    public function messages()
    {
        return [
            'is_top_crash.required_if' => 'Будь ласка, вкажіть область ДТП',
            'is_rear_crash.required_if' => 'Будь ласка, вкажіть область ДТП',
            'is_front_crash.required_if' => 'Будь ласка, вкажіть область ДТП',
            'is_left_crash.required_if' => 'Будь ласка, вкажіть область ДТП',
            'is_right_crash.required_if' => 'Будь ласка, вкажіть область ДТП'
        ];
    }
}
