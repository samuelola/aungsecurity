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
            'occupants' => ['required'],
            'flat_number' => ['required'],
            'agent_name' => ['required', 'string'],
            'agent_number' => 'required|digits_between:11,15|unique:kycs,phone'
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
            'occupants.required'    => 'Occupant is required.',
            'flat_number.required'    => 'Flat number is required.',
            'agent_name.required'    => 'Agent Name is required.',
            'agent_number.required'    => 'Agent Number is required.',
        ];
    }
}
