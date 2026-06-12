<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVisitorInvitationRequest extends FormRequest
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
            'invite_type' => 'required|in:external,resident,self',
            'visit_date'  => 'required|date|after_or_equal:today',
            'valid_from'  => 'required|date_format:H:i',
            'valid_to'    => 'required|date_format:H:i|after:valid_from',
            'invited_resident_id' => 'nullable|exists:users,id',

            // external
            'first_name' => 'required_if:invite_type,external|string|max:255',
            'last_name'  => 'required_if:invite_type,external|string|max:255',
            'phone'      => 'required_if:invite_type,external|string|max:255',
            'email'      => 'required_if:invite_type,external|string|max:255',

            // self
            'self_first_name' => 'nullable|string|max:255',
            'self_last_name'  => 'nullable|string|max:255',
        ];
    }
}
