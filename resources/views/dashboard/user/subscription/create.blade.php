@extends('dashboard.user.tenant_master')

@section('title')
    Subscriptions
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
                  <h2>Subscriptions</h2>
                  
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
               
              
             
               <div class="col-xxl-6 col-xl-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Lists of Subscriptions</h3>
                  </div>
                  <div class="card-body pt-0 mt-3">
                    
                     <div class="card-body row pricing-block">
                    <div class="col-lg-3 col-md-6">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Standard</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">10</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>50GB Disk Space</li>
                          <li>50 Email Accounts</li>
                          <li>Maintenance</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Premium</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">20</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>10% on all product</li>
                          <li>50 Email Accounts</li>
                          <li>Maintenance</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Auther pack</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>Upload 50 product</li>
                          <li>50 Email Accounts</li>
                          <li>Maintenance</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                      <div class="pricingtable">
                        <div class="pricingtable-header">
                          <h3 class="title">Auther pack</h3>
                        </div>
                        <div class="price-value"><span class="currency">$</span><span class="amount">50</span><span class="duration">/mo</span></div>
                        <ul class="pricing-content">
                          <li>Upload 50 product</li>
                          <li>50 Email Accounts</li>
                          <li>Maintenance</li>
                          <li>15 Subdomains</li>
                        </ul>
                        <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="#">Sign Up</a></div>
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












