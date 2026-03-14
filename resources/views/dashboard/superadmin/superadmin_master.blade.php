
    @include('dashboard.superadmin.body.header')
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
      @include('dashboard.superadmin.body.subheader')
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        @include('dashboard.superadmin.body.sidebar')
        <!-- Page sidebar end-->
        @yield('content')
    @include('dashboard.superadmin.body.footer')