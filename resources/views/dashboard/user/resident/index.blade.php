@extends('dashboard.user.tenant_master')

@section('title')
    Resident Invitations
@endsection


@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

 <style>
 
input {
  cursor: text !important;
}

label{
  cursor: text !important;
}

.modal {
    display: none; /* hidden initially */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
}

.modal.show {
    display: flex;   /* ONLY show when class added */
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    max-width: 500px;
    width: 90%;
    position: relative;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    animation: pop 0.25s ease;
}

@keyframes pop {
    from { transform: scale(0.7); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

.modal .close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    cursor: pointer;
}


 </style>

  <div class="row">
                <div class="col-md-12">

                        @if(session('success'))
                            <div class="alert alert-success bg-success-100 text-success-600 border-success-100 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center gap-2">
                                        
                                        {!! session('success') !!} 
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if(session('error'))
                            
                            <div class="alert alert-danger bg-danger-100 text-danger-600 border-danger-100 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                                    <div class="d-flex align-items-center gap-2">
                                        
                                        {!! session('error') !!} 
                                    </div>
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
                <div class="col-sm-6 col-12">
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol> -->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
               
              
             
               <div class="col-xxl-6 col-xl-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Lists of Resident Invitations</h3>
                  </div>
                  <div class="card-body pt-0 mt-3">
                      
                     <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                          <th scope="col">Sn</th>
                          <th scope="col">Visitor</th>
                          <!-- <th scope="col">Purpose</th> -->
                          <th scope="col">Visit Date</th>
                          <th scope="col">Time (From)</th>
                          <th scope="col">Time (To)</th>
                          <th scope="col">Status</th>
                          <th scope="col">Access Code</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                              // Define an array of background color classes
                              $rowColors = [
                                'border-bottom-success', 
                                'border-bottom-info', 
                                'border-bottom-warning', 
                                'border-bottom-danger', 
                                'border-bottom-secondary',
                                'border-bottom-primary',
                                'border-bottom-0'
                                ];

                                $sn = 1;
                          @endphp

                        @foreach($invitations as $invitation)

                            @php
        
                                $colorClass = $rowColors[$invitation->id % count($rowColors)];
                            @endphp  
                        <tr class="{{$colorClass}}">
                          <th scope="row">{{$sn++}}</th>
                          <td>{{ $invitation->visitor->full_name }}</td>
  
                            <!-- <td class="purpose-cell" data-purpose="{{ $invitation->purpose }}" style="cursor:pointer; color:blue; text-decoration:underline;">
                                {{ \Illuminate\Support\Str::limit($invitation->purpose, 25) }}
                            </td> -->


                          <td>
                             <span class="badge badge-light-primary">{{ $invitation->visit_date }}</span>
                          </td>
                          <td>{{ $invitation->valid_from }}</td>
                          <td>{{ $invitation->valid_to }}</td>
                          <td>
                            @if($invitation->status == 'pending')
                            <span class="badge badge-light-warning">pending</span>
                            @elseif($invitation->status == 'used')
                             <span class="badge badge-light-success">Inside</span>
                            @elseif($invitation->status == 'exited')
                              <span class="badge badge-light-danger">Exited</span>
                            @endif
                          </td>
                          <!-- <td>
                            <img src="{{ asset('storage/qrcodes/'.$invitation->id.'.png') }}"
                         width="80">
                          </td> -->
                          <td>
                             {{$invitation->access_code}}
                          </td>
                          <td>
                              <!-- <a href="{{ asset('storage/qrcodes/'.$invitation->id.'.png') }}"
                                download
                                style="margin-right:10px;">
                                ⬇ Download
                                </a> -->
                                <div class="mb-2">
                                  <form method="POST"
                                      action="{{ route('resident.invitations.resend', ['invitation'=>$invitation,'tenant'=>$subdomain]) }}"
                                      style="display:inline;">
                                      @csrf
                                      <button class="btn text-light btn-primary me-2" type="submit"><i class="bi bi-send-fill"></i> Resend</button>
                                  </form>
                                </div>
                                <div class="mb-2">
                                     @php
    $message = urlencode(
    "Hello {$invitation->visitor->full_name},

        Valid Date: {$invitation->visit_date}
        Access Time: {$invitation->valid_from} - {$invitation->valid_to}
        Access Code: {$invitation->access_code}

    Show this code at the gate."
    );
@endphp

@php
    $rawPhone = preg_replace('/[^0-9]/', '', $invitation->visitor->phone);

    if (str_starts_with($rawPhone, '0')) {
        $formattedPhone = '+234' . substr($rawPhone, 1);
    } elseif (str_starts_with($rawPhone, '234')) {
        $formattedPhone = '+' . $rawPhone;
    } else {
        $formattedPhone = '+'.$rawPhone; // fallback
    }
@endphp

@if($invitation->visitor->phone)
    <a href="https://wa.me/{{ ltrim($formattedPhone, '+') }}?text={{ $message }}"
       target="_blank"
       class="btn btn-light btn-sm me-1"style="color:#000">
       <i class="bi bi-share-fill"></i> share
    </a>
@endif


                                </div>
                                <form method="POST"
                                    action="{{ route('resident.invitations.destroy', ['invitation'=>$invitation,'tenant'=>$subdomain]) }}"
                                    style="display:inline;"
                                    onsubmit="return confirm('Delete this invitation? This cannot be undone.');">
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
$(document).ready(function() {

    // Open modal
    $('.purpose-cell').on('click', function() {
        var fullText = $(this).data('purpose');
        $('#modalText').text(fullText);
        $('#purposeModal').addClass('show');
    });

    // Close modal on X
    $('.modal .close').on('click', function() {
        $('#purposeModal').removeClass('show');
    });

    // Close modal when clicking outside content
    $(window).on('click', function(e) {
        if ($(e.target).is('#purposeModal')) {
            $('#purposeModal').removeClass('show');
        }
    });

});
</script>
@endsection









