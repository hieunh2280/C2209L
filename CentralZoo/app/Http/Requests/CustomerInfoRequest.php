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
            'phone' => 'required|numeric|digits_between:8,10|min:0',
            'datevisit' => 'nullable'

        ];
    }

    public function messages(): array
    {
    return [
        'firstname.required' => 'Please enter your first name',
        'firstname.required' => 'Please enter your last name',
        'email.required' => 'Please enter your email',
        'phone.required' => 'Please enter your phone number',
    ];
    }
}
