@extends('frontend.layout.master')


@section('content')

<style>
    .map-area iframe {
    filter: grayscale(10%);
}

</style>

        <div id="page" data-region="mainpage" data-usertour="scroller"
            class="olan-page-drawers drawers   drag-container">
            <div class=" drag-container">
                <div class="drawer-toggles d-flex">
                </div>

                <div class="page-banner-area">
                    <div class="container">
                        <div class="page-banner-content" 
                            >
                            <h2 class="title-animation">Contact Us</h2>
                            <nav aria-label="Navigation bar">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="#"
                                            aria-current="page" title="Page">
                                            Contact Us
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="page-banner-subtract">
                        <img src="{{asset('landing/about/subtract.png')}}" alt="image">
                    </div>

                    <div class="page-banner-shape1" data-speed="0.05" data-revert="true">
                        <img src="{{asset('landing/images/cta-shape6.png')}}"
                                                        alt="image">
                    </div>

                    <div class="page-banner-shape2" data-speed="0.05" data-revert="true">
                        <img src="{{asset('landing/images/cta-shape5.png')}}" alt="image">
                    </div>

                </div>

                <div class="olan-fullwidth-top" aria-label="Blocks">
                    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top"
                        data-droptarget="1" aria-labelledby="fullwidth-top-block-region-heading">
                        

                        <section id="inst202" class=" block_olan_contact_cards block  card mb-3" role="region"
                            data-block="olan_contact_cards" data-instance-id="202"
                            aria-labelledby="instance-202-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="contact-info-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000">
                                                <h2 class="title-animation">
                                                    <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                    Let’s Build Smarter Solutions Together

                                                                </div>
                                                                
                                                    </div>

                                                    <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image">
                                                    </div>
                                                     
                                                    
                                                </h2>
                                            </div>
                                             <div class="row justify-content-center align-items-center g-5"
                                                        data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                        <div class="col-xl-12 col-md-12">
                                                            <div
                                                                class="education-about-content  section-title-animation animation-style1">
                                                                <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                                <p>
                                                                    <p>
                                                                        Whether you’re looking to deploy one of our products, request a demo, 
                                                                        explore partnerships, or ask a question, our team is ready to help.
                                                                        Reach out to us, and we’ll respond promptly.


                                                                    </p>
                                                                   
                                                                </p>
                                                                
                                                            </div>
                                                        </div>

                                                    
                                            </div> 
                                            <div style="margin-top:50px;" class="row justify-content-center g-4" data-cues="slideInUp"
                                                data-duration="1000">
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="contact-info-card">
                                                        <div class="icon"><img
                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/274/block_olan_contact_cards/images/1/map-pin.svg"
                                                                alt="icon"></div>
                                                        <h3>Our Location</h3>
                                                        <p>Teju Royal Estate, Block A1, House 4C Ojo, Lagos, Nigeria</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="contact-info-card">
                                                        <div class="icon bg2"><img
                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/274/block_olan_contact_cards/images/2/mail.svg"
                                                                alt="icon"></div>
                                                        <h3>Email Address</h3>
                                                        <p><a href="mailto:info@aungsolutions.com">info@aungsolutions.com</a></p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="contact-info-card">
                                                        <div class="icon bg3"><img
                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/274/block_olan_contact_cards/images/3/phone-call.svg"
                                                                alt="icon"></div>
                                                        <h3>Urgent Call</h3>
                                                        <p><a href="tel:07062140380">+2347062140380</a></p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-3 col-sm-6">
                                                    <div class="contact-info-card">
                                                        <div class="icon bg4"><img
                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/274/block_olan_contact_cards/images/4/printer.svg"
                                                                alt="icon"></div>
                                                        <h3>Our Fax</h3>
                                                        <p><a href="tel:012345678998563214">+012 (345) 678 99
                                                                8563214</a><a href="tel:01234567899856">+012 (345) 678
                                                                99 856</a></p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-1"></span>
                        <section id="inst203" class=" block_html block  card mb-3" role="region" data-block="html"
                            data-instance-id="203" aria-label="Text">

                            <div class="card-body p-3">



                                <!-- <div class="card-text content mt-3">
                                    <div class="no-overflow">
                                        <div class="map-area">
                                            
                                        </div>
                                    </div>
                                    <div class="footer"></div>

                                </div> -->

                                <div class="card-text content mt-3">
                                    <div class="no-overflow">
                                        <div class="map-area" style="width:100%; height:500px; border-radius:12px; overflow:hidden;">
                                            <iframe
                                                src="https://www.google.com/maps?q=Teju%20Royal%20Estate%20Ojo%20Lagos%20Nigeria&output=embed"
                                                width="100%"
                                                height="100%"
                                                style="border:0;"
                                                allowfullscreen=""
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade">
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="footer"></div>
                                </div>




                            </div>

                        </section><a href="#sb-3" class="visually-hidden-focusable">Skip [Olan] Contact Form</a>

                        <section id="inst205" class=" block_olan_contact_form block  card mb-3" role="region"
                            data-block="olan_contact_form" data-instance-id="205" aria-labelledby="instance-205-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="contact-us-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000">
                                                <h2 class="title-animation">
                                                    <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                   Get in Touch

                                                                </div>
                                                                
                                                    </div>

                                                    <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image">
                                                    </div>
                                                     
                                                    
                                                </h2>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                        data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                        <div class="col-xl-12 col-md-12">
                                                            <div
                                                                class="education-about-content  section-title-animation animation-style1">
                                                                <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                                <p>
                                                                    <p>
                                                                        Have an inquiry about our solutions, pricing, 
                                                                        or customization options? Fill out the form below, 
                                                                        and a member of our team will get back to you shortly.
                                                                    </p>
                                                                   
                                                                </p>
                                                                
                                                            </div>
                                                        </div>

                                                    
                                            </div> 
                                            <form style="margin-top: 30px;" action="#"
                                                method="post"
                                                class="contact-us-form section-title-animation animation-style1">
                                                <input type="hidden" name="sesskey" value="rsCxNdAjm9">
                                                <h3 class="title-animation">We’d Love to Hear from You</h3>
                                                <div class="row justify-content-center" data-cues="slideInUp"
                                                    data-duration="1000">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter email address" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text" class="form-control" name="phone"
                                                                placeholder="Enter your number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Subject</label>
                                                            <input type="text" class="form-control" name="subject"
                                                                placeholder="Enter your subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Your Message</label>
                                                            <textarea class="form-control" name="message"
                                                                placeholder="Your message here"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <button type="submit" class="default-btn" name="submit"
                                                            value="1">
                                                            Submit Message <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none">
                                                                <path opacity="0.5"
                                                                    d="M16.25 6.75V7.25H1.25V6.75H16.25Z" fill="white"
                                                                    stroke="white" />
                                                                <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-3"></span>
                    </aside>
                </div>

                <div id="olans-settings-menu-container" class="olans-settings-menu-container">
                    <div id="olan-settings-menu-inner">
                    </div>
                </div>

                <div>
                    <a class="visually-hidden-focusable" href="#maincontent">Skip to main content</a>
                </div>
                <script
                    src="https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/polyfills/polyfill.js">
                </script>
                <script
                    src="https://olan-moodle.hibootstrap.com/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.js">
                </script>
                <script src="https://olan-moodle.hibootstrap.com/theme/jquery.php/core/jquery-3.7.1.min.js"></script>
                <script
                    src="https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/javascript-static.js">
                </script>
                <script src="https://olan-moodle.hibootstrap.com/theme/javascript.php/olan/1757783192/head"></script>
                <script>
                    //<![CDATA[
                    document.body.className += ' jsenabled';
                    //]]>
                </script>



                <div>
                    <div class="if_hide_page_bottom_content d-none">
                        <div id="page" class="container d-print-block bottom-region-main-box">
                            <div id="page-content" class="d-print-block">
                                <div id="region-main-box">
                                    <div class="row">


                                        <div class="col-lg-12">


                                            <div id="region-main" aria-label="Content">

                                                <div class="olan-full-header">
                                                    <header id="page-header" class="olan-container-fluid">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="ml-auto-d d-flex">

                                                            </div>
                                                            <div id="course-header">

                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex align-items-center">
                                                            <div class="mr-auto-d">
                                                                <div class="page-context-header">
                                                                    <div class="page-header-image mr-2-d">
                                                                        <div
                                                                            class="content activityiconcontainer modicon_page">
                                                                            <img class="icon activityicon" alt=""
                                                                                aria-hidden="true"
                                                                                src="https://olan-moodle.hibootstrap.com/theme/image.php/olan/page/1757783192/monologo" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="page-header-headings">
                                                                        <div
                                                                            class="text-muted text-uppercase small line-height-3">
                                                                            Page</div>
                                                                        <h3 id='' class='h2'>Contact Us</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="header-actions-container ml-auto-d"
                                                                data-region="header-actions-container">
                                                            </div>

                                                            <div class="d-none" id="page-navbar">
                                                                <nav aria-label="Navigation bar">
                                                                    <ol class="breadcrumb">
                                                                        <li class="breadcrumb-item">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/">
                                                                                Home
                                                                            </a>
                                                                        </li>

                                                                        <li class="breadcrumb-item">
                                                                            <span>
                                                                                Site pages
                                                                            </span>
                                                                        </li>

                                                                        <li class="breadcrumb-item">
                                                                            <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=40"
                                                                                aria-current="page" title="Page">
                                                                                Contact Us
                                                                            </a>
                                                                        </li>
                                                                    </ol>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </header>
                                                </div>



                                                <aside id="block-region-above-content" class="block-region"
                                                    data-blockregion="above-content" data-droptarget="1"
                                                    aria-labelledby="above-content-block-region-heading">
                                                    <h2 class="visually-hidden" id="above-content-block-region-heading">
                                                        Blocks</h2>
                                                </aside>

                                                <div class="olan-main">
                                                    <span class="notifications" id="user-notifications"></span>
                                                    <span id="maincontent"></span>
                                                    <div class="activity-header" data-for="page-activity-header">
                                                        <span class="visually-hidden">Completion requirements</span>
                                                        <div data-region="activity-information"
                                                            data-activityname="Contact Us" class="activity-information">


                                                        </div>
                                                    </div>


                                                    <div class="box py-3 generalbox center clearfix">
                                                        <div class="no-overflow">
                                                            <p>Contact Us</p>
                                                        </div>
                                                    </div>
                                                    <div class="modified">Last modified: Sunday, 7 September 2025, 5:29
                                                        PM</div>


                                                    <div class="mt-5 mb-1 activity-navigation container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="float-start">
                                                                    <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=39&forceview=1"
                                                                        id="prev-activity-link"
                                                                        class="btn btn-link">&#x25C4; Terms &amp;
                                                                        Conditions</a>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mdl-align">
                                                                    <div class="urlselect">
                                                                        <form method="post"
                                                                            action="https://olan-moodle.hibootstrap.com/course/jumpto.php"
                                                                            class="d-flex flex-wrap align-items-center"
                                                                            id="url_select_f6970ed7a38b4c14">
                                                                            <input type="hidden" name="sesskey"
                                                                                value="rsCxNdAjm9">
                                                                            <label for="jump-to-activity"
                                                                                class="visually-hidden">
                                                                                Jump to...
                                                                            </label>
                                                                            <select id="jump-to-activity"
                                                                                class="form-select urlselect"
                                                                                name="jump">
                                                                                <option value="" selected>Jump to...
                                                                                </option>
                                                                                <option
                                                                                    value="/mod/forum/view.php?id=4&amp;forceview=1">
                                                                                    Site announcements</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=16&amp;forceview=1">
                                                                                    Distance Learning</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=17&amp;forceview=1">
                                                                                    Online Training</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=21&amp;forceview=1">
                                                                                    About Us 01</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=22&amp;forceview=1">
                                                                                    About Us 02</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=23&amp;forceview=1">
                                                                                    About Us 03</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=24&amp;forceview=1">
                                                                                    Testimonials</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=25&amp;forceview=1">
                                                                                    Become An Instructor</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=26&amp;forceview=1">
                                                                                    Pricing Plan</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=27&amp;forceview=1">
                                                                                    Instructors 01</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=28&amp;forceview=1">
                                                                                    Instructors 02</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=29&amp;forceview=1">
                                                                                    Instructors 03</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=30&amp;forceview=1">
                                                                                    Instructors Filtering</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=31&amp;forceview=1">
                                                                                    Instructors Details</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=32&amp;forceview=1">
                                                                                    FAQ</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=33&amp;forceview=1">
                                                                                    Events</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=34&amp;forceview=1">
                                                                                    Event Details</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=35&amp;forceview=1">
                                                                                    Success Story</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=36&amp;forceview=1">
                                                                                    Membership Levels</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=37&amp;forceview=1">
                                                                                    Purchase Guide</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=38&amp;forceview=1">
                                                                                    Privacy Policy</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=39&amp;forceview=1">
                                                                                    Terms &amp; Conditions</option>
                                                                            </select>
                                                                            <noscript>
                                                                                <input type="submit"
                                                                                    class="btn btn-secondary ms-1"
                                                                                    value="Go">
                                                                            </noscript>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="float-end">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <aside id="block-region-below-content" class="block-region"
                                                    data-blockregion="below-content" data-droptarget="1"
                                                    aria-labelledby="below-content-block-region-heading">
                                                    <h2 class="visually-hidden" id="below-content-block-region-heading">
                                                        Blocks</h2>
                                                </aside>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside id="block-region-fullwidth-bottom" class="block-region" data-blockregion="fullwidth-bottom"
                        data-droptarget="1" aria-labelledby="fullwidth-bottom-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-bottom-block-region-heading">Blocks</h2>
                    </aside>
                </div>


            </div>
        </div>
    
@endsection