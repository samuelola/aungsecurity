<!DOCTYPE html>
<html>
<head>
    <title>Aung Solutions</title>
    <meta charset="UTF-8">
    <meta property="og:title" content="Estate Visitor Invitation" />
    <meta property="og:description" 
      content="Visit {{ $invitation->resident->first_name }} on {{ $invitation->visit_date }}. Access Code: {{ $invitation->access_code }}" />
    <meta property="og:type" content="website" />
</head>
<body style="font-family: Arial; background:#f5f5f5; padding:40px;">

    <div style="max-width:600px; margin:auto; background:white; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1);">

        <h2 style="text-align:center;">Estate Invitation</h2>

        <hr>

        <p> 
           Hello
            {{ ucfirst($invitation->visitor->first_name) }} 
            {{ ucfirst($invitation->visitor->last_name) }}
        </p>
        <p>You have been invited to visit to visit 
             {{ ucfirst($invitation->resident->first_name) }} 
            {{ ucfirst($invitation->resident->last_name) }}
        </p>

        <p><strong>Resident Flat No:</strong> 
            {{ $invitation->resident->kyc->flat_number }}
        </p>

        <p><strong>Resident Address:</strong> 
            {{ $invitation->resident->kyc->address }}
        </p>

        <p><strong>Estate Name:</strong> 
            {{ $tenant->estate_name }}
        </p>

        <p><strong>Visit Date:</strong> 
            {{ $invitation->visit_date }}
        </p>

        <p><strong>Access Time:</strong> 
            {{ \Carbon\Carbon::parse($invitation->valid_from)->format('g:i A') }}
            -
            {{ \Carbon\Carbon::parse($invitation->valid_to)->format('g:i A') }}
        </p>

        <p style="font-size:20px; margin-top:20px;">
            <strong>Access Code:</strong>
            <span style="color:#d9534f;">
                {{ $invitation->access_code }}
            </span>
        </p>

        <hr>

        <p style="text-align:center; font-size:14px;">
            Show this code at the gate.
        </p>

    </div>

</body>
</html>