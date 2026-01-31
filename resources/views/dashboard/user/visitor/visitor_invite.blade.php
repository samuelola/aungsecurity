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
            <div class="row">
               
              <div class="col-xxl-6 col-xl-2"></div>
             
               <div class="col-xxl-6 col-xl-8">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Invite a Visitor</h3>
                  </div>
                  <div class="card-body transaction-history pt-0 mt-3">
                      
                      <form class="row" method="post" action="{{route('visitor.store',$tenant->subdomain)}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Visitor Full Name</label>
                          <input class="form-control" id="exampleFormControlInput1" name="full_name" type="text" placeholder="Enter Full Name" value="{{ old('full_name') }}">
                          @error('full_name')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Vistor Email address</label>
                          <input class="form-control" name="email" id="exampleFormControlInput1" type="email" placeholder="name@example.com" value="{{ old('email') }}">
                        </div>
                          @error('email')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror

                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Visitor Phone Number</label>
                          <input class="form-control" name="phone" id="exampleFormControlInput1" type="phone" placeholder="08067932796" value="{{ old('phone') }}">
                        </div>
                          @error('phone')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror

                        <!-- <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Purpose of Visit</label>
                          
                          <textarea class="form-control" name="purpose" id="exampleFormControlInput1" value="{{ old('purpose') }}"></textarea>
                        </div>
                          @error('purpose')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror -->

                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Date of Visit</label>
                          <input class="form-control" name="visit_date" id="exampleFormControlInput1" type="date"  value="{{ old('visit_date') }}">
                        </div>
                          @error('visit_date')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror 
                          
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Valid From (Time)</label>
                          <input class="form-control" name="valid_from" id="valid_from" type="time" value="{{ old('valid_from') }}">
                        </div>
                          @error('valid_from')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror
                          
                          
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Valid To (Time)</label>
                          <input class="form-control" name="valid_to" id="valid_to" type="time" value="{{ old('valid_to') }}" readonly>
                        </div>
                          @error('valid_to')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror  

                        
                        <div class="col">
                            <button class="btn btn-primary me-2" type="submit">Send Invitation</button>
                        </div>
                      </form>

                        
                  </div>
                </div>
              </div>
             
              <div class="col-xxl-6 col-xl-2"></div>

            </div>
          </div>
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
</script>

@endsection
