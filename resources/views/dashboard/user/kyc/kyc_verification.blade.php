@extends('dashboard.user.tenant_master')

@section('title')
    Kyc Verification
@endsection


@section('content')

 <style>
  .nav-link.disabled {
    pointer-events: none;
    opacity: 0.5;
}
input {
  cursor: text !important;
}

label{
  cursor: text !important;
}


 </style>

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Complete Your KYC to proceed</h2>
                  
                </div>
               
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
               
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Kyc form</h3>
                    <p class="mt-1 mb-0">Fill up your true details and next proceed.</p>
                  </div>
                  <div class="card-body">
                    <div class="row shopping-wizard">
                      <div class="col-12"> 
                        <div class="row shipping-form g-3">
                          <div class="col-xl-12 shipping-border">
                            <div class="row"> 
                              <div class="col-12">
                                <div class="nav nav-pills horizontal-options shipping-options" id="cart-options-tab" role="tablist" aria-orientation="vertical">
                                  <a class="nav-link active" id="bio-tab" data-bs-toggle="pill" href="#bio" role="tab" aria-controls="bio" aria-selected="true">
                                    <div class="cart-options">
                                      <div class="stroke-icon-wizard"><i class="fa-solid fa-user"></i></div>
                                      <div class="cart-options-content">
                                        <h6 class="f-w-700">Bio Data</h6>
                                      </div>
                                    </div>
                                  </a>
                                    <a class="nav-link disabled" id="doc-tab" data-bs-toggle="pill" href="#doc" role="tab" aria-controls="doc" aria-selected="false" tabindex="-1">
                                    <div class="cart-options">
                                      <div class="stroke-icon-wizard"><i class="fa-solid fa-id-badge"></i></div>
                                      <div class="cart-options-content">
                                        <h6 class="f-w-700">Upload ID Documents</h6>
                                      </div>
                                    </div>
                                  </a>

                                  <a class="nav-link disabled" id="facee-tab" data-bs-toggle="pill" href="#facee" role="tab" aria-controls="facee" aria-selected="false" tabindex="-1">
                                    <div class="cart-options">
                                      <div class="stroke-icon-wizard"><i class="fa-solid fa-id-badge"></i></div>
                                      <div class="cart-options-content">
                                        <h6 class="f-w-700">Image Capture</h6>
                                      </div>
                                    </div>
                                  </a>
                                    
                                    <a class="nav-link  disabled" id="finish-wizard-tab" data-bs-toggle="pill" href="#finish-wizard" role="tab" aria-controls="finish-wizard" aria-selected="false" tabindex="-1">
                                    <div class="cart-options">
                                      <div class="stroke-icon-wizard"><i class="fa-solid fa-square-check"></i></div>
                                      <div class="cart-options-content"> 
                                        <h6 class="f-w-700">Finish</h6>
                                      </div>
                                    </div>
                                    </a>
                                </div>
                              </div>
                              <div class="col-12"> 
                                <div class="tab-content dark-field shipping-content" id="cart-options-tabContent">
                                  <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="bio-tab">
                                    <h5 class="f-w-600">Bio Data Information </h5>
                                    <p>Fill up the following information</p>
                                    <form method="post" action="{{route('kyc.bio',$tenant->subdomain)}}" class="row g-3 needs-validation basic-form" id="bioForm">
                                      @csrf
                                      <div class="col-sm-6">
                                        <label class="form-label" for="customFirstname">First Name<span class="text-danger">*</span></label>
                                        <input class="form-control" id="customFirstname" name="first_name"  type="text" placeholder="Enter first name" value="{{$user->first_name}}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-sm-6">
                                        <label class="form-label" for="customLastname">Last Name<span class="text-danger">*</span></label>
                                        <input class="form-control" id="customLastname" name="last_name" type="text" placeholder="Enter last name" value="{{$user->last_name}}" readonly>
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-sm-6">
                                        <label class="form-label" for="customContact">Phone Number<span class="text-danger">*</span></label>
                                        <input class="form-control" id="customContact" name="phone" type="number" value="{{ old('phone', $kyc->phone) }}" placeholder="Enter number">
                                        <div class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-sm-6">
                                        <label class="form-label" for="customEmail01">Email   <span class="text-danger">*</span></label>
                                        <input class="form-control" id="customEmail01" name="email" type="email"  placeholder="admiro@example.com" value="{{$user->email}}" readonly>
                                        <div style="color:#dc3545;" class="valid-feedback">Looks good!</div>
                                      </div>
                                      <div class="col-12"> 
                                        <label class="form-label" for="exampleFormControlTextarea33">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address"  id="exampleFormControlTextarea33" rows="3">
                                          {{ old('address', $kyc->address) }}
                                        </textarea>
                                      </div>
                                      <div class="col-sm-4">
                                        <label class="form-label" for="customState-wizard">State of Origin <span class="text-danger">*</span></label>
                                        
                                        <select id="state" name="state_id" class="form-select">
                                            <option value="">Select State</option>
                                            @foreach($allStates as $state)
                                                <option value="{{ $state->id }}"
                                                    {{ $kyc->state_id == $state->id ? 'selected' : '' }}>
                                                    {{ $state->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div style="color:#dc3545;" class="invalid-feedback">Please select a valid state.</div>
                                      </div>
                                      <div class="col-sm-4">
                                          <label class="form-label" for="customState-wizard">Select Lga <span class="text-danger">*</span></label> 
                                          <select id="lga" name="lga_id" class="form-select">
                                            <option value="">Select Lga</option>
                                            @foreach($lgas as $lga)
                                                <option value="{{ $lga->id }}"
                                                    {{ $kyc->lga_id == $lga->id ? 'selected' : '' }}>
                                                    {{ $lga->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                      </div>

                                     
                                      
                                      <div class="col-12 text-end">
                                        
                                        <button type="submit" class="btn btn-primary">Proceed to Next<i class="fa-solid fa-id-badge proceed-next pe-2"> </i></button>
                                        
                                      </div>
                                    </form>
                                  </div>


                                  <div class="tab-pane fade shipping-wizard" id="doc" role="tabpanel" aria-labelledby="doc-tab"> 
                                    <h5 class="f-w-600">ID Document Information</h5>
                                    <p>Upload your ID information (National ID, Passport, driver’s license)</p>
                                     

                                    <div class="row g-3">

                                        <form method="post" action="{{route('kyc.doc',$tenant->subdomain)}}" class="row g-3 needs-validation basic-form" id="docForm" enctype="multipart/form-data">
                                           @csrf
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6 mx-auto">
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h6 class="fw-semibold mb-3">
                Upload Identification Document
            </h6>

            <!-- Document Type -->
            <div class="mb-3">
                <label class="form-label fw-medium">
                    Select Document Type <span class="text-danger">*</span>
                </label>
                <select class="form-select" name="id_type" id="id_type" required>
                    <option value="" selected disabled>Select Document</option>
                    <option value="National ID">National ID</option>
                    <option value="Passport">Passport</option>
                    <option value="Driver License">Driver’s License</option>
                </select>
                <div class="invalid-feedback">
                    Please select a document type.
                </div>
            </div>

                                          <!-- Upload Box -->
                                          <div class="mb-3">
                                              <label class="form-label fw-medium">
                                                  Upload Document <span class="text-danger">*</span>
                                              </label>

                                              <div class="border border-dashed rounded-3 p-4 text-center bg-light position-relative">

                                                  <i class="fa-solid fa-cloud-arrow-up fs-1 text-primary mb-2"></i>

                                                  <p class="mb-1 fw-medium">
                                                      Drag & drop your document here
                                                  </p>

                                                  <small class="text-muted">
                                                      JPG, PNG or PDF (Max 2MB)
                                                  </small>

                                                  <input
                                                      type="file"
                                                      class="form-control position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                                      name="id_document"
                                                      id="id_document"
                                                      accept=".jpg,.jpeg,.png,.pdf"
                                                      
                                                  >
                                              </div>

                                              <div class="invalid-feedback mt-1">
                                                  Please upload a valid document.
                                              </div>
                                          </div>

                                                      <!-- Preview -->
                                                      <div id="docPreview" class="d-none mt-3 text-center">
                                                          <img class="img-fluid rounded shadow-sm mb-2" id="previewImg" style="max-height: 180px;">
                                                          <p class="small text-muted mb-0">Document preview</p>
                                                      </div>

                                                  </div>
                                              </div>
                                          </div>

                                             <div class="col-sm-3"></div>
                                             <div class="d-flex justify-content-between">
                                              <button type="button" class="btn btn-primary" id="back-to-bio">
                                                  <i class="fa-solid fa-arrow-right proceed-next me-1"></i> Back
                                              </button>

                                              <button type="submit" class="btn btn-primary">
                                                  proceed to Capture <i class="fa-solid fa-square-check proceed-next pe-2"></i>
                                              </button>
                                           </div>
                                        </form>     
                                    </div>

                                  
                                    
                                  </div>

                                  <!--Image Capture-->
                                  <div class="tab-pane fade shipping-wizard" id="facee" role="tabpanel" aria-labelledby="facee-tab"> 
                                    <h5 class="f-w-600">Capture and verify</h5>
                                    <p>Face the camera for Image capture</p>


                                    
                                     <form id="faceForm" action="{{ route('kyc.face.compare', $tenant->subdomain) }}">
                                      @csrf
                                      <input type="hidden" name="image" id="image">

                                      <video id="video" autoplay playsinline class="w-100 rounded"></video>
                                      <canvas id="canvas" class="d-none"></canvas>

                                      <div class="mt-3 d-flex justify-content-between">
                                          <button type="button" class="btn btn-primary" id="back-to-doc">
                                              <i class="fa-solid fa-arrow-right proceed-next me-1"></i> Back
                                          </button>

                                          <button type="button" class="btn btn-primary" id="capture">
                                              Capture & Verify
                                          </button>
                                      </div>
                                  </form>


                                  </div>
                                  
                                  <div class="tab-pane fade shipping-wizard finish-wizard1" id="finish-wizard" role="tabpanel" aria-labelledby="finish-wizard-tab">
                                    
                                        <div class="row">

                                             <div class="col-md-12">
                                               <div class="order-confirm"><img src="{{asset('assets/images/gif/success/successful.gif')}}" alt="popper">
                                                <h4 class="f-w-600">Thank you! for Completing Your KYC.</h4>
                                                
                                              </div>
                                              
                                                <div class="text-center mt-4">
                                                    <button type="button" class="btn btn-primary" id="back-to-doc">
                                                        <i class="fa-solid fa-arrow-right proceed-next me-1"></i> Back
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                         Click Finish
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        
                                  </div>
                                  

                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
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
$('#state').on('change', function () {
    let stateId = $(this).val();
    $('#lga').html('<option value="">Loading...</option>');

    if (!stateId) return;

    $.get(`/lgas/${stateId}`, function (data) {
        let options = '<option value="">Select LGA</option>';

        data.forEach(lga => {
            options += `<option value="${lga.id}">${lga.name}</option>`;
        });

        $('#lga').html(options);
    });
});
</script>

<script>
window.KYC_STEP = "{{ $kyc->current_step }}"; // bio | document | completed
</script>

<script>
/* ===========================
   CLEAR FIELD ERRORS ON INPUT
=========================== */
$(document).on('input change', '#bioForm input, #bioForm select, #bioForm textarea', function () {
    $(this).removeClass('is-invalid');
    $(this).next('.invalid-feedback').remove();
});

/* ===========================
   ENABLE TAB HELPER
=========================== */
function enableTab(tabId) {
    const tab = document.querySelector(tabId);
    if (!tab) return;

    tab.classList.remove('disabled');
    tab.removeAttribute('tabindex');
    tab.setAttribute('aria-selected', 'false');
}

/* ===========================
   RESTORE STEP + STATE ON LOAD
=========================== */
document.addEventListener('DOMContentLoaded', function () {

    const step = window.KYC_STEP || 'bio';

    const stepsMap = {
        bio: '#bio-tab',
        document: '#doc-tab',
        face : '#facee-tab',
        completed: '#finish-wizard-tab'
    };

    // Enable completed steps
    if (step === 'bio') {
    // only bio enabled
    }

    if (step === 'document') {
        enableTab('#bio-tab');
        enableTab('#doc-tab');
    }

    if (step === 'face') {
        enableTab('#bio-tab');
        enableTab('#doc-tab');
        enableTab('#facee-tab');
    }

    if (step === 'completed') {
        enableTab('#bio-tab');
        enableTab('#doc-tab');
        enableTab('#facee-tab');
        enableTab('#finish-wizard-tab');
    }


    // Show correct step
    if (stepsMap[step]) {
        new bootstrap.Tab(document.querySelector(stepsMap[step])).show();
    }

    // Auto redirect if fully completed
    if (step === 'completed') {
        setTimeout(() => {
            window.location.href = "{{ route('tenant_user_dashboard', app('tenant')->subdomain) }}";
        }, 3000);
    }
});

/* ===========================
   BIO FORM SUBMIT
=========================== */
$('#bioForm').on('submit', function (e) {
    e.preventDefault();

    let form = $(this);

    $('.invalid-feedback').remove();
    $('.is-invalid').removeClass('is-invalid');

    $.ajax({
        url: form.attr('action'),
        method: 'POST',
        data: form.serialize(),

        success: function () {
            alert('Bio Data Completed');
            enableTab('#doc-tab');
            new bootstrap.Tab(document.querySelector('#doc-tab')).show();
        },

        error: function (xhr) {
            if (xhr.status === 422) {
                $.each(xhr.responseJSON.errors, function (field, messages) {
                    let input = $('[name="' + field + '"]');
                    input.addClass('is-invalid');
                    input.after(`<div style="color:#dc3545;"  class="invalid-feedback">${messages[0]}</div>`);
                });
            }
        }
    });
});

/* ===========================
   DOCUMENT FORM SUBMIT
=========================== */
$('#docForm').on('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    $('.invalid-feedback').remove();
    $('.is-invalid').removeClass('is-invalid');

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,

        success: function () {
            alert('Document Upload Completed');
            // enableTab('#finish-wizard-tab');
            // new bootstrap.Tab(document.querySelector('#finish-wizard-tab')).show();
            enableTab('#facee-tab');
            new bootstrap.Tab(document.querySelector('#facee-tab')).show();
        },

        error: function (xhr) {
            if (xhr.status === 422) {
                $.each(xhr.responseJSON.errors, function (field, messages) {
                    let input = $('[name="' + field + '"]');
                    input.addClass('is-invalid');
                    input.after(`<div style="color:#dc3545;" class="invalid-feedback">${messages[0]}</div>`);
                });
            }
        }
    });
});

/* ===========================
   BLOCK DISABLED TABS
=========================== */
$(document).on('click', '.nav-link.disabled', function (e) {
    e.preventDefault();
});
</script>

<script>
/* ===========================
   BACK BUTTON HANDLERS
=========================== */

// Back from DOC → BIO
$(document).on('click', '#back-to-bio', function () {
    enableTab('#bio-tab');
    new bootstrap.Tab(document.querySelector('#bio-tab')).show();
});

// Back from FINISH → DOC
$(document).on('click', '#back-to-doc', function () {
    enableTab('#doc-tab');
    new bootstrap.Tab(document.querySelector('#doc-tab')).show();
});

// Back from Caputur  → DOC
$(document).on('click', '#back-to-facee', function () {
    enableTab('#facee-tab');
    new bootstrap.Tab(document.querySelector('#doc-tab')).show();
});
</script>



<script>
/* ===========================
   JS — Camera + Capture + Verify
=========================== */ 
const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const imageInput = document.getElementById('image');

// Start Camera
navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => video.srcObject = stream)
    .catch(() => alert('Camera access denied'));


$('#capture').on('click', function () {

    const canvas = document.getElementById('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext('2d').drawImage(video, 0, 0);

    $('#image').val(canvas.toDataURL('image/jpeg'));

    $.ajax({
        url: "{{ route('kyc.face.compare', $tenant->subdomain) }}",
        method: 'POST',
        data: $('#faceForm').serialize(),

        success: function (res) {
            alert(`Face verified (${res.confidence}%)`);
            console.log(res.confidence);
            enableTab('#finish-wizard-tab');
            new bootstrap.Tab(
                document.querySelector('#finish-wizard-tab')
            ).show();
        },

        error: function (xhr) {
            alert(xhr.responseJSON.message || 'Face verification failed');
        }
    });
});

</script>


<script>
document.getElementById('id_document').addEventListener('change', function (e) {
    const file = e.target.files[0];
    if (!file) return;

    if (!file.type.startsWith('image/')) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('previewImg').src = e.target.result;
        document.getElementById('docPreview').classList.remove('d-none');
    };
    reader.readAsDataURL(file);
});
</script>


@endsection


