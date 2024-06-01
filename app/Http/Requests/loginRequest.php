<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'username' => 'required|string|min:6',
            'useremail' => 'required|email',
            'userpassword' => 'required|string|min:8',
        ];
    }
    public function messages()
    {
        return [
            'username.required' => 'This field cannot be empty',
            'username.string' => 'The username must be a string',
            'username.min' => 'The username must be at least 6 characters',
            'useremail.required' => 'This field cannot be empty',
            'useremail.email' => 'Please enter a valid email address',
            'userpassword.required' => 'This field cannot be empty',
            'userpassword.string' => 'The password must be a string',
            'userpassword.min' => 'The password must be at least 8 characters',
        ];
    }
}
