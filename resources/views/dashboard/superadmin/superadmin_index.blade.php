@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin Dashboard
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@section('content')
 @php
                $currencyExchangeRateNgn = DB::table('currency')->where('code','NGN')->first();
                $currencyExchangeRateUsd = DB::table('currency')->where('code','USD')->first();
                $Usdbal = ($wallet->balance ?? 0)/($currencyExchangeRateNgn->rate);
           @endphp
   <div class="page-body">
        <!-- Container-fluid end-->
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Superadmin Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
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
          <!-- Container-fluid end-->

          <!-- Container-fluid starts-->
               <div class="container-fluid default-dashboard">
                   <!--start-->
                        <div class="row g-4 justify-content-center">

                           <div class="container-fluid table-space basic_table">
                             <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Estates</h4>
                                                        <h3 style="font-size: 15px;">
                                                        {{ $tenantCounts }}
                                                        </h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                            
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Subscriptions </h4>
                                                        <h3 style="font-size: 15px;">{{ $totalsub }}</h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Users </h4>
                                                        <h3 style="font-size: 15px;">{{ $totalusers }}</h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Invitations </h4>
                                                        <h3 style="font-size: 15px;">{{ $invitationsCount }}</h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Visitors </h4>
                                                        <h3 style="font-size: 15px;">{{ $visitorscount }}</h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="chart-widget-top">
                                                <div class="row card-body pb-0 m-0">
                                                    <div class="col-xl-9 col-lg-8 col-9 p-0">
                                                        <h4 class="mb-2">Total Amount </h4>
                                                        <h3 style="font-size: 15px;">
                                                            {{$currencyExchangeRateNgn->symbol}}{{number_format($totalamount ?? 0,2,'.',',')}}
                                                            </h3>
                                                        <h3 style="margin-top: 15px;"></h3>
                                                        <span></span>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    
                            </div>

                            
                        </div>

                           

                        </div>


                   <!--end-->
          </div>
          <!-- Container-fluid end-->
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
                          <div id="transaction_charttY"></div>
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
                    <h3>Pie chart</h3>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          <div style="width: 400px; height: 400px;margin: 0 auto;">
                                <canvas id="pieChart"></canvas>
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
                    <h3>Subscription History</h3>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                            <th scope="col">Sn</th>
                            <th scope="col">Subscriber</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Plan Amount</th>
                            <th scope="col">Billing Cycle</th>
                            <th scope="col">Starts At</th>
                            <th scope="col">Ends At</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(!empty($subscriptions))

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

                          @foreach($subscriptions as $value)

                            @php
        
                                $colorClass = $rowColors[$value->id % count($rowColors)];
                            @endphp

                            <tr class="{{$colorClass}}">
                              <th scope="row">{{$sn++}}</th>
                              <td>{{$value->user->first_name}} {{$value->user->last_name}}</td>
                              <td>{{$value->plan->name ?? ''}}</td>
                              <td>&#8358;{{$value->plan->price ?? ''}}</td>
                              <td>{{$value->billing_cycle ?? ''}}</td>
                              <td>{{\Carbon\Carbon::parse($value->starts_at)->format('d/m/Y')}}</td>
                              <td>{{\Carbon\Carbon::parse($value->ends_at)->format('d/m/Y')}}</td>
                              <td>
                                @if($value->status == 'active')
                                   <span class="badge badge-light-success">{{$value->status}}</span>
                                @elseif($value->status == 'cancelled')
                                   <span class="badge badge-light-warning">{{$value->status}}</span>
                                @elseif($value->status == 'expired')
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
                    {{$subscriptions->render()}}
                  </div>
                </div>
              </div>
              
            </div>
            <!--end another row-->

            <!--another row-->
            <div class="row">
              <div class="col-sm-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border">
                    <h3>Users</h3>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                            <th scope="col">Sn</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Estate</th>
                            <th scope="col">Status</th>
                            <th scope="col">Date Registered</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(!empty($allusers))

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

                          @foreach($allusers as $value)

                            @php
        
                                $colorClass = $rowColors[$value->id % count($rowColors)];
                            @endphp

                            <tr class="{{$colorClass}}">
                              <th scope="row">{{$sn++}}</th>
                              <td>{{$value->first_name ?? ''}} </td>
                              <td>{{$value->last_name ?? ''}}</td>
                              <td>{{$value->email}}</td>
                              <td>{{$value->role ?? 'N/A' }}</td>
                              <td>{{$value->kyc->phone ?? 'N/A' }}</td>
                              <td>{{$value->kyc->tenant->estate_name ?? 'Not Available'}}</td>
                              <td>
                                  @if($value?->kyc?->current_step == 'completed')
                                    <span class="badge badge-light-success">
                                                Verified
                                    </span>
                                  @else 
                                    <span class="badge badge-light-danger">
                                               Not Verified
                                    </span>
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
                    {{$allusers->render()}}
                  </div>
                </div>
              </div>
              
            </div>
            <!--end another row-->

            <!--another row-->
            <div class="row">
              <div class="col-sm-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border">
                    <h3>Invitations</h3>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                            <th scope="col">Sn</th>
                            <th scope="col">Resident</th>
                            <th scope="col">Estate</th>
                            <th scope="col">Resident Email</th>
                            <th scope="col">Resident Phone Number</th>
                            <th scope="col">Visitor</th>
                            <th scope="col">Visitor Email</th>
                            <th scope="col">Visitor Phone Number</th>
                            <th scope="col">Visit Date</th>
                            <th scope="col">Valid From</th>
                            <th scope="col">Valid To</th>
                            <th scope="col">Status</th>
                            <th scope="col">Used At</th>
                            <th scope="col">Exited At</th>
                            <th scope="col">Access Code</th>
                            <th scope="col">Date Registered</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(!empty($allvisitors))

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

                          @foreach($allvisitors as $value)

                            @php
        
                                $colorClass = $rowColors[$value->id % count($rowColors)];
                            @endphp

                            <tr class="{{$colorClass}}">
                              <th scope="row">{{$sn++}}</th>
                              <td>{{$value->resident->first_name ?? ''}} {{$value->resident->last_name ?? ''}} </td>
                              <td>{{$value->tenant->estate_name ?? ''}}</td>
                              <td>{{$value->resident->email ?? 'N/A' }}</td>
                              <td>{{$value->resident->kyc->phone ?? 'N/A' }}</td>
                              
                              <td>{{$value->visitor->first_name ?? 'N/A' }} {{$value->visitor->last_name ?? 'N/A' }}</td>
                              <td>{{$value->visitor->email ?? 'N/A'}}</td>
                              <td>{{$value->visitor->phone ?? 'N/A' }}</td>
                              
                              <td>{{\Carbon\Carbon::parse($value->visit_date)->format('d/m/Y')}}</td>
                              <td>{{\Carbon\Carbon::parse($value->valid_from)->format('d/m/Y')}}</td>
                              <td>{{\Carbon\Carbon::parse($value->valid_to)->format('d/m/Y')}}</td>
                              <td>{{$value->status ?? 'N/A' }}</td>
                              <td>{{$value->used_at ? \Carbon\Carbon::parse($value->used_at)->format('d/m/Y') : 'N/A'}}</td>
                              
                              <td>{{$value->exited_at ? \Carbon\Carbon::parse($value->exited_at)->format('d/m/Y') : 'N/A' }}</td>
                               <td>{{$value->access_code ?? 'N/A' }}</td>
                              <td>{{\Carbon\Carbon::parse($value->created_at)->format('d/m/Y')}}</td>
                            </tr>

                          @endforeach

                          @else

                          <p style="text-align:center">No Data avaliable</p>

                          @endif
                      </tbody>
                    </table>
                    {{$allvisitors->render()}}
                  </div>
                </div>
              </div>
              
            </div>
            <!--end another row-->


            <!--another row-->
            <div class="row">
              <div class="col-sm-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border">
                    <h3>Access Log</h3>
                    
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="border-bottom-secondary border-top-0">
                            <th scope="col">Sn</th>
                            <th scope="col">Resident</th>
                            <th scope="col">Estate</th>
                            <th scope="col">Visitor</th>
                            <th scope="col">Visitor Email</th>
                            <th scope="col">Visitor Phone Number</th>
                            <th scope="col">Visit Date</th>
                            <th scope="col">Valid From</th>
                            <th scope="col">Valid To</th>
                            <th scope="col">Used At</th>
                            <th scope="col">Exited At</th>
                            <th scope="col">Access Code</th>
                            <th scope="col">Gate</th>
                            <th scope="col">Action At Gate</th>
                        </tr>
                      </thead>
                      <tbody>
                          @if(!empty($allAccessLogs))

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

                          @foreach($allAccessLogs as $value)

                            @php
        
                                $colorClass = $rowColors[$value->id % count($rowColors)];
                            @endphp

                            <tr class="{{$colorClass}}">
                              <th scope="row">{{$sn++}}</th>
                              <td>{{$value->invitation->resident->first_name ?? 'N/A'}} {{$value->invitation->resident->last_name ?? 'N/A'}} </td>
                              <td>{{$value->invitation->tenant->estate_name ?? 'N/A'}}</td>
                              
                              <td>{{$value->invitation->visitor->first_name ?? 'N/A'}}</td>
                              <td>{{$value->invitation->visitor->email ?? 'N/A'}}</td>
                              <td>{{$value->invitation->visitor->phone_number ?? 'N/A'}}</td>
                              <td>{{$value->invitation->visit_date ? \Carbon\Carbon::parse($value->invitation->visit_date)->format('d/m/Y') : 'N/A'}}</td>
                              <td>{{$value->invitation->valid_from ? \Carbon\Carbon::parse($value->invitation->valid_from)->format('d/m/Y') : 'N/A'}}</td>
                              <td>{{\Carbon\Carbon::parse($value->invitation->valid_to)->format('d/m/Y')}}</td>
                              <td>{{$value->invitation->used_at ? \Carbon\Carbon::parse($value->invitation->used_at)->format('d/m/Y') : 'N/A'}}</td>
                              <td>{{$value->invitation->exited_at ? \Carbon\Carbon::parse($value->invitation->exited_at)->format('d/m/Y') : 'N/A' }}</td>
                              <td>{{$value->invitation->access_code ?? 'N/A' }}</td>
                              <td>{{$value->gate_name ?? 'N/A' }}</td>
                              <td>{{$value->action ?? 'N/A' }}</td>
                            </tr>

                          @endforeach

                          @else

                          <p style="text-align:center">No Data avaliable</p>

                          @endif
                      </tbody>
                    </table>
                    {{$allvisitors->render()}}
                  </div>
                </div>
              </div>
              
            </div>
            <!--end another row-->
         
        </div>
@endsection


@section('script')


<script>
    const pieChartData = @json($pieChartData);
    const ctx = document.getElementById('pieChart').getContext('2d');

    const data = {
        labels: Object.keys(pieChartData),
        datasets: [{
            data: Object.values(pieChartData),
            backgroundColor: [
                '#4CAF50',
                '#2196F3',
                '#FFC107',
                '#FF5722',
                '#9C27B0'
            ]
        }]
    };

    const pieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
        responsive: true,
        maintainAspectRatio: false
      }
    });
</script>

<script>
var optionscolumnchart = {
  series: [
    {
      name: "Amount",
      data: @json($theTransactionChartData),
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
  document.querySelector("#transaction_charttY"),
  optionscolumnchart
);
chartcolumnchart.render();
</script>

@endsection