<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorInvitation;
use App\Models\AccessLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class GateVerificationController extends Controller
{
    public function showScanForm()
    {
        // No auth required
        return view('security.scan_qr');
    }

   public function verify(Request $request)
{
    try {
        $now = Carbon::now(config('app.timezone'));

        // Accept JSON OR form-data
        $qrToken = $request->input('qr_token');
        $gateName = $request->input('gate_name', 'Main Gate');

        if (!$qrToken) {
            return response()->json(['status' => 'invalid', 'reason' => 'no_token'], 400);
        }

        // Ensure token is decryptable
        try {
            decrypt($qrToken);
        } catch (\Exception $e) {
            return response()->json(['status' => 'invalid', 'reason' => 'bad_token'], 400);
        }

        $invitation = VisitorInvitation::where('qr_token', $qrToken)->first();

        if (!$invitation) {
            return response()->json(['status' => 'invalid', 'reason' => 'not_found'], 404);
        }

        if ($invitation->status === 'exited') {
            return response()->json(['status' => 'already_exited']);
        }

        // ================= ENTRY =================
        if ($invitation->status === 'pending') {

            $start = Carbon::parse($invitation->visit_date.' '.$invitation->valid_from, config('app.timezone'));
            $end   = Carbon::parse($invitation->visit_date.' '.$invitation->valid_to, config('app.timezone'));

            if ($now->lt($start) || $now->gt($end)) {
                return response()->json([
                    'status' => 'outside_time_window',
                    'debug' => [
                        'now' => $now->toDateTimeString(),
                        'start' => $start->toDateTimeString(),
                        'end' => $end->toDateTimeString()
                    ]
                ]);
            }

            $invitation->update([
                'status' => 'used',
                'used_at' => $now
            ]);
            
            
            AccessLog::create([
                'invitation_id' => $invitation->id,
                'gate_name' => $gateName,
                'security_id' => null,
                'action' => 'entry'
            ]);

            return response()->json([
                'status' => 'entry_approved',
                'visitor' => $invitation->visitor->full_name ?? 'Unknown',
                'resident' => $invitation->resident->first_name . $invitation->resident->last_name ?? 'Unknown'
            ]);
        }

        // ================= EXIT =================
        if ($invitation->status === 'used') {
            
            
            $invitation->update([
                'status' => 'exited',
                'exited_at' => $now
            ]);

            AccessLog::create([
                'invitation_id' => $invitation->id,
                'gate_name' => $gateName,
                'security_id' => null,
                'action' => 'exit'
            ]);

            return response()->json([
                'status' => 'exit_logged',
                'visitor' => $invitation->visitor->full_name ?? 'Unknown'
            ]);
        }

        return response()->json(['status' => 'invalid']);

    } catch (\Throwable $e) {
        return response()->json([
            'status' => 'server_error',
            'message' => $e->getMessage(),
            'line' => $e->getLine()
        ], 500);
    }
}


}
