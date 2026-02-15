@extends('dashboard.user.tenant_master')

@section('title')
    Wallet
@endsection


@section('content')

   <div class="row">
                <div class="col-md-12">
                        @if(session('error'))
                            
                           
                            <div class="alert alert-primary inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-heart"></i>
                                    <p>{!! session('error') !!}</p>
                                  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                </div>
                <div class="col-md-12">
                        @if(session('success'))
                            
                            <div class="alert alert-primary inverse alert-dismissible fade show" role="alert"><i class="fa-solid fa-heart"></i>
                                    <p>{{session('success')}}</p>
                                  <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa-solid fa-times" style="color:#fff;font-weight: 600;"></i>
                                  </button>
                            </div>
                        @endif
                </div>
  </div>

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Wallet</h2>
                  
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
           @php
                $currencyExchangeRateNgn = DB::table('currency')->where('code','NGN')->first();
                $currencyExchangeRateUsd = DB::table('currency')->where('code','USD')->first();
                $Usdbal = ($wallet->balance ?? 0)/($currencyExchangeRateNgn->rate);
           @endphp
          <div class="container-fluid default-dashboard">
            <div class="row">
               
              <div class="col-xl-4">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Total Balance</h3>
                        <h3 style="font-size: 15px;">{{$currencyExchangeRateNgn->symbol}}{{number_format($wallet->balance ?? 0,2,'.',',')}}</h3>
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

              <div class="col-xl-4">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Total Balance</h3>
                        <h3 style="font-size: 15px;">{{$currencyExchangeRateUsd->symbol}}{{number_format($Usdbal ?? 0,2,'.',',')}} 
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
              
              
              <div class="col-xl-4">
                <div class="card overflow-hidden" style="background-color: rgba(219, 218, 229, 1) !important;">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3>Fund Wallet</h3>
                        <a href="{{route('fundwallet',$tenant->subdomain)}}" style="margin-top: 10px;" class="btn btn-primary" type="button" data-bs-toggle="tooltip" data-bs-original-title="btn btn-primary">Fund</a>
                        <h3 style="margin-top: 0px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i style="color: #1d194b;font-weight: bolder;" class="fa-solid fa-wallet"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              

            </div>

            <div class="row">
              <div class="col-md-12 box-col-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <h3>Wallet  History</h3>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          <div id="transaction_wallet_chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--another row-->
                <div class="row">
              <div class="col-sm-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border">
                    <h3>Transition History</h3>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                            <th scope="col">Sn</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Gateway</th>
                            <th scope="col">Remarks</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Subscription</th>
                            <th scope="col">Reference</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(!is_null($transactions))

                          @php
                              // Define an array of background color classes
                              $rowColors = [
                                'border-bottom-success', 
                                'border-bottom-info', 
                                'border-bottom-warning', 
                                'border-bottom-danger', 
                                'border-bottom-secondary',
                                'border-bottom-primary',
                                'border-bottom-0'
                                ];

                                $sn = 1;
                          @endphp

                          @foreach($transactions as $value)

                            @php
        
                                $colorClass = $rowColors[$value->id % count($rowColors)];
                            @endphp

                            <tr class="{{$colorClass}}">
                              <th scope="row">{{$sn++}}</th>
                              <td>{{$value->user->first_name}} {{$value->user->last_name}}</td>
                              <td>{{$value->gateway ?? ''}}</td>
                              <td>{{$value->remarks ?? ''}}</td>
                              <td>&#8358;{{$value->amount ?? ''}}</td>
                              <td>{{$value->subscription->subscription_name ?? 'Not Available'}}</td>
                              <td>{{$value->reference ?? 'Not Available'}}</td>
                              <td>
                                @if($value->status == 'success')
                                   <span class="badge badge-light-success">{{$value->status}}</span>
                                @elseif($value->status == 'pending')
                                   <span class="badge badge-light-warning">{{$value->status}}</span>
                                @elseif($value->status == 'failed')
                                   <span class="badge badge-light-danger">{{$value->status}}</span>   
                                @endif
                                
                              </td>
                              <td>{{\Carbon\Carbon::parse($value->created_at)->format('d/m/Y')}}</td>
                            </tr>

                          @endforeach

                          @else

                          <p style="text-align:center">No Data avaliable</p>

                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            <!--end another row-->
          </div>
        </div>
@endsection



@section('script')

<script>
var optionscolumnchart = {
  series: [
    {
      name: "Transactions",
      data: @json($chartData),
    }
  ],
  chart: {
    type: "bar",
    height: 380,
    toolbar: { show: false }
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "40%",
      endingShape: "rounded",
    },
  },
  dataLabels: { enabled: false },
  stroke: {
    show: true,
    width: 1,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [
      "Jan","Feb","Mar","Apr","May","Jun",
      "Jul","Aug","Sep","Oct","Nov","Dec"
    ],
    axisTicks: { show: false },
    axisBorder: { color: "#C4C4C4" },
  },
  yaxis: {
    title: {
      text: "Amount (₦)",
      style: {
        fontSize: "14px",
        fontFamily: "Roboto, sans-serif",
        fontWeight: 500,
      },
    },
  },
  colors: [AdmiroAdminConfig.primary],
  tooltip: {
    y: {
      formatter: function (val) {
        return "₦ " + val.toLocaleString();
      },
    },
  },
  responsive: [
    {
      breakpoint: 576,
      options: {
        chart: { height: 200 }
      }
    }
  ]
};

var chartcolumnchart = new ApexCharts(
  document.querySelector("#transaction_wallet_chart"),
  optionscolumnchart
);
chartcolumnchart.render();
</script>

@endsection