
@include('dashboard.user.body.header')
<div class="page-wrapper compact-wrapper" id="pageWrapper"> 
@include('dashboard.user.body.subheader')
<!-- Page Body Start-->
<div class="page-body-wrapper"> 
<!-- Page sidebar start-->
@include('dashboard.user.body.sidebar')
<!-- Page sidebar end-->
@yield('content')
@include('dashboard.user.body.footer')

