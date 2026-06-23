<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Kyc;
use Illuminate\Validation\Rule;

class AdminBioRequest extends FormRequest
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
        $tenant = app('tenant');
        $kyc = Kyc::where('user_id', $userId)
            ->where('tenant_id', $tenant->id)
            ->first();
            
        return [
            
            'first_name'=> 'required',
            'last_name' => 'required',
            'email'     => 'required',
            'phone'=> 'required|digits:11',
            // 'phone' => [
            //     'required',
            //     'digits:11',
            //     Rule::unique('kycs', 'phone')
            //         ->where(function ($query) use ($tenant) {
            //             return $query->where('tenant_id', $tenant->id);
            //         })
            //         ->ignore($kyc?->id),
                
            // ],
            // 'agent_number' => [
            //     'required',
            //     'digits_between:11,15',
            //     Rule::unique('kycs', 'agent_number')
            //         ->where(fn ($q) => $q->where('tenant_id', $tenant->id))
            //         ->ignore($kyc?->id),
            // ],
            'address'   => ['required', 'string'],
            'state_id'  => ['required'],
            'lga_id'    => ['required'],
            'occupants' => ['required', 'integer', 'min:1'],
            'flat_number' => ['required', 'integer', 'min:1'],
            'gender'  => ['required'],
        ];
    }
    public function messages(): array
    {
        return [
            'phone.required'    => 'Phone number is required.',
            'phone.digits' => 'Phone number must be 11 digits.',
            'address.required'  => 'Residential address is required.',
            'state_id.required' => 'Please select your state of origin.',
            'lga_id.required'   => 'Please select your local government.',
            'occupants.required'    => 'Occupant is required.',
            'flat_number.required'    => 'Flat number is required.',
            'gender.required'    => 'Gender is required.',
            
        ];
    }
}
