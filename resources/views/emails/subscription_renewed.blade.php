<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Renewed</title>
</head>
<body>
    <div style="font-family: Arial; padding: 20px;">
    <h2>Subscription Renewed Successfully</h2>

    <p>Hello {{ $subscription->user->first_name }},</p>

    <p>Your subscription has been successfully renewed.</p>

    <hr>

    <h4>Subscription Details</h4>

    <p><strong>Plan:</strong> {{ $subscription->plan->name }}</p>
    <p><strong>Billing Cycle:</strong> {{ ucfirst($subscription->billing_cycle) }}</p>
    <p><strong>Start Date:</strong> {{ $subscription->starts_at }}</p>
    <p><strong>End Date:</strong> {{ $subscription->ends_at }}</p>

    <br>

    <p style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#666;">
        © {{ date('Y') }} AungSolutionsNigeriaLimited. All rights reserved.</p>
</div>
</body>
</html>