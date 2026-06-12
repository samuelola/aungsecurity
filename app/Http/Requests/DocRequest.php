<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Kyc;

class DocRequest extends FormRequest
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
        $user = auth()->user();

        $kyc = Kyc::where('user_id', $user->id)
            ->where('tenant_id', $tenant->id)
            ->first();
        return [
            'id_type' => 'required|string',
            'id_document' => [
                $kyc && $kyc->id_document ? 'nullable' : 'required',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:1048',
            ],
        ];
    }
    
    public function messages(): array
    {
        return [
            'id_document.required' => 'Please upload your ID document.',
            'id_document.mimes' => 'Only JPG, JPEG, PNG and PDF files are allowed.',
            'id_document.max' => 'File size must not exceed 1MB.',
        ];
    }
}
