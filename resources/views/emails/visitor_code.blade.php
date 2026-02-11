<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visitor QR Code</title>
</head>
<body style="font-family: Arial, sans-serif;">
   
    <h2>Hello {{ ucfirst($invitation->visitor->first_name) }} {{ ucfirst($invitation->visitor->last_name) }},</h2>

    <p>
        You have been invited to visit
        <strong>{{ ucfirst($invitation->resident->first_name) }} {{ ucfirst($invitation->resident->last_name) }}</strong>.
    </p>

    <p><strong>Valid Date:</strong> {{ $invitation->visit_date }}</p>
    <p><strong>Valid Time:</strong> {{ \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_from)->format('g:i A') }} – {{ \Carbon\Carbon::createFromFormat('H:i:s', $invitation->valid_to)->format('g:i A') }}</p>

    <p>Please present the Code below at the estate gate for verification:</p>

     <h1 style="letter-spacing:6px">{{ $invitation->access_code }}</h1>

    <p style="margin-top:20px;">
        This Code is time-limited and expires automatically.
    </p>

    <p>Safe travels,<br>
        <strong>AUNG Solutions Nigeria Limited</strong>
    </p>
</body>
</html>
