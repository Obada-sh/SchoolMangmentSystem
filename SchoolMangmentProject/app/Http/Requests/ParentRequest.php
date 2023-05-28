<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequest extends FormRequest
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
                'img'=>'image',
                'name'=>'required|string',
                'email'=>'required|string|unique:users,email',
                'password'=>'required|string|min:6',
                'role'=>'required|in:Admin,Student,Teacher,Parent',
                'gender'=>'required|in:Male,Femal',
        ];

    }
}
