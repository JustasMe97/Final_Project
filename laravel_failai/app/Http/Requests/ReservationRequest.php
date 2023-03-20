<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules()
    {
        return [
            'rental_id' => ['required', 'integer', 'exists:rentals,id'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'name_of_renter' => ['required', 'string', 'min:3', 'max:50'],
            'email_of_renter' => ['required', 'email', 'min:3', 'max:50'],
            'phone_of_renter' => ['nullable', 'string', 'min:3', 'max:15'],
            'message_of_renter' =>['nullable', 'string', 'min:3', 'max:255']
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
            'email' => ':attribute neteisingas',
            'after_or_equal' => 'pabaigos data negali būti ankstesnė už pradžios datą'
            // ....
        ];
    }
}
