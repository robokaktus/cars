<?php

namespace App\Http\Requests\Sale;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
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
            'medias' => [
                'required',
                'max:10'
            ],
            'medias.*' => [
                'required',
                'mimes:jpeg,jpg,png',
                'max:2048'
            ]
        ];
    }

    public function messages()
    {
        {
            return [
                'medias.required' => 'Будь ласка, добавте медіа',
                'medias.max' => 'Максимальна кількість медіа - 10',
                'medias.*.mimes' => 'Допустимі типи медіа: jpg, jpeg, png',
                'medias.*.max' => 'Медіа занадто велике'
            ];
        }
    }
}
