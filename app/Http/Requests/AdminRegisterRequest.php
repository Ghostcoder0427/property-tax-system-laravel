<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' =>  '',
            'password' => '',
            'first_name' => '',
            'last_name' => '',
            'middle_name' => '',
            'sex' => '',
            'dob' => '',
            'current_address' => '',
            'permanent_address' => '',
            'phone_number' => '',
            'role' => 'required',
            'valid_id' => '',
            'documents' => '',
            'status' => '',
        ];
    }
}
