
    @include('dashboard.admin.body.header')
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
      @include('dashboard.admin.body.subheader')
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
        <!-- Page sidebar start-->
        @include('dashboard.admin.body.sidebar')
        <!-- Page sidebar end-->
        @yield('content')
@include('dashboard.admin.body.footer')