@extends('dashboard.admin.admin_master')

@section('title')
    Subscription Plan
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
                  <h2>Subscriptions Plans</h2>
                  
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
            <div class="container-fluid default-dashboard">
               <div class="row justify-content-center">
                  <div class="col-xl-8">
                    <div class="card">
                      <div class="card-header card-no-border pb-0">
                        <h3>Create Plan</h3>
                      </div>
                      <div class="card-body pt-0 mt-3">
                         
                          <form method="POST" action="{{ route('admin_store_plan', $tenant->subdomain) }}">
                                @csrf

                                <div class="mb-3">
                                    <label>Plan Name</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror"
                                    >

                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Plan Description</label>
                                    <textarea 
                                        name="description"
                                        class="form-control @error('description') is-invalid @enderror"
                                    >{{ old('description') }}</textarea>

                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Duration</label>

                                    <select 
                                        name="duration" 
                                        id="duration"
                                        class="form-control @error('duration') is-invalid @enderror"
                                    >
                                        <option value="">Select Duration</option>
                                        <option value="monthly" {{ old('duration')=='monthly' ? 'selected' : '' }}>
                                            Monthly
                                        </option>
                                        <option value="yearly" {{ old('duration')=='yearly' ? 'selected' : '' }}>
                                            Yearly
                                        </option>
                                    </select>

                                    @error('duration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label>Price</label>

                                    <input 
                                        type="number"
                                        step="0.01"
                                        name="price"
                                        id="price"
                                        value="{{ old('price') }}"
                                        class="form-control @error('price') is-invalid @enderror"
                                    >

                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100">
                                    Create Plan
                                </button>

                            </form>

                            
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
const duration = document.getElementById('duration');
const price = document.getElementById('price');

// Initialize base monthly price from old input if present
let baseMonthlyPrice = parseFloat(price.value) || 0;

// Update baseMonthlyPrice when the admin types
price.addEventListener('input', function () {
    const currentPrice = parseFloat(this.value);
    if (isNaN(currentPrice)) return;

    if (duration.value === 'monthly') {
        baseMonthlyPrice = currentPrice;
    } else if (duration.value === 'yearly') {
        baseMonthlyPrice = currentPrice / 12;
    }
});

// When duration changes, update the price automatically
duration.addEventListener('change', function () {
    if (isNaN(baseMonthlyPrice)) return;

    if (this.value === 'monthly') {
        price.value = baseMonthlyPrice;
    } else if (this.value === 'yearly') {
        price.value = (baseMonthlyPrice * 12);
    }
});
</script>

@endsection









