<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BioRequest extends FormRequest
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
        $userId = auth()->id();
        return [
            'phone'     => 'required|digits_between:11,15|unique:kycs,phone',
            'address'   => ['required', 'string'],
            'state_id'  => ['required'],
            'lga_id'    => ['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'phone.required'    => 'Phone number is required.',
            'phone.digits_between' => 'Phone number must be between 11 and 15 digits.',
            'address.required'  => 'Residential address is required.',
            'state_id.required' => 'Please select your state of origin.',
            'lga_id.required'   => 'Please select your local government.',
        ];
    }
}
