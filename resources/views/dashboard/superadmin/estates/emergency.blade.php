@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin | Emergency Access Code
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
                                                        <h3 style="font-size: 15px;" class="mb-2">Offline Emergency Access Pin</h3>
                                                        <div class="input-group mb-2">
                                                        <input type="text" id="superEmergencyLink" class="form-control"
                                                            value="{{$emergency?->emergency_pin}}" readonly>

                                                        <input type="hidden"id="pinExpiresAt"value="{{ $emergency?->emergency_pin_expires_at }}">        

                                                        <button class="btn btn-success" onclick="copysuperEmergencyLink()">Copy</button>
                                                        </div>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                        <small id="copysuperEmergencyMsg" style="color: green; display: none;">
                                                        Copied!
                                                        </small>
                                                        <button class="btn btn-warning" onclick="superregeneratePin()">
                                                            Regenerate Pin
                                                        </button>
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
                                                        <h3 style="font-size: 15px;" class="mb-2">Offline Visitor Access Pin</h3>
                                                        <div class="input-group mb-2">
                                                        <input type="text" id="superEmergencyvisitorLink" class="form-control"
                                                            value="{{$emergency?->emergency_visitor_pin}}" readonly>

                                                        <input type="hidden"id="pinVisitorExpiresAt"value="{{ $emergency?->emergency_visitor_pin_expires_at }}">        
                                                        
                                                        <button class="btn btn-success" onclick="supercopyEmergencyvisitorLink()">Copy</button>
                                                        </div>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                        <small id="supercopyEmergencyvisitorMsg" style="color: green; display: none;">
                                                        Copied!
                                                        </small>
                                                        <button class="btn btn-warning" onclick="superregeneratevisitorPin()">
                                                            Regenerate Visitor Pin
                                                        </button>
                                                    </div>
                                            
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    
                            </div>

                            
                        </div>

                           

                        </div>


                   <!--end-->
          </div>
         
        </div>

       
@endsection


@section('script')

<!-- emergency access -->

<script>
  function superregeneratePin() {

    if (!confirm("Are you sure you want to regenerate your emergency pin?")) {
        return;
    }

    $.ajax({
        url: "{{ route('super.admin.emergency.pin.regenerate', ['tenant' => $emergency->tenant_id,'user' => $emergency->user_id]) }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {

            if (response.success) {

                $('#superEmergencyLink').val(response.emergency_pin);

                $('#copysuperEmergencyMsg')
                    .text("New pin generated!")
                    .css("color", "blue")
                    .show()
                    .fadeOut(3000);
            }
        },

        error: function () {
            alert("Failed to regenerate pin. Try again.");
        }
    });
}
</script>



<script>
async function copysuperEmergencyLink() {

    const expiresAt = document.getElementById('pinExpiresAt').value;

    if (!expiresAt) {
        alert('This code has expired.');
        return;
    }

    const expiryDate = new Date(expiresAt);
    const now = new Date();

    if (now > expiryDate) {
        alert('This emergency PIN has expired. Please generate a new one.');
        return;
    }

    const copyText = document.getElementById("superEmergencyLink");

    try {
        await navigator.clipboard.writeText(copyText.value);

        const msg = document.getElementById("copysuperEmergencyMsg");

        if (msg) {
            msg.style.display = "inline";

            setTimeout(() => {
                msg.style.display = "none";
            }, 2000);
        }
    } catch (err) {
        alert('Failed to copy PIN.');
    }
}
</script>


<!--visitor emergency access -->
<script>
  function superregeneratevisitorPin() {

    if (!confirm("Are you sure you want to regenerate your visitor emergency pin?")) {
        return;
    }

    $.ajax({
        url: "{{ route('super.admin.visitor.emergency.pin.regenerate', ['tenant' => $emergency->tenant_id,'user' => $emergency->user_id]) }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {

            if (response.success) {

                $('#superEmergencyvisitorLink').val(response.emergency_visitor_pin);

                $('#supercopyEmergencyvisitorMsg')
                    .text("New pin generated!")
                    .css("color", "blue")
                    .show()
                    .fadeOut(3000);
            }
        },

        error: function () {
            alert("Failed to regenerate pin. Try again.");
        }
    });
}
</script>

<script>
  function supercopyEmergencyvisitorLink() {

    const expiresAt = document.getElementById('pinVisitorExpiresAt').value;

    if (!expiresAt) {
        alert('This code has expired.');
        return;
    }

    const expiryDate = new Date(expiresAt);
    const now = new Date();

    if (now > expiryDate) {
        alert('This emergency PIN has expired. Please generate a new one.');
        return;
    }

    const copyText = document.getElementById("superEmergencyvisitorLink");

    try {
        await navigator.clipboard.writeText(copyText.value);

        const msg = document.getElementById("supercopyEmergencyvisitorMsg");

        if (msg) {
            msg.style.display = "inline";

            setTimeout(() => {
                msg.style.display = "none";
            }, 2000);
        }
    } catch (err) {
        alert('Failed to copy PIN.');
    }
    
  }
</script>



@endsection