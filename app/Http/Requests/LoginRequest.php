<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        $rules = [
            'email' => ['email', 'required'],
            'password' => ['required', 'min:8'],
        ];

        if ($this->is('/register')) {
            $rules['user'] = ['required', 'min:4'];
        }

        return $rules;
    }

    public function messages(): array {
        return [
            "user.required" => "O campo nome tem que ser preenchido",
            "user.min" => "O campo nome tem que ter ao menos :min caracteres",
            "email.required" => "O campo email deve ser preenchido",
            "email.email" => "O campo deve ser um email válido",
            "password.required" => "O campo senha deve ser preenchido",
            "password.min" => "A senha deve conter ao menos :min caracteres"
        ];
    }
}
