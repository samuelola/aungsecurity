@extends('dashboard.user.tenant_master')

@section('title')
    Visitor Invite
@endsection


@section('content')

 <style>
 
input {
  cursor: text !important;
}

label{
  cursor: text !important;
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
                  <h2>Visitor Invite</h2>
                  
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
                    <div class="row justify-content-center">
                        <div class="col-xl-8">

                            <div class="card">
                                <div class="card-header">
                                    <h3>Create Invitation</h3>
                                </div>

                                <div class="card-body">

                                    <form method="POST" action="{{ route('visitor.store', $tenant->subdomain) }}">
                                        @csrf

                                        {{-- ================= INVITE TYPE ================= --}}
                                        <div class="mb-3">
                                            <label class="form-label">Invite Type</label>
                                            <select name="invite_type" id="invite_type" class="form-control">
                                                <option value="external" {{ old('invite_type')=='external'?'selected':'' }}>
                                                    External Visitor
                                                </option>
                                                <option value="resident" {{ old('invite_type')=='resident'?'selected':'' }}>
                                                    Estate Resident
                                                </option>
                                                <option value="self" {{ old('invite_type')=='self'?'selected':'' }}>
                                                    Myself
                                                </option>
                                            </select>
                                            @error('invite_type')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        {{-- ================= EXTERNAL FIELDS ================= --}}
                                        <div id="external_fields">

                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input class="form-control" name="first_name"
                                                      value="{{ old('first_name') }}">
                                                @error('first_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input class="form-control" name="last_name"
                                                      value="{{ old('last_name') }}">
                                                @error('last_name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" name="email" type="email"
                                                      value="{{ old('email') }}">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" name="phone"
                                                      value="{{ old('phone') }}">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>


                                        {{-- ================= RESIDENT FIELDS ================= --}}
                                        <div id="resident_fields" style="display:none;">

                                            <div class="mb-3">
                                                <label class="form-label">Select Resident</label>
                                                <select name="invited_resident_id" class="form-control">
                                                    <option value="">-- Select Resident --</option>
                                                    @foreach($residents as $res)
                                                        <option value="{{ $res->id }}"
                                                            {{ old('invited_resident_id')==$res->id?'selected':'' }}>
                                                            {{ $res->email }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('invited_resident_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>


                                        {{-- ================= DATE ================= --}}
                                        <div class="mb-3">
                                            <label class="form-label">Visit Date</label>
                                            <input class="form-control" name="visit_date" type="date"
                                                  value="{{ old('visit_date') }}">
                                            @error('visit_date')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        {{-- ================= TIME ================= --}}
                                        <div class="mb-3">
                                            <label class="form-label">Valid From</label>
                                            <input class="form-control" name="valid_from" id="valid_from"
                                                  type="time" value="{{ old('valid_from') }}">
                                            @error('valid_from')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Valid To</label>
                                            <input class="form-control" name="valid_to" id="valid_to"
                                                  type="time" value="{{ old('valid_to') }}" readonly>
                                            @error('valid_to')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>


                                        <button type="submit" class="btn btn-primary w-100">
                                            Send Invitation
                                        </button>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
          <!-- Container-fluid ends-->
        </div>
@endsection


@section('script')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const validFromInput = document.getElementById('valid_from');
    const validToInput   = document.getElementById('valid_to');

    validFromInput.addEventListener('change', function () {
        if (!this.value) return;

        // Get selected time
        const [hours, minutes] = this.value.split(':').map(Number);

        // Create date object and add 3 hours
        const date = new Date();
        date.setHours(hours);
        date.setMinutes(minutes);
        date.setSeconds(0);

        date.setHours(date.getHours() + 3);

        // Format back to HH:MM
        const newHours = String(date.getHours()).padStart(2, '0');
        const newMinutes = String(date.getMinutes()).padStart(2, '0');

        validToInput.value = `${newHours}:${newMinutes}`;
    });
});


// ================= DYNAMIC FIELD TOGGLE =================
const inviteType = document.getElementById('invite_type');
const externalFields = document.getElementById('external_fields');
const residentFields = document.getElementById('resident_fields');

function toggleFields() {

    if (inviteType.value === 'external') {
        externalFields.style.display = 'block';
        residentFields.style.display = 'none';
    }

    else if (inviteType.value === 'resident') {
        externalFields.style.display = 'none';
        residentFields.style.display = 'block';
    }

    else {
        externalFields.style.display = 'none';
        residentFields.style.display = 'none';
    }
}

inviteType.addEventListener('change', toggleFields);

// Run on page load (for validation errors)
toggleFields();
</script>

@endsection




