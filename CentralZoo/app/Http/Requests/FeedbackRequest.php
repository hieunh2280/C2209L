<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'phone' => 'required|numeric|integer|min_digits:8|max_digits:10',
            'opinion' => 'required|alpha:ascii|max:500'
        ];
    }
    //Error message
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'phone.required' => 'Please enter a phone number',
            'opinion.required' => 'Please enter your opinion before submit'
        ];
    }
}
