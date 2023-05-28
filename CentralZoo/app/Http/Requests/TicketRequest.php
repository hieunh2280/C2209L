<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'adult_num' => 'numeric|integer',
            'student_num' => 'numeric|integer',
            'child_num' => 'numeric|integer',
            'com_card_num' => 'numeric|integer',
            'fam_1_num' => 'numeric|integer',
            'fam_2_num' => 'numeric|integer',
            'fam_3_num' => 'numeric|integer',
            'fam_4_num' => 'numeric|integer'
        ];
    }
}
