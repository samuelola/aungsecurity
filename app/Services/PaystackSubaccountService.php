<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Http;
use App\Models\Subaccount;



class PaystackSubaccountService
{
    public function verifyAccount($accountNumber, $bankCode)
    {
        $response = Http::withToken(config('services.paystack.secret'))
            ->retry(3, 200) // retry 3 times, wait 200ms
            ->withOptions([
                'verify' => false
            ])
            ->get('https://api.paystack.co/bank/resolve', [
                'account_number' => $accountNumber,
                'bank_code' => $bankCode,
            ]);

        if ($response->failed()) {
            throw new \Exception('Unable to verify account.');
        }

        $data = $response->json();

        if (!($data['status'] ?? false)) {
            throw new \Exception($data['message']);
        }

        return $data['data']['account_name'];
    }

    public function create(array $data)
    {
        if (Subaccount::where('tenant_id', $data['tenant_id'])->exists()) {
            throw new \Exception('Tenant already has a subaccount.');
        }

        if (empty($data['account_name']) || $data['account_name'] === 'Invalid account details') {
            throw new \Exception('Invalid or unverified account.');
        }

        $response = Http::withToken(config('services.paystack.secret'))
            ->retry(3, 200)
            ->withOptions([
                'verify' => false
            ])
            ->post('https://api.paystack.co/subaccount', [
                "business_name" => $data['business_name'],
                "settlement_bank" => $data['bank_code'],
                "account_number" => $data['account_number'],
                "percentage_charge" => 0,
            ]);

        if ($response->failed()) {
            throw new \Exception('Failed to create subaccount.');
        }

        $result = $response->json();

        return Subaccount::create([
            'tenant_id' => $data['tenant_id'],
            'subaccount_code' => $result['data']['subaccount_code'],
            'business_name' => $data['business_name'],
            'account_number' => $data['account_number'],
            'bank_code' => $data['bank_code'],
            'account_name' => $data['account_name'],
        ]);
    }
}