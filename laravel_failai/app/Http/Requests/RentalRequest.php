<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'brand' => ['required', 'string', 'min:1', 'max:255'],
            'model' => ['required', 'string', 'min:1', 'max:255'],
            'power' => ['nullable', 'string', 'min:1', 'max:3'],
            'fuel_type_id' => ['required', 'integer', 'exists:fuel_types,id'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'gearbox_id' => ['required', 'integer', 'exists:gearboxes,id'],
            'user_id' => ['nullable', 'integer', 'exists:users,id'],
            'price' => ['required', 'integer', 'min:0'],
            'year' => ['nullable', 'string', 'min:4' ,'max:4'],
            'additional_info' => ['nullable', 'string', 'min:3'],
            'images' => 'nullable',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg,webp'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute is required',
            'string' => ':attribute has to be made from characters',
            'min' => 'Min :attribute length :min symbols',
            'max' => 'Max :attribute length :max symbols',
            'integer' => ':attribute has to be integer',
            'exists' => ':attribute has to match any of :exists',
            // ....
        ];
    }
}
