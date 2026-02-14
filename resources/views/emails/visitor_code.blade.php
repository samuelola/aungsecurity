<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visitor Access Code</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f4f6f8; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:8px;">

        {{-- Greeting --}}
        @if($isResidentInvite)
            <h2>
                Hello {{ ucfirst($invitation->invitedResident->first_name ?? $invitation->resident->first_name) }},
            </h2>
            <p>
                You have been invited by 
                <strong>{{ ucfirst($invitation->resident->first_name) }} {{ ucfirst($invitation->resident->last_name) }}</strong>
                to access the estate.
            </p>
        @else
            <h2>
                Hello {{ ucfirst($visitor->first_name ?? '') }} {{ ucfirst($visitor->last_name ?? '') }},
            </h2>
            <p>
                You have been invited to visit
                <strong>{{ ucfirst($invitation->resident->first_name) }} {{ ucfirst($invitation->resident->last_name) }}</strong>.
            </p>
        @endif

        <hr style="margin:20px 0;">

        {{-- Resident Details --}}
        <p><strong>Estate:</strong> {{ $tenant->estate_name }} Estate</p>

        <p><strong>Flat Number:</strong>
            {{ $invitation->resident->kyc->flat_number ?? 'N/A' }}
        </p>

        <p><strong>Resident Address:</strong>
            {{ $invitation->resident->kyc->address ?? 'N/A' }}
        </p>

        <p><strong>Valid Date:</strong> {{ $invitation->visit_date }}</p>

        <p>
            <strong>Valid Time:</strong>
            {{ \Carbon\Carbon::parse($invitation->valid_from)->format('g:i A') }}
            –
            {{ \Carbon\Carbon::parse($invitation->valid_to)->format('g:i A') }}
        </p>

        <hr style="margin:20px 0;">

        {{-- Access Code --}}
        <p>Please present the access code below at the estate gate for verification:</p>

        <div style="text-align:center; margin:25px 0;">
            <span style="
                font-size:32px;
                letter-spacing:8px;
                font-weight:bold;
                background:#f0f3f7;
                padding:15px 25px;
                border-radius:6px;
                display:inline-block;
            ">
                {{ $invitation->access_code }}
            </span>
        </div>

        <p style="color:#666;">
             This access code is time-limited and will expire automatically after the scheduled time.
        </p>

        <hr style="margin:20px 0;">

        <p>
            Safe travels,<br>
            <strong>AUNG Solutions Nigeria Limited</strong>
        </p>

    </div>

</body>
</html>
