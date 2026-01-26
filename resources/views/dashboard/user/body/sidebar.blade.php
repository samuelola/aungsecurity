 @php
    $tenant = app('tenant');
    $kyc = \App\Models\Kyc::where('user_id', auth()->id())
        ->where('tenant_id', $tenant->id)
        ->first();
@endphp
 
 <aside class="page-sidebar"> 
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div class="main-sidebar" id="main-sidebar">
            <ul class="sidebar-menu" id="simple-bar">
              <li class="pin-title sidebar-main-title">  
                <div> 
                  <h5 class="sidebar-title f-w-700">Pinned</h5>
                </div>
              </li>
              <li class="sidebar-main-title">
                <div>
                  <h5 class="lan-1 f-w-700 sidebar-title">Dashboard</h5>
                </div>
              </li>
               <li class="sidebar-list"> 
                <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="{{route('tenant_user_dashboard',$tenant->subdomain)}}">
                  <i class="ti-dashboard"></i>
                  <h6 class="f-w-600">Dashboard</h6></a>
              </li>

               <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title">KYC</h5>
                </div>
              </li>

              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <i class="ti-wallet"></i>
                 <h6 class="f-w-600">KYC</h6><i class="ti-arrow-right arrow-toggle"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{route('kyc.verify',$tenant->subdomain)}}">KYC Verification</a></li>
                   
                </ul>

              </li>
            

               <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title">Wallet</h5>
                </div>
              </li>
              <li class="sidebar-list {{ !$kyc || !$kyc->kyc_completed ? 'disabled' : '' }}"> 
                <i class="fa-solid fa-thumbtack"></i><a class="sidebar-link" href="javascript:void(0)">
                  <i class="ti-wallet"></i>
                 <h6 class="f-w-600">Wallet</h6><i class="ti-arrow-right arrow-toggle"></i></a>
                <ul class="sidebar-submenu">
                  <li> <a href="{{$kyc && $kyc->kyc_completed ? route('allwallet',$tenant->subdomain) : '#'}}">Wallet</a></li>
                  <li><a href="{{$kyc && $kyc->kyc_completed ? route('fundwallet',$tenant->subdomain) : '#'}}">Fund Wallet</a></li>
                  <li><a href="{{$kyc && $kyc->kyc_completed ? route('resident_transaction',$tenant->subdomain) : '#'}}">Transaction</a></li>
                </ul>

              </li>


              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Resident Management</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#">
                  <i class="ti-user"></i>
                  <h6 class="f-w-600">Resident Details</h6></a>
              </li>

              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Subscription</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#">
                  <i class="fa-solid fa-bookmark"></i>
                  <h6 class="f-w-600">Subscription</h6></a>
              </li>

              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Visitor Management</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="{{$kyc && $kyc->kyc_completed ? route('visitor.create',$tenant->subdomain) : '#'}}">
                  <i class="ti-user"></i>
                  <h6 class="f-w-600">Visitor's Invite</h6>
                </a>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#">
                  <i class="ti-user"></i>
                  <h6 class="f-w-600">Visitor's Log</h6></a>
              </li>

              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Qrcode</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#">
                  <i class="ti-layout-grid3"></i>
                  <h6 class="f-w-600">Generate Qrcode</h6></a>
              </li>

              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Logout</h5>
                </div>
              </li>
              @php 
                  $tenant = app('tenant');
                  $get_subdomain = $tenant->subdomain;
              @endphp
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#" onclick="event.preventDefault(); document.getElementById('user-logout-form').submit();">
                  <i class="fa-solid fa-sign-out"></i>
                  <h6 class="f-w-600">Logout</h6></a>
                  <form id="user-logout-form" method="POST" action="{{ route('tenant.logout',$get_subdomain) }}">
                          @csrf
                          
                  </form>
              </li>

            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </aside>