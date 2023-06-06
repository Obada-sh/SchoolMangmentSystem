<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'img' => 'bail|image|mimes:jpeg,png,jpg,gif',
            'phone_number'=>'bail|required|string',
            'name' => 'bail|required|string',
            'email' => 'bail|required|string|unique:users,email',
            'password' => 'bail|required|string|min:6',
            'role' => 'bail|required|in:Admin,Student,Teacher,Parent',
            'gender' => 'bail|required|in:Male,Female',
            'is_in_bus' => 'bail|required|boolean',
            'left_for_bus' => 'bail|required|integer',
            'left_for_qusat' => 'bail|required|integer',
            'parent_id' => 'bail|required|integer',
            'section_id' => 'bail|required|integer',
            'address'=>'bail|required|string',
            'birth_date'=>'bail|required|date'
        ];

    }
}
