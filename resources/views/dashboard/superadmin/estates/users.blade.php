@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin | Estate
@endsection


@section('content')
<style>
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

</style>
   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Superadmin Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
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
                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Estate Name</h4>
                                                        <h3 style="font-size: 15px;">
                                                        {{ $tenant->estate_name }}
                                                        </h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                            
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Subdomain </h4>
                                                        <h3 style="font-size: 15px;">{{ $tenant->subdomain }}</h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                        <div class="chart-widget-top">
                                            <div class="row card-body pb-0 m-0">
                                            <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                <h4 class="mb-2">Visitors Daily</h4>
                                                <h3 style="font-size: 15px;">{{$invitationsCount}}</h3>
                                                <h3 style="margin-top: 15px;"></h3>
                                                <span></span>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                                                <h6 class="text-success"><i class="ti-user"></i></h6>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                        <div class="chart-widget-top">
                                            <div class="row card-body pb-0 m-0">
                                            <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                <h4 class="mb-2">Subscription</h4>
                                                <h3 style="font-size: 15px;">{{$subscriptionsCount}}</h3>
                                                <h3 style="font-size: 12px;margin-top: 5px;"></h3>
                                                <span></span>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                                                <h6 class="text-success"><i class="ti-credit-card"></i></h6>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                    <div class="card-header card-no-border">
                                        <h3>All Users</h3>
                                        
                                    </div>
                                        <div class="table-responsive signal-table">
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sn</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Action</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sn = 1;
                                                @endphp
                                                @foreach($users as $user)
                                                <tr>
                                                    <th scope="row">{{$sn++}}</th>
                                                    <td scope="row">{{ucfirst($user->first_name ?? 'N/A')}} {{ucfirst($user->last_name ?? 'N/A')}} </td>
                                                    <td scope="row">{{$user->email ?? 'N/A'}} </td>
                                                    <td scope="row">{{$user->kyc->phone ?? 'N/A'}}</td>
                                                    <td scope="row">{{$user->role ?? 'N/A'}}</td>
                                                    <td>{{ $tenant->created_at->format('d M Y') }}</td>
                                                    <td>

                                                        <button
                                                        class="btn btn-info btn-sm viewUserBtn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#userModal"

                                                        data-address="{{ $user?->kyc->address ?? 'N/A'}}"
                                                        data-state="{{ $user?->kyc?->state->name ?? 'N/A' }}"
                                                        data-lga="{{ $user?->kyc?->lga->name  ?? 'N/A'}}"
                                                        data-residentid="{{ $user?->kyc->resident_id ?? 'N/A' }}"
                                                        data-occupants="{{ $user?->kyc?->occupants ?? 'N/A' }}"
                                                        data-flatnumber="{{ $user?->kyc?->flat_number ?? 'N/A' }}"
                                                        data-agentname="{{ $user?->kyc?->agent_name  ?? 'N/A'}}"
                                                        data-agentnumber="{{ $user?->kyc?->agent_number  ?? 'N/A'}}"
                                                        data-faceimage="{{ $user?->kyc?->face_image ? asset('storage/'.$user->kyc->face_image) : '' }}"

                                                        data-name="{{ ucfirst($user->first_name ?? 'N/A') }} {{ ucfirst($user->last_name ?? 'N/A') }}"
                                                        

                                                        >

                                                        <i class="bi bi-eye-fill"></i> View More

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

       <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">User Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

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
                    
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Address</small>
                        <h6 id="modalAddress"></h6>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">State</small>
                        <h6 id="modalState"></h6>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Lga</small>
                        <h6 id="modalLga"></h6>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Resident Id</small>
                        <h6 id="modalResidentid"></h6>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Occupants</small>
                        <h6 id="modalOccupants"></h6>
                    </div>

                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Flat Number</small>
                        <h6 id="modalFlatnumber"></h6>
                    </div>
                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Agent Name</small>
                        <h6 id="modalAgentname"></h6>
                    </div>
                    <div class="col-md-6 mb-3">
                        <small class="text-muted">Agent Name</small>
                        <h6 id="modalAgentnumber"></h6>
                    </div>
                    

                    

                    </div>

            </div>

            </div>
        </div>
    </div>
@endsection


@section('script')

<script>

document.querySelectorAll('.viewUserBtn').forEach(button => {

button.addEventListener('click', function() {

const image = this.dataset.faceimage;
const name = this.dataset.name;
const initials = name.split(' ').map(n => n[0]).join('');

document.getElementById('modal_name').innerText = name;
document.getElementById('modal_initials').innerText = initials;
document.getElementById('modalAddress').innerText = this.dataset.address;
document.getElementById('modalState').innerText = this.dataset.state;
document.getElementById('modalLga').innerText = this.dataset.lga;
document.getElementById('modalResidentid').innerText = this.dataset.residentid;
document.getElementById('modalOccupants').innerText = this.dataset.occupants;
document.getElementById('modalFlatnumber').innerText = this.dataset.flatnumber;
document.getElementById('modalAgentname').innerText = this.dataset.agentname;
document.getElementById('modalAgentnumber').innerText = this.dataset.agentnumber;
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

});

});

</script>

@endsection