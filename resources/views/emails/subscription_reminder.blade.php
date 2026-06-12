<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subscription Reminder</title>
</head>
<body style="margin:0; padding:0; background:#f5f7fb; font-family: Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td align="center">

    <table width="600" style="background:#ffffff; border-radius:10px; overflow:hidden;">

        <!-- Header -->
        <tr>
            <td style="background:#4f46e5; padding:20px; text-align:center; color:#fff;">
                <h2 style="margin:0;">Subscription Reminder</h2>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:30px; color:#333;">

                <p>Hello {{ $user ?? 'User' }},</p>

                <p>
                    Your subscription plan 
                    <strong>{{ $plan->name }}</strong> 
                    will expire in 
                    <strong>{{ $daysLeft }} days</strong>.
                </p>

                <table width="100%" style="margin:20px 0; border-collapse: collapse;">
                    <tr>
                        <td style="padding:10px; border:1px solid #eee;"><strong>Plan</strong></td>
                        <td style="padding:10px; border:1px solid #eee;">{{ $plan->name }}</td>
                    </tr>
                    <tr>
                        <td style="padding:10px; border:1px solid #eee;"><strong>Billing Cycle</strong></td>
                        <td style="padding:10px; border:1px solid #eee;">{{ ucfirst($subscription->billing_cycle) }}</td>
                    </tr>
                    <tr>
                        <td style="padding:10px; border:1px solid #eee;"><strong>Expiry Date</strong></td>
                        <td style="padding:10px; border:1px solid #eee;">
                            {{ \Carbon\Carbon::parse($subscription->ends_at)->format('F j, Y') }}
                        </td>
                    </tr>
                </table>

                <p>
                    To avoid interruption, please ensure your payment method is valid.
                </p>

                
                <p style="font-size:13px; color:#888;">
                    If you have already renewed, please ignore this message.
                </p>

            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#666;">
                © {{ date('Y') }} AungSolutionsNigeriaLimited. All rights reserved.
            </td>
        </tr>

    </table>

</td>
</tr>
</table>

</body>
</html>