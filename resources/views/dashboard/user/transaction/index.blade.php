@extends('dashboard.user.tenant_master')

@section('title')
    Transaction
@endsection


@section('content')

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Transaction</h2>
                  
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
                 <div class="row"><!--end of row -->
                <div class="col-sm-12">
                  <div class="card overflow-hidden">
                    <div class="card-header card-no-border">
                      <h3>Transaction Table</h3>
                      <!-- <p class="desc mb-0 mt-1"><span>use a class</span><code>table-*.border-bottom-*</code><span>class for Border bottom color</span></p> -->
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
                
              </div><!--end of row -->

          </div>
        </div>
@endsection

