<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\VisitorInvitation;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitorQrCodeMail;

class VisitorInvitationController extends Controller
{
    // Show the form
    public function create()
    {
        return view('dashboard.user.visitor.visitor_invite');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $resident = auth()->user();

        // Business rules
        if ($resident->status !== 'active') {
            return back()->with('error', 'Your account is suspended.');
        }

        if ($resident->fees_status === 'overdue') {
            return back()->with('error', 'Outstanding estate fees.');
        }

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'purpose' => 'required|string|max:255',
            'visit_date' => 'required|date|after_or_equal:today',
            'valid_from' => 'required',
            'valid_to' => 'required|after:valid_from',
        ]);

        // Create or get visitor
        $visitor = Visitor::firstOrCreate([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        // Generate encrypted QR token
        $payload = [
            'invitation_id' => Str::uuid(),
            'resident_id' => $resident->id,
            'expires_at' => $request->visit_date . ' ' . $request->valid_to
        ];

        $encryptedToken = encrypt(json_encode($payload));

        // Save invitation
        $invitation = VisitorInvitation::create([
            'resident_id' => $resident->id,
            'visitor_id' => $visitor->id,
            'purpose' => $request->purpose,
            'visit_date' => $request->visit_date,
            'valid_from' => $request->valid_from,
            'valid_to' => $request->valid_to,
            'qr_token' => $encryptedToken,
        ]);

        // Send email if visitor provided email
        if ($visitor->email) {
            Mail::to($visitor->email)
                ->queue(new VisitorQrCodeMail($visitor, $invitation));
        }

        $tenant = app('tenant');

        return redirect()->route('visitor.create',$tenant->subdomain)
            ->with('success', 'Visitor invitation created successfully. QR code sent if email provided.');
    }
}
