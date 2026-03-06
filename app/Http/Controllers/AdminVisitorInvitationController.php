<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccessLog;
use App\Models\VisitorInvitation;


class AdminVisitorInvitationController extends Controller
{

    /**
     * List all invitations for logged-in resident
     */
    public function adminVisitorLog(Request $request, $subdomain)
    {
        
        $accesslogs = AccessLog::with('Invitation')
            ->latest()
            ->get();  

        return view('dashboard.admin.visitor.index', compact('accesslogs'));
    }

    public function adminInviteLog(Request $request, $subdomain)
    {
        
        $invitelogs = VisitorInvitation::with(['Visitor','resident','invitedResident'])
            ->latest()
            ->get();  
        
        return view('dashboard.admin.visitor.invite', compact('invitelogs'));
    }


    
    
}
