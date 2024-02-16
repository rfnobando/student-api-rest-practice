<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreStudentRequest extends FormRequest
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
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'dateOfBirth' => ['required'],
            'address' => ['required'],
            'phoneNumber' => ['required'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'country' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'date_of_birth' => $this->dateOfBirth,
            'phone_number' => $this->phoneNumber
        ]);
    }
}
