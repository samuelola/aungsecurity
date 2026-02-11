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
use App\Mail\VisitorMail;
use Illuminate\Support\Facades\Storage;


class VisitorInvitationController extends Controller
{

    public function index(Request $request, $subdomain)
    {
        $resident = auth()->user();

        $invitations = VisitorInvitation::with('visitor')
            ->where(['resident_id'=>$resident->id,'delete_status'=>'no'])
            ->latest()
            ->get();   

        return view('dashboard.user.resident.index', compact('invitations','subdomain'));
    }
    

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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            // 'purpose' => 'required|string|max:255',
            'visit_date' => 'required|date|after_or_equal:today',
            'valid_from' => 'required|date_format:H:i',
            'valid_to'   => 'required|date_format:H:i|after:valid_from',
        ]);

        // Create or get visitor
        $visitor = Visitor::firstOrCreate([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
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
        $accessCode = random_int(100000, 999999);

        // Save invitation
        $invitation = VisitorInvitation::create([
            'resident_id' => $resident->id,
            'visitor_id' => $visitor->id,
            // 'purpose' => $request->purpose,
            'visit_date' => $request->visit_date,
            'valid_from' => $request->valid_from,
            'valid_to' => $request->valid_to,
            'access_code' => $accessCode,
            'qr_token' => $encryptedToken,
            'delete_status' => 'no'
        ]);

        // Send email if visitor provided email
        if ($visitor->email) {
            // Mail::to($visitor->email)
            //     ->queue(new VisitorQrCodeMail($visitor, $invitation));
            Mail::to($visitor->email)
                ->queue(new VisitorMail($visitor, $invitation));    
                
        }

        $tenant = app('tenant');

        return redirect()->route('resident.invitations.index',$tenant->subdomain)
            ->with('success', 'Visitor invitation created successfully. QR code sent if email provided.');
    }

    public function resendQr($subdomain,VisitorInvitation $invitation)
    {
        // Ensure the invitation belongs to this resident
        if ($invitation->resident_id !== auth()->id()) {
            abort(403);
        }

        Mail::to($invitation->visitor->email)
            ->queue(new VisitorMail($invitation->visitor, $invitation));    
   
        return back()->with('success', 'Access Code resent to visitor.');
    }

    public function destroy($subdomain,VisitorInvitation $invitation)
    {
        // Optional safety: prevent deleting if already used
        // if ($invitation->status != 'pending' && $invitation->delete_status == 'no') {
        //     return back()->with('error', 'Only pending invitations can be deleted.');
        // }


        // Delete QR image if exists
        // $path = 'qrcodes/' . $invitation->id . '.png';
        // if (\Storage::disk('public')->exists($path)) {
        //     \Storage::disk('public')->delete($path);
        // }

        //$invitation->delete();

        $invitation->update(['delete_status'=>'yes']);

        return back()->with('success', 'Visitor invitation deleted successfully.');
    }

}
