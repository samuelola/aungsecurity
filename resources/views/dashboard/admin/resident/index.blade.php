@extends('dashboard.admin.admin_master')

@section('title')
    All Residents
@endsection


@section('content')

 <style>
 
input {
  cursor: text !important;
}

label{
  cursor: text !important;
}

.pricing-card{
    border-radius:16px;
    transition:all .3s ease;
}

.pricing-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,0.1);
}

.pricing-card h2{
    font-size:42px;
}

.btn-primary{
    border-radius:10px;
}

.avatar-circle{
    width:90px;
    height:90px;
    background:#4f46e5;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    font-weight:600;
    margin:auto;
}

.info-box{
    background:#f8f9fc;
    padding:14px;
    border-radius:10px;
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
                  <!-- <h2>All Subscription Plans</h2> -->
                  
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
                   <!--start-->
                

                        <div class="row g-4 justify-content-center">

                           <div class="container-fluid table-space basic_table">
                            <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                    <div class="card-header card-no-border">
                                        <h3>All Residents</h3>
                                        
                                    </div>
                                    <div class="table-responsive signal-table">
                                        <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Resident Id</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Occupants</th>
                                            <th scope="col">Flat Number</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $sn = 1;
                                            @endphp
                                            @foreach($allresidents as $allresident)
                                            <tr>
                                                <th scope="row">{{$sn++}}</th>
                                                <td scope="row">{{ucfirst($allresident->first_name ?? 'N/A')}}  {{ucfirst($allresident->last_name ?? 'N/A')}} </td>
                                                <td scope="row">{{$allresident->kyc->resident_id ?? 'N/A'}} </td>
                                                <td scope="row">
                                                     @if($allresident->kyc->current_step == 'completed')
                                                        <span class="badge badge-light-success">
                                                            Verified
                                                        </span>
                                                     @else 
                                                         <span class="badge badge-light-danger">
                                                            Not Verified
                                                        </span>  
                                                     @endif
                                                   
                                                </td>

                                                <td scope="row">{{$allresident->email ?? 'N/A'}} </td>
                                                <td scope="row">{{$allresident->kyc->phone ?? 'N/A'}} </td>
                                                <td scope="row">{{$allresident->kyc->occupants ?? 'N/A'}} </td>
                                                <td scope="row">{{$allresident->kyc->flat_number ?? 'N/A'}} </td>
                                                <td>
                                                    <button 
                                                        class="btn btn-primary btn-sm viewResidentBtn"

                                                        data-name="{{ ucfirst($allresident->first_name) }} {{ ucfirst($allresident->last_name) }}"
                                                        data-email="{{ $allresident->email }}"
                                                        data-phone="{{ $allresident->kyc->phone ?? 'N/A' }}"
                                                        data-residentid="{{ $allresident->kyc->resident_id ?? 'N/A' }}"
                                                        data-flat="{{ $allresident->kyc->flat_number ?? 'N/A' }}"
                                                        data-occupants="{{ $allresident->kyc->occupants ?? 'N/A' }}"
                                                        data-status="{{ $allresident->kyc->current_step ?? 'N/A' }}"
                                                        data-address="{{ $allresident->kyc->address ?? 'N/A'}}"
                                                        data-state="{{ $allresident->kyc->state->name ?? 'N/A' }}"
                                                        data-lga="{{ $allresident->kyc->lga->name  ?? 'N/A'}}"
                                                        data-agentname="{{ $allresident->kyc->agent_name  ?? 'N/A'}}"
                                                        data-agentnumber="{{ $allresident->kyc->agent_number  ?? 'N/A' }}"
                                                        data-image="{{ $allresident->kyc->face_image ? asset('storage/'.$allresident->kyc->face_image) : '' }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#residentModal"
                                                    >
                                                        View More
                                                    </button>
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


                   <!--end-->
          </div>
        </div>

<div class="modal fade" id="residentModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4">

            <!-- Header -->
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">
                    Resident Profile
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4">

                <!-- Profile Section -->
                <div class="text-center mb-4">

                    <img 
                        id="modal_image"
                        src=""
                        class="avatar-circle shadow"
                        width="90"
                        height="90"
                        style="object-fit:cover;"
                    >

                    <div class="avatar-circle mb-3" id="modal_avatar">
                        <span id="modal_initials">R</span>
                    </div>
                    

                    <h4 class="fw-bold mb-1" id="modal_name"></h4>

                    <div id="modal_status"></div>

                </div>


                <!-- Details -->
                <div class="row g-3">

                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Email</small>
                            <div class="fw-semibold" id="modal_email"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Resident ID</small>
                            <div class="fw-semibold" id="modal_residentid"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Phone</small>
                            <div class="fw-semibold" id="modal_phone"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Flat Number</small>
                            <div class="fw-semibold" id="modal_flat"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Occupants</small>
                            <div class="fw-semibold" id="modal_occupants"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Address</small>
                            <div class="fw-semibold" id="modal_address"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">State</small>
                            <div class="fw-semibold" id="modal_state"></div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">LGA</small>
                            <div class="fw-semibold" id="modal_lga"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Agent Name</small>
                            <div class="fw-semibold" id="modal_agentname"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <small class="text-muted">Agent Number</small>
                            <div class="fw-semibold" id="modal_agentnumber"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection


@section('script')
 <script>
    document.querySelectorAll('.viewResidentBtn').forEach(button => {

    button.addEventListener('click', function(){

        const name = this.dataset.name;
        const image = this.dataset.image;

        document.getElementById('modal_name').innerText = name;
        document.getElementById('modal_email').innerText = this.dataset.email;
        document.getElementById('modal_phone').innerText = this.dataset.phone;
        document.getElementById('modal_residentid').innerText = this.dataset.residentid;
        document.getElementById('modal_flat').innerText = this.dataset.flat;
        document.getElementById('modal_occupants').innerText = this.dataset.occupants;
        document.getElementById('modal_address').innerText = this.dataset.address;
        document.getElementById('modal_state').innerText = this.dataset.state;
        document.getElementById('modal_lga').innerText = this.dataset.lga;
        document.getElementById('modal_agentname').innerText = this.dataset.agentname;
        document.getElementById('modal_agentnumber').innerText = this.dataset.agentnumber;
        
        // initials avatar
        const initials = name.split(' ').map(n => n[0]).join('');
        document.getElementById('modal_initials').innerText = initials;

        const status = this.dataset.status;

        const modalImage = document.getElementById('modal_image');
        const modalAvatar = document.getElementById('modal_avatar');

        if(image && image !== ''){
            modalImage.src = image;
            modalImage.style.display = 'block';
            modalAvatar.style.display = 'none';
        }else{
            modalImage.style.display = 'none';
            modalAvatar.style.display = 'flex';
        }


        document.getElementById('modal_status').innerHTML =
            status === 'completed'
            ? '<span class="badge bg-success">Verified</span>'
            : '<span class="badge bg-danger">Not Verified</span>';

    });

});
 </script>
@endsection









