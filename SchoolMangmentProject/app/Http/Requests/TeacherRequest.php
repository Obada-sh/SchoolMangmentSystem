<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'salary'=>'bail|required|integer',
            'subjects'=>'bail|required|array'
        ];
    }
}
