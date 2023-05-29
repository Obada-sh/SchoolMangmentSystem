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
                'img'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'name'=>'required|string',
                'email'=>'required|string|unique:users,email',
                'password'=>'required|string|min:6',
                'role'=>'required|in:Admin,Student,Teacher,Parent',
                'gender'=>'required|in:Male,Femal',
                'is_in_bus'=>'required|boolean',
                'left_for_bus'=>'required|integer',
                'left_for_qusat'=>'required|integer',
                'parent_id'=>'required|integer',
                'section_id'=>'required|integer'
        ];
    }
}
