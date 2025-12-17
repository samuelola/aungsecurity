<!DOCTYPE html >
<html lang="en">
  

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Aungsecurity"/>
    <meta name="keywords" content="Estate Management"/>
    <meta name="author" content="pixelstrap"/>
    <title>Aungsecurity | @yield('title')</title>
    <!-- Favicon icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('aung_favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('aung_favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('aung_favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('aung_favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('aung_favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('aung_favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('aung_favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('aung_favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('aung_favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('aung_favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('aung_favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('aung_favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('aung_favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('aung_favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
    <!-- Flag icon css -->
    <link rel="stylesheet" href="{{asset('assets/css/vendors/flag-icon.css')}}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{asset('assets/css/iconly-icon.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/bulk-style.css')}}"/>
    <!-- iconly-icon-->
    <link rel="stylesheet" href="{{asset('assets/css/themify.css')}}"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-min.css')}}"/>
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/weather-icons/weather-icons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick-theme.css')}}"/>
    <!-- App css -->
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/iconly@2.0.1/iconly.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
     <style>

       /* Arrow rotation */
.arrow-toggle {
  display: inline-block; /* allow transform */
  transition: transform 0.28s ease;
  transform-origin: 50% 50%;
}

.arrow-toggle.rotate {
  transform: rotate(90deg); /* points down when open */
}

/* Submenu hidden by default */
.sidebar-submenu {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.28s ease, padding 0.28s ease;
  padding-top: 0;
  padding-bottom: 0;
}

/* Submenu open state */
.sidebar-submenu.open {
  padding-top: 8px;
  padding-bottom: 8px;
}


</style>
  </head>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="ti-arrow-up"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <!-- <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div> -->