@extends('dashboard.user.tenant_master')

@section('title')
    Notifications
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
                  <h2>Notifications</h2>
                  
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
                    <h3>All Notifications</h3>
                  </div>
                      <div class="row">
                              <div class="col-md-12">
                                    @forelse($notifications as $notification)
                                        <div class="border rounded p-3 mb-2 d-flex align-items-start">
                                            
                                            <!-- LEFT: Message (takes remaining space) -->
                                            <div class="flex-grow-1 me-3">
                                                <strong>
                                                    {{ is_array($notification->data['title'] ?? null)
                                                        ? implode(', ', $notification->data['title'])
                                                        : ($notification->data['title'] ?? 'Notification') }}
                                                </strong>

                                                <p class="mb-0 text-wrap">
                                                    {!! is_array($notification->data['message'] ?? null)
                                                        ? implode(', ', $notification->data['message'])
                                                        : ($notification->data['message'] ?? 'Notification') !!}
                                                </p>
                                            </div>

                                            <!-- RIGHT: Time (never wraps or shifts) -->
                                            <small class="text-muted text-nowrap">
                                                {{ $notification->created_at->diffForHumans() }}
                                            </small>

                                        </div>
                                    @empty
                                        <p>No notifications yet.</p>
                                    @endforelse
                                </div>

                      </div>
                </div>
              </div>
             
              

            </div>
          </div>
        </div>
@endsection

