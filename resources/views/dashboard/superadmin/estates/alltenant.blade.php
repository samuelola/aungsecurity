@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin | Estates
@endsection


@section('content')
   <div class="page-body">
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
          <!-- Container-fluid starts-->
           <div class="container-fluid default-dashboard">
                   <!--start-->
                

                        <div class="row g-4 justify-content-center">

                           <div class="container-fluid table-space basic_table">
                            <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                    <div class="card-header card-no-border">
                                        <h3>All Tenants</h3>
                                        
                                    </div>
                                        <div class="table-responsive signal-table">
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sn</th>
                                                <th scope="col">Estate Name</th>
                                                <th scope="col">Subdomain</th>
                                                <th scope="col">Estate Manager Name</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sn = 1;
                                                @endphp
                                                @foreach($tenants as $tenant)
                                                <tr>
                                                    <th scope="row">{{$sn++}}</th>
                                                    <td scope="row">{{ucfirst($tenant->estate_name ?? 'N/A')}} </td>
                                                    <td scope="row">{{$tenant->subdomain ?? 'N/A'}} </td>
                                                    <td scope="row">{{ucfirst($tenant->first_name ?? 'N/A')}} {{ucfirst($tenant->last_name ?? 'N/A')}} </td>
                                                    <td>{{ $tenant->created_at->format('d M Y') }}</td>
                                                    <td>
                                                        <a href="{{ route('superadmin.estate.users', $tenant->id) }}" 
                                                        class="btn btn-info btn-sm d-inline-flex align-items-center gap-1">
                                                            <i class="bi bi-people-fill"></i> View Estates
                                                        </a>
                                                    </td>
                                                
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>

                           

                        </div>


                   <!--end-->
          </div>
         
        </div>
@endsection


@section('script')



@endsection