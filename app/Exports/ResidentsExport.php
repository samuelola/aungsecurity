<?php 

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ResidentsExport implements FromQuery, WithHeadings, WithMapping
{
    protected $tenantId;

    public function __construct($tenantId)
    {
        $this->tenantId = $tenantId;
    }

    public function query()
    {
        return User::query()
            ->where('tenant_id', $this->tenantId)
            ->with('kyc');
    }

    public function headings(): array
    {
        return [
            'ID',
            'FirstName',
            'LastName',
            'Email',
            'Phone',
            'Resident ID',
            'Flat Number',
            'Ocuppants',
            'Resident Emergency Pin',
            'Status',
            'Visitor Emergency Pin',
            'Remarks'
        ];
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->first_name,
            $user->last_name,
            $user->email,
            $user->kyc?->phone,
            $user->kyc?->resident_id,
            $user->kyc?->flat_number,
            $user->kyc?->occupants,
            $user->kyc?->emergency_pin,
            $user->kyc?->kyc_completed == true ? 'Verified' : 'Not verified',
            $user->kyc?->emergency_visitor_pin,
        ];
    }
}