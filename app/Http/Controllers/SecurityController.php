<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\VisitorInvitation;
use App\Models\AccessLog;
use Illuminate\Support\Facades\DB;

class SecurityController extends Controller
{
    public function form()
    {
        return view('security.verify');
    }

    public function verify(Request $request)
{
    $request->validate(['code' => 'required|digits:6']);
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
    ]);

    return response()->json([
        'status' => 'success',
        'type' => 'entry',
        'visitor' => $invitation->visitor->full_name,
        'resident' => $invitation->resident->first_name ." ". $invitation->resident->last_name,
        'message' => 'ENTRY ALLOWED'
    ]);
    
    }

    // EXIT
    if ($invitation->status === 'used') {
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
       ]);

        return response()->json([
            'status' => 'success',
            'type' => 'exit',
            'visitor' => $invitation->visitor->full_name,
            'resident' => $invitation->resident->first_name ." ". $invitation->resident->last_name,
            'message' => 'EXIT RECORDED'
        ]);
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Visitor already exited'
    ]);
}

}
