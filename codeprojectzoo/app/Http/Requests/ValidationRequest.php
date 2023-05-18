<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|alpha:ascii|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'adult_num' => 'required|numeric|integer|min:0',
            'senior_num' => 'required|numeric|integer|min:0',
            'child_num' => 'required|numeric|integer|min:0',
            'date' => 'required|date'
        ];
    }
    public function messages(): array
    {
    return [
        'name.required' => 'Please enter your name',
        'email.required' => 'Please enter your email',
        'date.required' => 'Please select a date',
    ];
    }
}
