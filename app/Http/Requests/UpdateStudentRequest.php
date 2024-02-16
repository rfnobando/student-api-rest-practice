<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
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
        } else {
            return [
                'firstName' => ['sometimes', 'required'],
                'lastName' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'dateOfBirth' => ['sometimes', 'required'],
                'address' => ['sometimes', 'required'],
                'phoneNumber' => ['sometimes', 'required'],
                'gender' => ['sometimes', 'required', Rule::in(['male', 'female'])],
                'country' => ['sometimes', 'required'],
                'city' => ['sometimes', 'required'],
                'zipcode' => ['sometimes', 'required']
            ];
        }
    }

    protected function prepareForValidation()
    {
        $attributes = [
            'first_name' => 'firstName',
            'last_name' => 'lastName',
            'date_of_birth' => 'dateOfBirth',
            'phone_number' => 'phoneNumber',
        ];
    
        foreach ($attributes as $attribute => $property) {
            if ($this->$property) {
                $this->merge([$attribute => $this->$property]);
            }
        }
    }
}
