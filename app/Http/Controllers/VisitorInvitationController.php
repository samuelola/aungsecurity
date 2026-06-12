<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Http\Requests\StoreVisitorInvitationRequest;
use App\Services\VisitorInvitationService;
use App\Models\VisitorInvitation;
use Illuminate\Support\Facades\Cache;

class VisitorInvitationController extends Controller
{

    protected $service;

    public function __construct(VisitorInvitationService $service)
    {
        $this->service = $service;
    }

    /**
     * List all invitations for logged-in resident
     */
    public function index(Request $request, $subdomain)
    {
        $resident = auth()->user();

        $cacheKey = "invitations:resident:{$resident->id}";

        // $invitations = VisitorInvitation::with(['visitor', 'invitedResident','resident'])
        //     ->where('resident_id', $resident->id)
        //     ->where('delete_status', 'no')
        //     ->latest()
        //     ->get();

        $invitations = Cache::remember($cacheKey, 300, function () use ($resident) {

            return VisitorInvitation::with([
                    'visitor',
                    'invitedResident',
                    'resident'
                ])
                ->where('resident_id', $resident->id)
                ->where('delete_status', 'no')
                ->latest()
                ->get();
        });

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

        $this->service->create($request, $resident, $tenant);

        return redirect()
            ->route('resident.invitations.index', $tenant->subdomain)
            ->with('success', 'Invitation created successfully.');
       
    }




    /**
     * Resend access to external visitor
     */
    public function resendQr($subdomain, VisitorInvitation $invitation)
    {

       if ($invitation->resident_id !== auth()->id()) {
            abort(403);
        }

        try {
            $this->service->resend($invitation, app('tenant'));
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

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



    public function show($subdomain,$invitation)
    {
        
        $newinvitation = Crypt::decryptString($invitation);
        $newinvitation_decode = json_decode($newinvitation);
        $invitation = VisitorInvitation::with([
            'resident.kyc',
            'visitor',
            'invitedResident.kyc'
        ])->findOrFail($newinvitation_decode->id);

        $tenant = app('tenant');

        $guestName = $invitation->visitor->first_name 
            ?? $invitation->invitedResident->first_name;

        $guestLast = $invitation->visitor->last_name 
            ?? $invitation->invitedResident->last_name;

        $from = Carbon::parse($invitation->valid_from)->format('g:i A');
        $to = Carbon::parse($invitation->valid_to)->format('g:i A');

        return view('dashboard.user.visitor.show', compact('invitation','tenant'));
    }
    
}
