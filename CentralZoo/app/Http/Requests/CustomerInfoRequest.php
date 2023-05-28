<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerInfoRequest extends FormRequest
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
            //
            'firstname' => 'required|alpha:ascii|max:255',
            'lastname' => 'required|alpha:ascii|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'required|numeric|min_digits:8|max_digits:10|min:0'
        ];
    }

    public function messages(): array
    {
    return [
        'firstname.required' => 'Please enter your first name',
        'firstname.required' => 'Please enter your last name',
        'email.required' => 'Please enter your email',
        'phone' => 'Please enter your phone number',
    ];
    }
}
