<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $tenant = app('tenant');
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users,email,NULL,id,tenant_id,' . $tenant->id,
            'password' => 'required|string|min:8|confirmed',
            'user_agreement' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name must not be less than 3 characters.',
            'last_name.required' => 'Last name is required',
            'last_name.min' => 'Last name must not be less than 3 characters.',
            'email.required" => "Email is required',
            'email.unique" => "Email is already taken',
            'user_agreement.accepted' => 'You must accept the User Agreement to continue.',
        ];
    }
}
