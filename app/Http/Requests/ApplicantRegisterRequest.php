<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'sex' => 'required',
            'dob' => 'required|date',
            'region_code' => 'required',
            'province_code' => 'required',
            'city_municipality_code' => 'required',
            'barangay_code' => 'required',
            'house_number' => 'required',
            'phone_number' => 'required|unique:applicants,phone_number',
            'email' =>  'required|email|unique:applicants,email',
            'password' => 'required|confirmed|min:8',
            'user_type' => 'required',
            'valid_id' => 'required|image|mimes:png,jpg,pdf,docx',
            'documents' => 'required|image|mimes:png,jpg,pdf,docx',

        ];
    }
}
