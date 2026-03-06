@extends('dashboard.user.tenant_master')

@section('title')
    Subscription Plans
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
                  <h2>All Subscription Plans</h2>
                  
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

                            @foreach($plans as $plan)

                            <div class="col-lg-4 col-md-6">

                                <div class="card shadow-sm border-0 h-100 pricing-card">

                                    <div class="card-body text-center p-4">

                                        <h4 class="fw-bold mb-3">{{ $plan->name }}</h4>

                                        <p class="text-muted">
                                            {{ $plan->description }}
                                        </p>

                                        <div class="my-4">

                                            <h2 class="fw-bold text-primary mb-0">
                                                &#8358;{{ number_format($plan->price, 2) }}
                                            </h2>

                                            <div class="fw-bold">
                                                {{ $plan->duration }}
                                            </div>

                                        </div>

                                        <hr>

                                        

                                        <form method="POST" action="{{route('subscribe', $tenant->subdomain)}}">
                                            @csrf

                                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">

                                            

                                            <input type="hidden" name="billing_cycle" value="{{ $plan->duration }}">

                                            @if($currentSubscription && $currentSubscription->subscription_plan_id == $plan->id)

                                                <button class="btn btn-primary w-100" disabled>
                                                    Current Plan
                                                </button>

                                            @else

                                                <button class="btn btn-primary w-100">
                                                    Choose Plan
                                                </button>

                                            @endif

                                        </form>

                                    </div>

                                </div>

                            </div>

                            @endforeach

                        </div>


                   <!--end-->
          </div>
        </div>


@endsection












