<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\User;
use App\Models\VisitorInvitation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitorMail;
use Illuminate\Support\Facades\Validator;

class VisitorInvitationController extends Controller
{

    /**
     * List all invitations for logged-in resident
     */
    public function index(Request $request, $subdomain)
    {
        $resident = auth()->user();

        $invitations = VisitorInvitation::with(['visitor', 'invitedResident'])
            ->where('resident_id', $resident->id)
            ->where('delete_status', 'no')
            ->latest()
            ->get();

        return view('dashboard.user.resident.index', compact('invitations', 'subdomain'));
    }


    /**
     * Show invite form
     */
    public function create()
    {
        $resident = auth()->user();

        // Other active residents (exclude self)
        $residents = User::where('id', '!=', $resident->id)
            ->where('status', 'active')
            ->get();
        return view('dashboard.user.visitor.visitor_invite', compact('residents'));
    }


    /**
     * Store invitation
     */
    
   

    public function store(Request $request)
    {
        
        $resident = auth()->user();
        $tenant = app('tenant');

        // ================= VALIDATION =================
        $rules = [
            'invite_type' => 'required|in:external,resident,self',
            'visit_date'  => 'required|date|after_or_equal:today',
            'valid_from'  => 'required|date_format:H:i',
            'valid_to'    => 'required|date_format:H:i|after:valid_from',
            'invited_resident_id' => 'nullable|exists:users,id',
        ];

        $validator = Validator::make($request->all(), $rules);

        // Conditional validation
        $validator->sometimes(['first_name', 'last_name', 'phone', 'email'], 'required|string|max:255', function ($input) {
            return $input->invite_type === 'external';
        });

        $validator->sometimes('invited_resident_id', 'required', function ($input) {
            return $input->invite_type === 'resident';
        });

        $validator->validate();

        // ================= CREATE INVITATION =================
        $accessCode = random_int(100000, 999999);
        $payload = [
            'invitation_id' => Str::uuid(),
            'resident_id'   => $resident->id,
            'expires_at'    => $request->visit_date . ' ' . $request->valid_to
        ];
        $encryptedToken = encrypt(json_encode($payload));

        $data = [
            'resident_id'   => $resident->id,
            'visit_date'    => $request->visit_date,
            'valid_from'    => $request->valid_from,
            'valid_to'      => $request->valid_to,
            'access_code'   => $accessCode,
            'qr_token'      => $encryptedToken,
            'delete_status' => 'no',
        ];

        // ================= HANDLE INVITE TYPES =================
        if ($request->invite_type === 'external') {
            $visitor = Visitor::firstOrCreate([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'phone'      => $request->phone,
            ]);

            $data['visitor_id'] = $visitor->id;
            $data['invited_resident_id'] = null;

        } elseif ($request->invite_type === 'resident') {
            $invitedResident = User::find($request->invited_resident_id);
            $data['invited_resident_id'] = $invitedResident->id ?? null;
            $data['visitor_id'] = null;

        } elseif ($request->invite_type === 'self') {
            $data['invited_resident_id'] = $resident->id;
            $data['visitor_id'] = null;
        }

        $invitation = VisitorInvitation::create($data);

        // ================= SEND EMAILS =================
        if ($request->invite_type === 'external' && !empty($visitor->email)) {
            Mail::to($visitor->email)
                ->queue(new VisitorMail($visitor, $invitation, $tenant));
        }

        if ($request->invite_type === 'resident' && !empty($invitedResident->email)) {
            Mail::to($invitedResident->email)
                ->queue(new VisitorMail(null, $invitation, $tenant, true)); 
            // true flag to indicate resident invite (optional, adjust your Mailable)
        }

        return redirect()
            ->route('resident.invitations.index', $tenant->subdomain)
            ->with('success', 'Invitation created successfully.');
    }




    /**
     * Resend access to external visitor
     */
    public function resendQr($subdomain, VisitorInvitation $invitation)
    {

        $tenant = app('tenant');

        // ================= AUTHORIZATION =================
        if ($invitation->resident_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        // ================= DETERMINE INVITE TYPE =================
        $recipientEmail = null;
        $visitor = null;
        $isResidentInvite = false;

        // External visitor invite
        if ($invitation->visitor && $invitation->visitor->email) {
            $recipientEmail = $invitation->visitor->email;
            $visitor = $invitation->visitor;
        }

        // Resident invite
        elseif ($invitation->invited_resident_id) {
            $invitedResident = User::find($invitation->invited_resident_id);

            if ($invitedResident && $invitedResident->email) {
                $recipientEmail = $invitedResident->email;
                $isResidentInvite = true;
            }
        }

        // If no valid email found
        if (!$recipientEmail) {
            return back()->with('error', 'No email available for this invitation.');
        }

        // ================= SEND EMAIL =================
        Mail::to($recipientEmail)
            ->queue(new VisitorMail($visitor, $invitation, $tenant, $isResidentInvite));

        return back()->with('success', 'Access Code resent successfully.');
    }


    /**
     * Soft delete invitation
     */
    public function destroy($subdomain, VisitorInvitation $invitation)
    {
        if ($invitation->resident_id !== auth()->id()) {
            abort(403);
        }

        $invitation->update(['delete_status' => 'yes']);

        return back()->with('success', 'Invitation deleted successfully.');
    }
    
}
