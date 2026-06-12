@extends('dashboard.user.tenant_master')

@section('title')
    Resident Invitations
@endsection

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery added -->

<style>
input { cursor: text !important; }
label { cursor: text !important; }

/* Floating Share Popup */
.share-popup {
    display: none;
    position: absolute;
    z-index: 10000;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    padding: 10px;
    min-width: 200px;

    max-height: 250px;      
    overflow-y: auto;       
}

.share-popup.show { display: block; }

.share-popup a {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 6px 10px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 5px;
    font-size: 14px;
    color: #fff;
}

.share-popup a:hover { opacity: 0.85; }

/* Platform Colors */
.share-popup a.whatsapp { background: #25D366; }
.share-popup a.telegram { background: #0088cc; }
.share-popup a.email { background: #f0ad4e; color: #000; }
.share-popup a.facebook { background: #4267B2; }
.share-popup a.twitter { background: #000; }
.share-popup a.linkedin { background: #0077b5; }
.share-popup a.sms { background: #6c757d; }
.share-popup a.copy { background: #343a40; }
.share-popup a.print { background: #7952b3; }
</style>

<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success">{!! session('success') !!}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{!! session('error') !!}</div>
        @endif
    </div>
</div>

<div class="container-fluid default-dashboard">
    <div class="row">
        <div class="col-xxl-6 col-xl-12">
            <div class="card">
                <div class="card-header">
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
                                  
                                    @php
                                        
                                        $encryptedId = \Illuminate\Support\Facades\Crypt::encryptString($invitation);
                                        $colorClass = $rowColors[$invitation->id % count($rowColors)];
                                        $guestName = $invitation->visitor->first_name ?? $invitation->invitedResident->first_name ?? '';
                                        $guestLast = $invitation->visitor->last_name ?? $invitation->invitedResident->last_name ?? '';
                                        $guestPhone = $invitation->visitor->phone ?? $invitation->invitedResident->kyc->phone ?? '';
                                        $email = $invitation->visitor->email ?? $invitation->invitedResident->email ?? '';
                                        $facebookUrl = route('visitor.show', ['invitation'=>$encryptedId,'tenant'=>$subdomain]);
                                        $from = \Carbon\Carbon::parse($invitation->valid_from)->format('g:i A');
                                        $to = \Carbon\Carbon::parse($invitation->valid_to)->format('g:i A');
                                        $tenant = app('tenant');
                                        $message = "Hello $guestName $guestLast,\n\nYou have been invited to visit {$invitation->resident->first_name} {$invitation->resident->last_name}\nResident Flat No: {$invitation->resident->kyc->flat_number}\nAddress: {$invitation->resident->kyc->address}\nEstate: {$tenant->estate_name}\nValid Date: {$invitation->visit_date}\nAccess Time: $from - $to\nAccess Code: {$invitation->access_code}\n\nShow this code at the gate.";

                                        $rawPhone = preg_replace('/[^0-9]/','',$guestPhone);
                                        if(str_starts_with($rawPhone,'0')) { $formattedPhone='234'.substr($rawPhone,1); }
                                        elseif(str_starts_with($rawPhone,'234')) { $formattedPhone=$rawPhone; }
                                        else { $formattedPhone=$rawPhone; }
                                    @endphp
                                    <tr class="{{ $colorClass }}">
                                        <th>{{ $sn++ }}</th>
                                        
                                        <td>
                                            @if($invitation->visitor)
                                               {{ $guestName }} {{ $guestLast }}
                                            @elseif($invitation->invitedResident)
                                                {{ ucfirst($invitation->invitedResident->first_name ?? 'N/A') }} {{ ucfirst($invitation->invitedResident->last_name ?? 'N/A') }}
                                                <span class="badge bg-info text-dark">Resident</span>
                                            @else
                                                {{ ucfirst($invitation->resident->first_name ?? 'N/A') }} {{ ucfirst($invitation->resident->last_name ?? 'N/A') }}
                                                <span class="badge bg-secondary">Self</span>
                                            @endif
                                        </td>
                                        <td>{{ $invitation->visit_date ?? 'N/A' }}</td>
                                        <td>{{ $from }}</td>
                                        <td>{{ $to }}</td>
                                          <td>
                                            @if($invitation->status == 'pending')
                                                <span class="badge badge-light-warning">Pending</span>
                                            @elseif($invitation->status == 'used')
                                                <span class="badge badge-light-success">Inside</span>
                                            @elseif($invitation->status == 'exited')
                                                <span class="badge badge-light-danger">Exited</span>
                                            @endif
                                        </td>
                                        <td>{{ $invitation->access_code ?? 'N/A' }}</td>
                                        <td>
                                            <div class="mb-2">
                                                <form method="POST" action="{{ route('resident.invitations.resend', ['invitation'=>$invitation,'tenant'=>$subdomain]) }}" style="display:inline;">
                                                    @csrf
                                                    <button class="btn text-light btn-primary me-2" type="submit"><i class="bi bi-send-fill"></i> Resend</button>
                                                </form>
                                            </div>
                                            @if(!empty($formattedPhone))
                                                <button class="btn btn-info btn-sm  share-btn"
                                                    data-message="{{ $message }}"
                                                    data-phone="{{ $formattedPhone }}"
                                                    data-email="{{ $email }}"
                                                    data-facebook-url="{{ $facebookUrl }}">
                                                    <i class="bi bi-share-fill"></i> Share
                                                </button>
                                            @else
                                                Not Verified
                                            @endif
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

<!-- Floating Share Popup -->
<div id="sharePopup" class="share-popup">
    <a id="shareWhatsapp" href="#" target="_blank" class="whatsapp">
        <i class="bi bi-whatsapp"></i> WhatsApp
    </a>
    <a id="shareTelegram" href="#" target="_blank" class="telegram">
        <i class="bi bi-telegram"></i> Telegram
    </a>
    <a id="shareEmail" href="#" target="_blank" class="email">
        <i class="bi bi-envelope-fill"></i> Email
    </a>
    <a id="shareFacebook" href="#" target="_blank" class="facebook">
        <i class="bi bi-facebook"></i> Facebook</a>
    <a id="shareTwitter" target="_blank" class="twitter">
        <i class="bi bi-twitter-x"></i> Twitter (X)
    </a>

    <a id="shareLinkedin" target="_blank" class="linkedin">
        <i class="bi bi-linkedin"></i> LinkedIn
    </a>

    <a id="shareSms" class="sms">
        <i class="bi bi-chat-dots-fill"></i> SMS
    </a>
    <a id="copyLink" class="copy">
        <i class="bi bi-link-45deg"></i> Copy Link
    </a>

    <a id="printInvite" class="print">
        <i class="bi bi-printer-fill"></i> Print
    </a>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    const $popup = $('#sharePopup');

    $('.share-btn').on('click', function(e) {
        e.stopPropagation();
        const $btn = $(this);

        const rawMessage = $btn.data('message');
        const encodedMessage = encodeURIComponent(rawMessage);
        const phone = $btn.data('phone');
        const email = $btn.data('email');
        const facebookUrl = $btn.data('facebook-url');
        const encodedUrl = encodeURIComponent(facebookUrl);

        // Core Platforms
        $('#shareWhatsapp').attr('href', `https://wa.me/${phone}?text=${encodedMessage}`);
        $('#shareTelegram').attr('href', `https://t.me/share/url?url=${encodedUrl}&text=${encodedMessage}`);
        $('#shareEmail').attr('href', `mailto:${email}?subject=Invitation&body=${encodedMessage}`);
        $('#shareFacebook').attr('href', `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`);

        // NEW BUTTONS
        $('#shareTwitter').attr('href', `https://twitter.com/intent/tweet?url=${encodedUrl}&text=${encodedMessage}`);
        $('#shareLinkedin').attr('href', `https://www.linkedin.com/sharing/share-offsite/?url=${encodedUrl}`);
        $('#shareSms').attr('href', `sms:&body=${encodedMessage}`);

        // Copy Link
        $('#copyLink').off('click').on('click', function(e){
            e.preventDefault();
            navigator.clipboard.writeText(facebookUrl).then(function(){
                alert('Invitation link copied!');
            });
        });

        // Print (opens invitation page in new tab)
        $('#printInvite').off('click').on('click', function(e){
            e.preventDefault();
            window.open(facebookUrl, '_blank');
        });

        // Position popup
        const offset = $btn.offset();
        $popup.css({
            top: offset.top + $btn.outerHeight() + 5,
            left: offset.left
        }).addClass('show');
    });

    // Hide popup when clicking outside
    $(document).on('click', function() {
        $popup.removeClass('show');
    });

    // Prevent closing when clicking inside popup
    $popup.on('click', function(e) { 
        e.stopPropagation(); 
    });
});
</script>
@endsection