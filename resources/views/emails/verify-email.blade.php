<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aung Solutions Email Verification</title>
</head>
<body style="font-family: Arial, sans-serif; background-color:#f4f6f8; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:8px;">

        <h2>Hello {{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }},</h2>

        <p>Your verification code is:</p>

        <h1>{{ $user->verification_code }}</h1>

        <p>Enter this code to verify your account.</p>

        
    </div>

</body>
</html>
