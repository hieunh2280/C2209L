<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

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
            //
            'name' => 'nullable|alpha:ascii|max:255',
            'email' => 'nullable|email:rfc,dns|max:255',
            'phone' => 'nullable|numeric|min_digits:8|max_digits:10|min:0',
            'opinion' => 'required|alpha:ascii'
        ];
    }

    public function messages(): array
    {
    return [
        'name.required' => 'Please provide us your name only',
        'email.required' => 'Please provide an email',
        'phone' => 'Please enter a phone number',
        'opinion' => 'Please provide your opinion before you submit'
    ];
    }
}
