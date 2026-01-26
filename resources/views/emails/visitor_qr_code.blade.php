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
        <strong>{{ $invitation->resident->name }}</strong>.
    </p>

    <p><strong>Purpose:</strong> {{ $invitation->purpose }}</p>
    <p><strong>Date:</strong> {{ $invitation->visit_date }}</p>
    <p><strong>Valid Time:</strong> {{ $invitation->getRawOriginal('valid_from') }} – {{ $invitation->getRawOriginal('valid_to') }}</p>

    <p>Please present the QR code below at the estate gate:</p>

    <!-- <img src="{{ $qrPublicUrl }}" alt="Visitor QR Code" width="250"> -->

    <p style="margin-top:20px;">
        This QR code is time-limited and expires automatically.
    </p>

    <p>
        Safe travels,<br>
        <strong>AUNG Estate Security</strong>
    </p>
</body>
</html>
