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

                                      
                                      
                                      <!-- <div class="col-sm-4">
                                        <label class="form-label" for="custom-zipcode">Zip Code</label>
                                        <input class="form-control" id="custom-zipcode" type="number" required="">
                                        <div class="invalid-feedback">Please provide a valid zip.</div>
                                      </div> -->
                                      
                                      
                                      <div class="col-12 text-end">
                                        
                                        <button type="submit" class="btn btn-primary">Proceed to Next<i class="fa-solid fa-id-badge proceed-next pe-2"> </i></button>
                                        
                                      </div>
                                    </form>
                                  </div>
                                  <div class="tab-pane fade shipping-wizard" id="doc" role="tabpanel" aria-labelledby="doc-tab"> 
                                    <h5 class="f-w-600">ID Document Information</h5>
                                    <p>Upload you ID information (National ID, Passport, driver’s license)</p>
                                    
                                    <!--row-->
                                    <div class="row g-3">
                                       <form method="post" action="{{route('kyc.doc',$tenant->subdomain)}}" class="row g-3 needs-validation basic-form" id="docForm" enctype="multipart/form-data">
                                           @csrf
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-6">
                                              <label class="form-label" for="customState-wizard">Select ID</label>
                                              <select class="form-select" id="id_type">
                                                <option selected="" disabled="">Select Document</option>
                                                <option>National ID</option>
                                                <option>Passport </option>
                                                <option>Driver’s license</option>
                                              </select>
                                              <div style="color:#dc3545;" class="invalid-feedback">Please select a valid id.</div>
                                              <input type="file" name="id_document">
                                            </div>
                                           <div class="col-sm-3"></div>
                                            
                                            
                                            <div class="col-12 text-end">
                                              <button type="submit" class="btn btn-primary">Finish Kyc
                                               <i class="fa-solid fa-square-check proceed-next pe-2"></i>
                                            </button>
                                            </div>
                                    </form>
                                      
                                    </div>

                                    <!--end of row-->
                                    
                                  </div>
                                  
                                  <div class="tab-pane fade shipping-wizard finish-wizard1" id="finish-wizard" role="tabpanel" aria-labelledby="finish-wizard-tab">
                                    <div class="order-confirm"><img src="../assets/images/gif/success/successful.gif" alt="popper">
                                      <h4 class="f-w-600">Thank you! for Completing Your KYC.</h4>
                                      
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
        completed: '#finish-wizard-tab'
    };

    // Enable completed steps
    if (['document', 'completed'].includes(step)) {
        enableTab('#doc-tab');
    }

    if (step === 'completed') {
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
            enableTab('#finish-wizard-tab');
            new bootstrap.Tab(document.querySelector('#finish-wizard-tab')).show();
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




@endsection


