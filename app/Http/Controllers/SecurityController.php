<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\VisitorInvitation;
use App\Models\AccessLog;
use Illuminate\Support\Facades\DB;
use App\Models\EmergencyPinLog;
use App\Models\Tenant;

class SecurityController extends Controller
{
    public function form()
    {
        return view('security.verify');
    }


    public function verify(Request $request)
{
        
    $request->validate([
        'code' => 'required|digits:6'
    ], [
        'code.required' => 'Please enter access code',
        'code.digits' => 'Access code must be 6 digits'
    ]);

    
    $gateName = $request->gate_name;
    $invitation = VisitorInvitation::with(['visitor', 'resident'])
        ->where('access_code', $request->code)
        ->where('delete_status', 'no')
        ->first();

    if (!$invitation) {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid Code'
        ]);
    }

    $now = Carbon::now();
    $expiry = Carbon::parse($invitation->visit_date.' '.$invitation->valid_to);

    if ($now->gt($expiry)) {
        $invitation->update(['status' => 'expired']);
        return response()->json([
            'status' => 'error',
            'message' => 'Pass Expired'
        ]);
    }

    // ENTRY
    if ($invitation->status === 'pending') {
        $tenant = app('tenant');
        $invitation->update([
            'status' => 'used',
            'used_at' => $now
        ]);

        

    DB::table('access_logs')->insert([
        'invitation_id' => $invitation->id,
        'gate_name'     => $gateName,
        'security_id'   => null,
        'action'        => 'entry',
        'created_at'    => now(),
        'updated_at'    => now(),
        'tenant_id'     => $tenant->id
    ]);

    $from = \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_from)->format('g:i A');
    $to = \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_to)->format('g:i A');
    $tenant = app('tenant');
    return response()->json([
        'status' => 'success',
        'type' => 'entry',
        'visitor' => optional($invitation->visitor)->first_name
        ? ucfirst($invitation->visitor->first_name).' '.ucfirst($invitation->visitor->last_name)
        : 'Myself',
        'visitor_date' =>  $invitation->visit_date,
        'visit_time' => $from ." - ". $to,
        'resident_name' => optional($invitation->resident)->first_name
        ? ucfirst($invitation->resident->first_name).' '.ucfirst($invitation->resident->last_name)
        : 'Unknown Resident',
        
        'resident_phone' => $invitation->resident->kyc->phone,
        'flat_number' => $invitation->resident->kyc->flat_number,
        'address' => $invitation->resident->kyc->address,
        'estate_name' => $tenant->estate_name,
        'message' => 'ENTRY ALLOWED'
    ]);
    
    }

    // EXIT
    if ($invitation->status === 'used') {
        $tenant = app('tenant');
        $invitation->update([
            'status' => 'exited',
            'exited_at' => $now
        ]);

       

        DB::table('access_logs')->insert([
        'invitation_id' => $invitation->id,
        'gate_name'     => $gateName,
        'security_id'   => null,
        'action'        => 'exit',
        'created_at'    => now(),
        'updated_at'    => now(),
        'tenant_id'     => $tenant->id
       ]);


       $from = \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_from)->format('g:i A');
       $to = \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_to)->format('g:i A');
       $tenant = app('tenant');
        return response()->json([
            'status' => 'success',
            'type' => 'exit',
            'visitor' => optional($invitation->visitor)->first_name
            ? ucfirst($invitation->visitor->first_name).' '.ucfirst($invitation->visitor->last_name)
            : 'Myself',
            'visitor_date' =>  $invitation->visit_date,
            'visit_time' => $from ." - ". $to,
            'resident_name' => optional($invitation->resident)->first_name
            ? ucfirst($invitation->resident->first_name).' '.ucfirst($invitation->resident->last_name)
            : 'Unknown Resident',
            'resident_phone' => $invitation->resident->kyc->phone,
            'flat_number' => $invitation->resident->kyc->flat_number,
            'address' => $invitation->resident->kyc->address,
            'estate_name' => $tenant->estate_name,
            'message' => 'EXIT RECORDED'
        ]);
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Visitor already exited'
    ]);
}


public function emergencyForm()
{
    return view('security.emergency_form');
}

public function verifyEmergencyPin(Request $request)
{
    $request->validate([
        'resident_id' => 'required',
        'emergency_pin' => 'required',
    ],
    [
        'emergency_pin.required' => 'Please enter access code',
        'emergency_pin.digits' =>  'Access code must be 6 digits',
        'resident_id.required' => 'Enter your Resident ID'
    ]
    
    );

    
    $tenant = app('tenant');
    $kyc = Kyc::where('resident_id', $request->resident_id)->first();

    if (!$kyc) {
        return response()->json([
            'status' => 'error',
            'message' => 'Resident not found'
        ]);
    }

    if ($kyc->emergency_pin !== $request->emergency_pin) {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid emergency PIN'
        ]);
    }

    $lastLog = EmergencyPinLog::where([
        'tenant_id' => $tenant->id,
        'resident_id' => $kyc->resident_id,
    ])
    ->latest()
    ->first();

    $action = ($lastLog && $lastLog->action === 'entry')
        ? 'exit'
        : 'entry';

    $kyc->update([
        'emergency_pin_used_at' => now(),
    ]);

    EmergencyPinLog::create([
        'kyc_id' => $kyc->id,
        'resident_id' => $kyc->resident_id,
        'tenant_id' => $tenant->id,
        'user_id' => auth()->id(),
        'action' => $action,
        'emergency_pin_used_at' => now(),
        'ip' => request()->ip(),
    ]);

    return response()->json([
        'status' => 'success',
        'message' => strtoupper($action) . ' ALLOWED'
    ]);
}

}
