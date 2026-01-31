@extends('dashboard.user.tenant_master')

@section('title')
    Resident
@endsection


@section('content')

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Resident</h2>
                  
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
                      <h3>Resident Details</h3>
                      <!-- <p class="desc mb-0 mt-1"><span>use a class</span><code>table-*.border-bottom-*</code><span>class for Border bottom color</span></p> -->
                    </div>
                      <!--enter details-->
                           <div class="row">
                                <div class="col-md-4 text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Photo</h4>
                                            @if($resident->kyc->face_image)
                                                <img src="{{ asset('storage/'.$resident->kyc->face_image) }}"
                                                    class="img-fluid rounded-circle mb-3"
                                                    style="width:150px; height:150px; object-fit:cover;">
                                            @else
                                                <img src="https://placeholder.com/150"
                                                    class="img-fluid rounded-circle mb-3">
                                            @endif
                                        </div>
                                        

                                    </div>
                                     <div class="row mt-3">
                                        <div class="col-md-12">
                                            <h5>Kyc Status</h5>
                                            <span class="badge badge-light-success">
                                                @if($resident->kyc->current_step == 'completed')
                                                    Verified
                                                @endif
                                            </span>
                                        </div>
                                        

                                    </div>
                                    
                                </div>

                                <div class="col-md-8">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Resident Id</th>
                                            <td>{{$resident->kyc->resident_id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Full Name</th>
                                            <td>{{$resident->first_name}} {{$resident->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $resident->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>{{ $resident->kyc->phone ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Occupant</th>
                                            <td>{{ $resident->kyc->occupant ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Flat Number</th>
                                            <td>{{ $resident->kyc->flat_number ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>{{ $resident->kyc->address ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>{{ $resident->kyc->state->name ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lga</th>
                                            <td>{{ $resident->kyc->lga->name ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Agent Name</th>
                                            <td>{{ $resident->kyc->agent_name ?? 'N/A' }}</td>
                                        </tr>
                                         <tr>
                                            <th>Agent Number</th>
                                            <td>{{ $resident->kyc->agent_number ?? 'N/A' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                      <!--end details-->
                  </div>
                </div>
                
              </div><!--end of row -->

          </div>
        </div>
@endsection

