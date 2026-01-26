@include('frontend.layout.header')

<body id="page-mod-page-view"
    class="format-site limitedwidth path-mod path-mod-page chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam olan-moodle-hibootstrap-com pagelayout-incourse course-1 context-140 cmid-17 cm-type-page notloggedin theme jsenabled scrolled"
    style="">
    <div class="preloader-area text-center position-fixed top-0 bottom-0 start-0 end-0" id="preloader"
        style="display: none;">
        <div class="loader position-absolute start-0 end-0">
            <img src="/pluginfile.php/1/theme_olan/preloader_image/1757783192/olan-icon.svg"
                alt="Olan">
            <div class="waviy position-relative"><span class="d-inline-block">O</span><span
                    class="d-inline-block">L</span><span class="d-inline-block">A</span><span
                    class="d-inline-block">N</span></div>
        </div>
    </div>



    <div class="toast-wrapper mx-auto py-0 fixed-top" role="status" aria-live="polite"></div>

    <div id="wrapper" class=" olan-page-wrapper   body-">


        <!-- Start Navbar Area -->
         @include('frontend.layout.menu.custom_menu')
        <!-- End Navbar Area -->

        <!-- Start Mobile Navbar Area -->
         @include('frontend.layout.menu.mobile')
        <!-- End Mobile Navbar Area -->


        @yield('content')


        
        @include('frontend.layout.footer')


       
