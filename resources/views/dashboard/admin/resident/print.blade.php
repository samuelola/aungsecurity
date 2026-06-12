<!DOCTYPE html>
<html>
<head>
    <title>Residents List</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background: #1e3a8a;
            color: #fff;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<h3>Residents List</h3>

<button class="no-print" onclick="window.print()">Print</button>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Resident ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Flat</th>
            <th>Status</th>
            <th>Emergency Code</th>
        </tr>
    </thead>

    <tbody>
        @foreach($allresidents as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->kyc?->resident_id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->kyc?->phone }}</td>
                <td>{{ $user->kyc?->flat_number }}</td>
                <td>
                    {{ $user->kyc?->kyc_completed ? 'Active' : 'Pending' }}
                </td>
                <td>{{ $user->kyc?->emergency_pin }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>