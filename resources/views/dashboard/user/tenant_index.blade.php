@extends('dashboard.user.tenant_master')

@section('title')
    Dashboard
@endsection


@section('content')
   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>User Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item" style="font-size: 20px;
    font-weight: 700;
    letter-spacing: 0.5px;">ID:{{$kyc->resident_id}}</li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
              
              @php
                $currencyExchangeRateNgn = DB::table('currency')->where('code','NGN')->first();
                $currencyExchangeRateUsd = DB::table('currency')->where('code','USD')->first();
             
              @endphp
              <div class="col-xl-3">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Total Balance</h3>
                        <h3 style="font-size: 15px;">
                          
                          {{$currencyExchangeRateNgn->symbol}}{{number_format($wallet->balance ?? 0,2,'.',',')}} 
                        </h3>
                        <h3 style="margin-top: 15px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i style="color: #1d194b;font-weight: bolder;" class="fa-solid fa-money-bill"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="col-xl-3">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Status </h3>
                        <h3 style="font-size: 15px;">
                           @if($kyc->kyc_completed == 1)
                              Verified
                           @else
                              Not Verified   
                           @endif
                        </h3>
                        <h3 style="margin-top: 15px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i style="color: #1d194b;font-weight: bolder;" class="fa-solid fa-shield"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Visitors Daily</h3>
                        <h3 style="font-size: 15px;">0</h3>
                        <h3 style="margin-top: 15px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i style="color: #1d194b;font-weight: bolder;" class="fa-solid fa-user"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Subscription</h3>
                        <h3 style="font-size: 15px;">Plan: Free</h3>
                        <h3 style="font-size: 12px;margin-top: 5px;">Expires 1st Dec,2025</h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i style="color: #1d194b;font-weight: bolder;" class="fa-solid fa-credit-card"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-md-12 box-col-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <h3>Monthly  History</h3>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          <div id="chart-widget4"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
              <div class="col-xxl-6 col-xl-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Transition History</h3>
                  </div>
                  <div class="card-body transaction-history pt-0">
                    <div class="table-responsive theme-scrollbar">
                      <table class="table display table-bordernone" id="transaction" style="width:100%">
                        <thead>
                          <tr> 
                            <th>Item Name</th>
                            <th>Invoice No.</th>
                            <th>Credit/Debit</th>
                            <th>Date/Time</th>
                            <th class="text-center">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/1.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Samsung TV</h6></a>
                                  <p>Item Sold</p>
                                </div>
                              </div>
                            </td>
                            <td> #px0101</td>
                            <td class="text-success">+ $3460</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Jan 25</h6>
                                  <p>08:35:65</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/2.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Spring Bed</h6></a>
                                  <p>Bought item</p>
                                </div>
                              </div>
                            </td>
                            <td> #rf304f</td>
                            <td class="text-danger">- $910</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Feb 20</h6>
                                  <p>12:35:00  </p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/3.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Long Dress</h6></a>
                                  <p>Bought item</p>
                                </div>
                              </div>
                            </td>
                            <td> #dnj480</td>
                            <td class="text-success">+ $4380</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Oct 25</h6>
                                  <p>04:39:08</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-warning border-light-warning text-warning">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/4.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Phillip Lightbulb</h6></a>
                                  <p>Item Sold</p>
                                </div>
                              </div>
                            </td>
                            <td> #g189d0</td>
                            <td class="text-success">+ $246</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Dec 25</h6>
                                  <p>08:35:65</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-danger border-light-danger text-danger">Canceled</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/5.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Sofa Hauga</h6></a>
                                  <p>Item Sold</p>
                                </div>
                              </div>
                            </td>
                            <td> #31d8fs</td>
                            <td class="text-danger">- $220</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Jan 25</h6>
                                  <p>10:20:87</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="flex-shrink-0"><img src="../assets/images/dashboard-1/icon/6.png" alt=""/></div>
                                <div class="flex-grow-1"><a href="product-page.html">
                                    <h6>Apple iMac 19”</h6></a>
                                  <p>Item Sold</p>
                                </div>
                              </div>
                            </td>
                            <td> #g5384h</td>
                            <td class="text-success">+ $983</td>
                            <td>
                              <div class="d-flex"> 
                                <div class="flex-grow-1">
                                  <h6>Feb 05</h6>
                                  <p>10:49:50</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-end">
                              <div class="btn bg-light-success border-light-success text-success">Completed</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
@endsection