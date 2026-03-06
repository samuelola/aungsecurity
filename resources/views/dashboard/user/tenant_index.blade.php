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
                  <h2>Resident Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item" style="font-size: 18px;
    font-weight: 700;
    letter-spacing: 0.5px;">ID:{{$kyc->resident_id}}
     <p class="mb-0 text-title-gray" style="color:#000;">This is your resident Identification Number </p>
  </li>
                    
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
                    <h3>Transaction  History</h3>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          <div id="transaction_chart"></div>
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
                      <h3>Invitation History</h3>
                    </div>
                    <div class="bar-chart-widget">
                      <div class="bottom-content card-body">
                        <div class="row">
                          <div class="col-12">
                            <div id="invitation_chart"></div>

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
                    <h3>Transaction History</h3>
                  </div>
                  <div class="card-body transaction-history pt-0">
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

            </div>
          </div>
        </div>
@endsection


@section('script')

<script>
var optionscolumnchart = {
  series: [
    {
      name: "Amount",
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
  document.querySelector("#transaction_chart"),
  optionscolumnchart
);
chartcolumnchart.render();
</script>

<script>
var options = {
  series: [{
    name: "Invitations",
    data: @json($invitationData)
  }],
  chart: {
    type: "line",
    height: 350,
    toolbar: { show: false }
  },
  stroke: {
    curve: "smooth",
    width: 3
  },
  markers: {
    size: 4
  },
  xaxis: {
    categories: @json($invitationLabels),
  },
  yaxis: {
    title: {
      text: "Number of Invitations"
    },
    min: 0
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " invitation(s)";
      }
    }
  },
  colors: [AdmiroAdminConfig.primary],
  dataLabels: {
    enabled: false
  }
};

var chart = new ApexCharts(
  document.querySelector("#invitation_chart"),
  options
);

chart.render();
</script>


@endsection