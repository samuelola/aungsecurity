@extends('dashboard.user.tenant_master')

@section('title')
    Subscription Checkout
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
                  <h2>Checkout</h2>
                  
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
                           

                           @php
                                $basePrice = $plan->price; // base price for selected duration
                                $accessFeeYearly = \App\Enums\Fee::accessFeeYearly;
                                $vat = \App\Enums\Fee::vat;
                                $payAsYouGoo = \App\Enums\Fee::payAsYouGoo;

                                // Adjust access fee based on billing cycle #10000
                                $accessFee = $plan->duration === 'monthly'
                                            ? round($accessFeeYearly / 12, 2)
                                            : $accessFeeYearly;

                                // Pay-as-you-go: 7% of base price
                                $payAsYouGo = round(($basePrice * $payAsYouGoo) / 100, 2);

                                $subtotal = $basePrice + $accessFee + $payAsYouGo;

                                $vat = ($basePrice * $vat) / 100;

                                $newvat = $vat;

                                // Total Payable = base price + all fees
                                $total = $subtotal + $newvat;

                                // Paystack charge or transaction fee
                                $fee = ($total * 1.5) / 100;

                                if ($total > 2500) {
                                    $fee += 100;
                                }
                                $paystackFee = round(min($fee, 2000), 2);
                                $new_total = $total + $paystackFee;

                            @endphp

                            <div class="card shadow-sm border-0 p-4 mb-4">
                                <h5 class="fw-bold mb-3">Subscription Summary</h5>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Plan:</span>
                                    <span class="fw-semibold">{{ $plan->name }}</span>
                                </div>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Billing Cycle:</span>
                                    <span class="fw-semibold text-capitalize">{{ $plan->duration }}</span>
                                </div>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Base Price:</span>
                                    <span class="fw-semibold">₦{{ number_format($basePrice,2) }}</span>
                                </div>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Access Code Generation Fee:</span>
                                    <span class="fw-semibold">₦{{ number_format($accessFee,2) }}</span>
                                </div>

                                <div class="mb-2 d-flex justify-content-between">
                                    <span>Pay as You Go:</span>
                                    <span class="fw-semibold">₦{{ number_format($payAsYouGo,2) }}</span>
                                </div>

                                <div class="mb-3 d-flex justify-content-between">
                                    <span>Vat (7.5%):</span>
                                    <span class="fw-semibold">₦{{ number_format($newvat,2) }}</span>
                                </div>

                                <!-- Paystack Fee -->
                                <div class="mb-3 d-flex justify-content-between">
                                    <span>Process Fee:</span>
                                    <span class="fw-semibold">₦{{ $paystackFee }}</span>
                                </div>

                                

                                <hr>

                                <div class="d-flex justify-content-between">
                                    <span class="fw-bold">Total Payable:</span>
                                    <span class="fw-bold text-primary">₦{{ number_format($new_total,2) }}</span>
                                </div>

                                <div class="mt-3">
                                    <form method="POST" action="{{ route('subscribe', $tenant->subdomain) }}">
                                        @csrf
                                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                        <input type="hidden" name="billing_cycle" value="{{ $plan->duration }}">
                                        <input type="hidden" name="total" value="{{ $total }}">
                                        <input type="hidden" name="pay_as_you_go" value="{{ $payAsYouGo }}">
                                        <input type="hidden" name="access_fee" value="{{ $accessFee }}">
                                        <input type="hidden" name="base_price" value="{{ $basePrice }}">
                                        <input type="hidden" name="vatt" value="{{ $newvat }}">
                                        <input type="hidden" name="paystackFee" value="{{ $paystackFee }}">
                                        
                                        
                                        <button type="submit" class="btn btn-primary w-100">
                                            Confirm Subscription
                                        </button>
                                    </form>
                                </div>
                            </div>

                        </div>


                   <!--end-->
          </div>
        </div>


@endsection












