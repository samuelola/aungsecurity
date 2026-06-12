@extends('dashboard.user.tenant_master')

@section('title')
    Resident Invitations
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
input { cursor: text !important; }
label { cursor: text !important; }

.modal {
    display: none; 
    position: fixed;
    z-index: 1000;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.6);
    justify-content: center; align-items: center;
}
.modal.show { display: flex; }
.modal-content {
    background-color: #fff; padding: 20px;
    border-radius: 8px; max-width: 500px; width: 90%;
    position: relative; box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    animation: pop 0.25s ease;
}
@keyframes pop {
   from { transform: scale(0.7); opacity: 0; } to { transform: scale(1); opacity: 1; } }
.modal .close { 
  position: absolute; top: 10px; right: 15px; font-size: 22px; cursor: pointer;
   }
</style>

<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success bg-success-100 text-success-600 border-success-100 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                <div class="d-flex align-items-center gap-2">{!! session('success') !!}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger bg-danger-100 text-danger-600 border-danger-100 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                <div class="d-flex align-items-center gap-2">{!! session('error') !!}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12"> 
                    <h2>My Resident Invitations</h2>
                </div>
                <div class="col-sm-6 col-12 d-flex justify-content-sm-end">
                    <a href="{{ route('visitor.create',['tenant'=>$subdomain]) }}" class="btn btn-primary me-2">Create Invitation</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid default-dashboard">
        <div class="row">
            <div class="col-xxl-6 col-xl-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h3>List of Resident Invitations</h3>
                    </div>
                    <div class="card-body pt-0 mt-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="border-bottom-secondary border-top-0">
                                        <th>Sn</th>
                                        <th>Visitor</th>
                                        <th>Visit Date</th>
                                        <th>Time (From)</th>
                                        <th>Time (To)</th>
                                        <th>Status</th>
                                        <th>Access Code</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $rowColors = ['border-bottom-success','border-bottom-info','border-bottom-warning','border-bottom-danger','border-bottom-secondary','border-bottom-primary','border-bottom-0'];
                                    $sn = 1;
                                @endphp

                                @foreach($invitations as $invitation)
                                    @php $colorClass = $rowColors[$invitation->id % count($rowColors)]; @endphp
                                    <tr class="{{ $colorClass }}">
                                        <th>{{ $sn++ }}</th>

                                        {{-- Visitor / Invited Resident / Self --}}
                                        <td>
                                            @if($invitation->visitor)
                                                {{ ucfirst($invitation->visitor->first_name) }} {{ ucfirst($invitation->visitor->last_name) }}
                                            @elseif($invitation->invitedResident)
                                                {{ ucfirst($invitation->invitedResident->first_name) }} {{ ucfirst($invitation->invitedResident->last_name) }}
                                                <span class="badge bg-info text-dark">Resident</span>
                                            @else
                                                {{ ucfirst($invitation->resident->first_name) }} {{ ucfirst($invitation->resident->last_name) }}
                                                <span class="badge bg-secondary">Self</span>
                                            @endif
                                        </td>

                                        <td><span class="badge badge-light-primary">{{ $invitation->visit_date }}</span></td>
                                        <td>{{ \Carbon\Carbon::parse($invitation->valid_from)->format('g:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($invitation->valid_to)->format('g:i A') }}</td>

                                        <td>
                                            @if($invitation->status == 'pending')
                                                <span class="badge badge-light-warning">Pending</span>
                                            @elseif($invitation->status == 'used')
                                                <span class="badge badge-light-success">Inside</span>
                                            @elseif($invitation->status == 'exited')
                                                <span class="badge badge-light-danger">Exited</span>
                                            @endif
                                        </td>

                                        <td>{{ $invitation->access_code }}</td>

                                        <td>
                                            {{-- Resend --}}
                                            <div class="mb-2">
                                                <form method="POST" action="{{ route('resident.invitations.resend', ['invitation'=>$invitation,'tenant'=>$subdomain]) }}" style="display:inline;">
                                                    @csrf
                                                    <button class="btn text-light btn-primary me-2" type="submit"><i class="bi bi-send-fill"></i> Resend</button>
                                                </form>
                                            </div>

                                            {{-- WhatsApp --}}
                                            @php
                                                $guestName = $invitation->visitor->first_name ?? $invitation->invitedResident->first_name;
                                                $guestLast = $invitation->visitor->last_name ?? $invitation->invitedResident->last_name;
                                                $guestPhone = $invitation->visitor->phone ?? $invitation->invitedResident->kyc->phone;
                                                $from = \Carbon\Carbon::parse($invitation->valid_from)->format('g:i A');
                                                $to = \Carbon\Carbon::parse($invitation->valid_to)->format('g:i A');
                                                $tenant = app('tenant');
                                                $message = urlencode(
                                                    "Hello *$guestName $guestLast*,\n\n" .
                                                    "You have been invited to visit *{$invitation->resident->first_name} {$invitation->resident->last_name}*\n" .
                                                    "Resident Flat No: {$invitation->resident->kyc->flat_number}\n" .
                                                    "Address of Resident: {$invitation->resident->kyc->address}\n" .
                                                    "Estate: {$tenant->estate_name}\n" .
                                                    "Valid Date: *{$invitation->visit_date}*\n" .
                                                    "Access Time: *$from - $to*\n" .
                                                    "Access Code: *{$invitation->access_code}*\n\n" .
                                                    "Show this code at the gate."
                                                );

                                                $rawPhone = preg_replace('/[^0-9]/','',$guestPhone);
                                                if(str_starts_with($rawPhone,'0')) { $formattedPhone='234'.substr($rawPhone,1); }
                                                elseif(str_starts_with($rawPhone,'234')) { $formattedPhone=$rawPhone; }
                                                else { $formattedPhone=$rawPhone; }
                                            @endphp

                                            @if(!empty($formattedPhone))
                                                
                                                
                                                <a href="https://wa.me/{{ $formattedPhone }}?text={{ $message }}" target="_blank" class="btn btn-light btn-sm me-1" style="color:#000">
                                                    <i class="bi bi-share-fill"></i> Share
                                                </a>
                                            @else
                                                {{'Not Verified'}}
                                            @endif

                                            {{-- Delete --}}
                                            
                                            <form method="POST" action="{{ route('resident.invitations.destroy', ['invitation'=>$invitation,'tenant'=>$subdomain]) }}" style="display:inline;" onsubmit="return confirm('Delete this invitation? This cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Purpose Modal -->
    <div id="purposeModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h4>Purpose</h4>
            <p id="modalText"></p>
        </div>
    </div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.purpose-cell').on('click', function() {
        $('#modalText').text($(this).data('purpose'));
        $('#purposeModal').addClass('show');
    });
    $('.modal .close').on('click', function() { $('#purposeModal').removeClass('show'); });
    $(window).on('click', function(e) { if($(e.target).is('#purposeModal')) { $('#purposeModal').removeClass('show'); } });
});
</script>
@endsection
