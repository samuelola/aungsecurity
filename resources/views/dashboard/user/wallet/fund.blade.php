@extends('dashboard.user.tenant_master')

@section('title')
    Fund Wallet
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
                  <h2>Fund Wallet</h2>
                  
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
                    <h3>Fund Your Wallet</h3>
                  </div>
                  <div class="card-body transaction-history pt-0 mt-3">
                      <form class="row" method="post" action="{{route('savefundWallet',$tenant->subdomain)}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Amount</label>
                          <input class="form-control" id="exampleFormControlInput1" name="amount" type="number" placeholder="Enter Amount" value="{{ old('amount') }}">
                          @error('amount')
                                <p class="text-red-500 text-sm" style="color:#d22f2f">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="exampleFormControlInput1">Email address</label>
                          <input class="form-control" name="email" id="exampleFormControlInput1" type="email" placeholder="name@example.com" value="{{auth()->user()->email}}">
                        </div>
                        
                        <div class="col">
                            <button class="btn btn-primary me-2" type="submit">Fund Wallet</button>
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

