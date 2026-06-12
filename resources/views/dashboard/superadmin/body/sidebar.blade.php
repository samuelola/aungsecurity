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
               <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="{{route('superadmin_dashboard')}}">
                  <i class="ti-dashboard"></i>
                  <h6 class="f-w-600">Dashboard</h6></a>
              </li>


              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Estate Management</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="{{route('alltenants')}}">
                  <i class="ti-user"></i>
                  <h6 class="f-w-600">All Estates </h6></a>
              </li>

              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">SubAccounts</h5>
                </div>
              </li>
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="{{route('create_subaccount')}}">
                  <i class="ti-user"></i>
                  <h6 class="f-w-600">SubAccounts </h6></a>
              </li>

              
              <li class="sidebar-main-title">
                <div>
                  <h5 class="f-w-700 sidebar-title pt-3">Logout</h5>
                </div>
              </li>
             
              <li class="sidebar-list"> <i class="fa-solid fa-thumbtack"></i>
                <a class="sidebar-link" href="#" onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();">
                  <i class="fa-solid fa-sign-out"></i>
                  <h6 class="f-w-600">Logout</h6></a>
                  <form id="admin-logout-form" method="POST" action="">
                          @csrf
                          
                  </form>
              </li>

            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </aside>