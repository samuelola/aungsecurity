<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorInvitation;
use App\Models\AccessLog;
use Carbon\Carbon;

class GateVerificationController extends Controller
{
    public function showScanForm()
    {
        // No auth required
        return view('security.scan_qr');
    }

    public function verify(Request $request)
    {
        $now = Carbon::now();

        $qrToken = $request->input('qr_token');
        $gateName = $request->input('gate_name', 'Main Gate');

        try {
            $payload = json_decode(decrypt($qrToken), true);
        } catch (\Exception $e) {
            return response()->json(['status' => 'invalid'], 400);
        }

        $invitation = VisitorInvitation::where('qr_token', $qrToken)->first();

        if (!$invitation) {
            return response()->json(['status' => 'invalid']);
        }

        if ($invitation->status === 'used') {
            return response()->json(['status' => 'already_used']);
        }

        if ($invitation->visit_date !== $now->toDateString()) {
            return response()->json(['status' => 'not_today']);
        }

        if ($now->lt(Carbon::parse($invitation->valid_from)) ||
            $now->gt(Carbon::parse($invitation->valid_to))) {
            return response()->json(['status' => 'outside_time_window']);
        }

        // APPROVED – mark as used
        $invitation->update([
            'status' => 'used',
            'used_at' => $now
        ]);

        AccessLog::create([
            'invitation_id' => $invitation->id,
            'gate_name' => $gateName,
            'security_id' => null, // no auth
            'action' => 'entry'
        ]);


        // You can answer questions like:

        // Who entered the estate today?

        // Which resident approved them?

        // What time did they enter?

        // Which gate did they use?

        // Did they exit?

        return response()->json([
            'status' => 'approved',
            'resident' => $invitation->resident->name,
            'visitor' => $invitation->visitor->full_name,
            'purpose' => $invitation->purpose
        ]);
    }
}
