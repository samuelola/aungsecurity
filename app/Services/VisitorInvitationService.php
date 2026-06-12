<?php

namespace App\Services;

use App\Models\Visitor;
use App\Models\User;
use App\Models\VisitorInvitation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitorMail;

class VisitorInvitationService
{
    public function create($request, $resident, $tenant)
    {
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
            'tenant_id'     => $tenant->id
        ];

        [$data, $visitor, $invitedResident] = $this->handleInviteType($request, $resident, $data);

        $invitation = VisitorInvitation::create($data);

        $this->sendEmails($request, $visitor, $invitedResident, $invitation, $tenant, $resident);

        return $invitation;
    }

    private function handleInviteType($request, $resident, $data)
    {
        $visitor = null;
        $invitedResident = null;

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

            if (!empty($request->self_first_name) || !empty($request->self_last_name)) {

                $visitor = Visitor::firstOrCreate([
                    'first_name' => $request->self_first_name,
                    'last_name'  => $request->self_last_name,
                    'email'      => $resident->email,
                    'phone'      => $resident->phone,
                ]);

                $data['visitor_id'] = $visitor->id;
            }

            $data['invited_resident_id'] = $resident->id;
        }

        return [$data, $visitor, $invitedResident];
    }

    private function sendEmails($request, $visitor, $invitedResident, $invitation, $tenant, $resident)
    {
        if ($request->invite_type === 'external' && $visitor?->email) {
            Mail::to($visitor->email)
                ->queue(new VisitorMail($visitor, $invitation, $tenant));
        }

        if ($request->invite_type === 'resident' && $invitedResident?->email) {
            Mail::to($invitedResident->email)
                ->queue(new VisitorMail(null, $invitation, $tenant, true));
        }

        if ($request->invite_type === 'self' && $resident?->email) {
            Mail::to($resident->email)
                ->queue(new VisitorMail($visitor, $invitation, $tenant, true));
        }
    }

    public function resend($invitation, $tenant)
    {
        $recipientEmail = null;
        $visitor = null;
        $isResidentInvite = false;

        if ($invitation->visitor?->email) {
            $recipientEmail = $invitation->visitor->email;
            $visitor = $invitation->visitor;
        } elseif ($invitation->invited_resident_id) {
            $resident = User::find($invitation->invited_resident_id);

            if ($resident?->email) {
                $recipientEmail = $resident->email;
                $isResidentInvite = true;
            }
        }

        if (!$recipientEmail) {
            throw new \Exception('No email available.');
        }

        Mail::to($recipientEmail)
            ->queue(new VisitorMail($visitor, $invitation, $tenant, $isResidentInvite));
    }
}