@extends('dashboard.admin.admin_master')

@section('title')
    Admin Dashboard
@endsection


@section('content')
   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Admin Dashboard</h2>
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
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
               @php
                $currencyExchangeRateNgn = DB::table('currency')->where('code','NGN')->first();
                $currencyExchangeRateUsd = DB::table('currency')->where('code','USD')->first();
             
              @endphp
              <div class="col-xl-3">
                <div class="card overflow-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      <div class="col-xl-9 col-lg-8 col-9 p-0">
                        <h3 class="mb-2">Total Balance</h3>
                        <h3 style="font-size: 15px;">
                           <!--{{$currencyExchangeRateNgn->symbol}}{{number_format($wallet ?? 0,2,'.',',')}}-->
                           {{$currencyExchangeRateNgn->symbol}}{{number_format($earning ?? 0,2,'.',',')}} 
                        </h3>
                        <h3 style="margin-top: 15px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i class="fa-solid fa-money-bill"></i></h6>
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
                        <h6 class="text-success"><i class="ti-shield"></i></h6>
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
                        <h3 class="mb-2">Total Visitors</h3>
                        <h3 style="font-size: 15px;">{{$visitor_count}}</h3>
                        <h3 style="margin-top: 15px;"></h3>
                        <span></span>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-3 text-end p-0">
                        <h6 class="text-success"><i class="ti-user"></i></h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="card overflow-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      
                      <div class="col-12 p-0" style="padding-top: 10px !important;">
                        <h3 class="mb-2">Copy URL Link</h3>

                        <!-- Input + Copy Button -->
                        <div class="input-group mb-2">
                          <input type="text" id="refLink" class="form-control"
                            value="{{ url('/estate_resident_register')}}" readonly>

                          <button class="btn btn-success" onclick="copyLink()">Copy</button>
                        </div>

                        <!-- Popup message -->
                        <small id="copyMsg" style="color: green; display: none;">
                          Copied!
                        </small>

                        
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              {{-- <div class="col-xl-3">
                <div class="card overflow-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      
                      <div class="col-12 p-0" style="padding-top: 10px !important;">
                            <h3 class="mb-2">Offline Emergency Access Pin</h3>

                           
                            <div class="input-group mb-2">
                              <input type="text" id="EmergencyLink" class="form-control"
                                value="{{$getkyc?->emergency_pin}}" readonly>

                              <button class="btn btn-success" onclick="copyEmergencyLink()">Copy</button>
                            </div>

                           
                            <small id="copyEmergencyMsg" style="color: green; display: none;">
                              Copied!
                            </small>

                            <button class="btn btn-warning" onclick="regeneratePin()">
                              Regenerate Pin
                          </button>
                        
                      </div>

                      

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3">
                <div class="card overflow-hidden">
                  <div class="chart-widget-top">
                    <div class="row card-body pb-0 m-0">
                      
                      <div class="col-12 p-0" style="padding-top: 10px !important;">
                            <h3 class="mb-2">Offline Visitor Access Pin</h3>

                            
                            <div class="input-group mb-2">
                              <input type="text" id="EmergencyvisitorLink" class="form-control"
                                value="{{$getkyc?->emergency_visitor_pin}}" readonly>

                              <button class="btn btn-success" onclick="copyEmergencyvisitorLink()">Copy</button>
                            </div>

                            
                            <small id="copyEmergencyvisitorMsg" style="color: green; display: none;">
                              Copied!
                            </small>

                            <button class="btn btn-warning" onclick="regeneratevisitorPin()">
                              Regenerate Pin
                          </button>
                        
                      </div>

                      

                    </div>
                  </div>
                </div>
              </div> --}}

              

              <div class="row">
              <div class="col-md-12 box-col-12">
                <div class="card overflow-hidden">
                  <div class="card-header card-no-border pb-0">
                    <h3>Transaction Chart</h3>
                  </div>
                  <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                      <div class="row">
                        <div class="col-12">
                          
                          <div id="admin_transaction_chart"></div>
                        </div>
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
                            <div id="admin_invitation_chart"></div>

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
                  
                  <!--transaction History -->
                  <div class="card-body transaction-history pt-0">
                     <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr class="border-bottom-secondary border-top-0">
                                <th scope="col">Sn</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Name</th>
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

                              @foreach($transactionEarnings as $value)

                                @php
            
                                    $colorClass = $rowColors[$value->id % count($rowColors)];
                                @endphp

                                <tr class="{{$colorClass}}">
                                  <th scope="row">{{$sn++}}</th>
                                  
                                  <td>{{$value->gateway ?? ''}}</td>
                                  <td>{{$value->user?->first_name}} {{$value->user?->last_name}}</td>
                                  <td>&#8358;{{$value->tenant_earning ?? ''}}</td>
                                  <td>{{$value->subscription?->plan->name ?? 'Not Available'}}</td>
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
                  <!--end of transaction History -->

                </div>
              </div>

            </div>
          </div>
  </div>
@endsection


@section('script')

<script>
  function regeneratePin() {

    if (!confirm("Are you sure you want to regenerate your emergency pin?")) {
        return;
    }

    $.ajax({
        url: "{{ route('admin.emergency.pin.regenerate',$tenant->subdomain) }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {

            if (response.success) {

                $('#EmergencyLink').val(response.emergency_pin);

                $('#copyEmergencyMsg')
                    .text("New pin generated!")
                    .css("color", "blue")
                    .show()
                    .fadeOut(3000);
            }
        },

        error: function () {
            alert("Failed to regenerate pin. Try again.");
        }
    });
}
</script>

<script>
  function regeneratevisitorPin() {

    if (!confirm("Are you sure you want to regenerate your visitor emergency pin?")) {
        return;
    }

    $.ajax({
        url: "{{ route('admin.emergency.visitor.pin.regenerate',$tenant->subdomain) }}",
        method: "POST",
        data: {
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {

            if (response.success) {

                $('#EmergencyvisitorLink').val(response.emergency_visitor_pin);

                $('#copyEmergencyvisitorMsg')
                    .text("New pin generated!")
                    .css("color", "blue")
                    .show()
                    .fadeOut(3000);
            }
        },

        error: function () {
            alert("Failed to regenerate pin. Try again.");
        }
    });
}
</script>



<script>
  function copyLink() {
    const copyText = document.getElementById("refLink");

    navigator.clipboard.writeText(copyText.value);

    const msg = document.getElementById("copyMsg");
    msg.style.display = "inline";

    setTimeout(() => {
      msg.style.display = "none";
    }, 2000);
  }
</script>


<script>
  function copyEmergencyLink() {
    const copyText = document.getElementById("EmergencyLink");

    navigator.clipboard.writeText(copyText.value);

    const msg = document.getElementById("copyEmergencyMsg");
    msg.style.display = "inline";

    setTimeout(() => {
      msg.style.display = "none";
    }, 2000);
  }
</script>

<script>
  function copyEmergencyvisitorLink() {
    const copyText = document.getElementById("EmergencyvisitorLink");

    navigator.clipboard.writeText(copyText.value);

    const msg = document.getElementById("copyEmergencyvisitorMsg");
    msg.style.display = "inline";

    setTimeout(() => {
      msg.style.display = "none";
    }, 2000);
  }
</script>

<script>
var optionscolumnchart = {
  series: [
    {
      name: "Amount",
      data: @json($adminChartData),
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
  document.querySelector("#admin_transaction_chart"),
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
      text: "Number of Invitations Used"
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
  document.querySelector("#admin_invitation_chart"),
  options
);

chart.render();
</script>

@endsection