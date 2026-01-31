<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Visitor QR Code</title>
</head>
<body style="font-family: Arial, sans-serif;">
    <h2>Hello {{ $visitor->full_name }},</h2>

    <p>
        You have been invited to visit
        <strong>{{ $invitation->resident->first_name }} {{ $invitation->resident->last_name }}</strong>.
    </p>

    <p><strong>Valid Date:</strong> {{ $invitation->visit_date }}</p>
    <p><strong>Valid Time:</strong> {{ $invitation->getRawOriginal('valid_from') }} – {{ $invitation->getRawOriginal('valid_to') }}</p>

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
