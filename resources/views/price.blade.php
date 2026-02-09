@extends('frontend.layout.master')


@section('content')

  <style>
    .border-white {
    border-color: #fff !important;
    border-width: 2px;
}

/* .card-body {
    font-size: 18px;
}

.card-body h6 {
    font-size: 15px;
}
.card-body li {
    line-height: 1.7;
} */

.pricing-card {
    border-radius: 18px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-6px);
}

.pricing-header {
    background: linear-gradient(135deg, #0dcaf0, #0d6efd);
    padding: 30px 20px;
}

.pricing-text h3 {
    font-size: 36px;
}

.pricing-text p {
    font-size: 18px;
    opacity: 0.95;
}

.feature-list {
    list-style: none;
    padding-left: 0;
}

.feature-list li {
    padding-left: 32px;
    position: relative;
    margin-bottom: 14px;
    font-weight: 500;
}

.feature-list li::before {
    content: "✔";
    position: absolute;
    left: 0;
    top: 0;
    color: #0d6efd;
    font-weight: bold;
}

@media (max-width: 767px) {
    .pricing-text {
        margin-bottom: 20px;
    }
}



.pricing-plan {
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.pricing-plan:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.pricing-plan-header {
    background: linear-gradient(135deg, #0d6efd, #0dcaf0);
    padding: 35px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

.pricing-plan-header-alt {
    background: linear-gradient(135deg, #20c997, #198754);
    padding: 35px 20px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}

.price {
    font-size: 36px;
    font-weight: 800;
}

.plan-features {
    list-style: none;
    padding-left: 0;
}

.plan-features li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 14px;
    font-size: 17px;
    font-weight: 500;
}

.plan-features li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #0d6efd;
    font-weight: bold;
}

@media (max-width: 767px) {
    .price {
        font-size: 28px;
    }
}




  </style>

        <div id="page" data-region="mainpage" data-usertour="scroller"
            class="olan-page-drawers drawers   drag-container">
            <div class=" drag-container">
                <div class="drawer-toggles d-flex">
                </div>

                <div class="page-banner-area">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 class="title-animation">Pricing Plan</h2>
                            <nav aria-label="Navigation bar">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="https://olan-moodle.hibootstrap.com/">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=26"
                                            aria-current="page" title="Page">
                                            Pricing Plan
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="page-banner-subtract">
                        <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/subtract.png" alt="image">
                    </div>

                    <div class="page-banner-shape1" data-speed="0.05" data-revert="true">
                        <img src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/theme_olan/banner_shape/1757783192/page-banner-shape1.png"
                            alt="image">
                    </div>

                    <div class="page-banner-shape2" data-speed="0.05" data-revert="true">
                        <img src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/theme_olan/banner_shape2/1757783192/page-banner-shape2.png"
                            alt="image">
                    </div>

                </div>

                <div class="olan-fullwidth-top" aria-label="Blocks">
                    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top"
                        data-droptarget="1" aria-labelledby="fullwidth-top-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-top-block-region-heading">Blocks</h2><a href="#sb-1"
                            class="visually-hidden-focusable">Skip [Olan] Pricing</a>

                       
                        <span id="sb-2"></span>
                    </aside>
                </div>


                <div class="container" style="margin-top:80px !important;">

                    <h2 class="title-animation">

                            <div class="split-line"
                                style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;font-size:35px;">
                                    Easy Pay
                                </div>
                                
                            </div>
                            <div class="split-line"
                                style="display: block; text-align: center; position: relative;">
                                <img src="/landing/images/title-line.png"
                                    alt="image">
                            </div>
                            
                            
                        </h2>
                        <p style="text-align:center;font-weight: 600;">
                            Pay-As-You-Go Plan

                        </p>    
                   
                    <div class="row mt-5">
    <div class="col-xl-12 col-sm-6">
        <div class="card pricing-card shadow-lg border-0">

            <!-- Header -->
            <div class="card-header pricing-header text-white">
                <div class="row text-center">
                    <div class="col-md-6 pricing-text border-end border-light">
                        <span class="badge bg-warning text-dark mb-2">Flexible</span>
                        <h3 class="fw-bold mt-2">12.5%</h3>
                        <p class="mb-0">Pay as you go</p>
                    </div>
                    <div class="col-md-6 pricing-text">
                        <span class="badge bg-success mb-2">Annual Fee</span>
                        <h3 class="fw-bold mt-2">₦20,000</h3>
                        <p class="mb-0">To generate visitor access codes per resident</p>
                    </div>
                </div>
            </div>

            <!-- Body -->
            <div class="card-body fs-5 p-4">
                <div class="row g-4">

                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li>No setup fees</li>
                            <li>No monthly subscription for estates</li>
                            <li>Secure digital wallet for residents</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul class="feature-list">
                            <li>Resident dashboards & estate reports</li>
                            <li>Pre-approved visitor access codes</li>
                            <li>Service personnel digital passes</li>
                            <li>Advanced access logs & audit trails</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


                </div>


             <div class="container" style="margin-top:80px !important;">

                    <h2 class="title-animation">

                            <div class="split-line"
                                style="display: block; text-align: center; position: relative;">
                                <div style="position:relative;display:inline-block;font-size:35px;">
                                    White label Saas Plan
                                </div>
                                
                            </div>
                            <div class="split-line"
                                style="display: block; text-align: center; position: relative;">
                                <img src="/landing/images/title-line.png"
                                    alt="image">
                            </div>
                            
                            
                        </h2>
                        <p style="text-align:center;font-weight: 600;">
                            Enterprise-Grade Estate Infrastructure

                        </p>    
                   
                    <div class="row mt-5 g-4">

                        <!-- Card -->
                        <div class="col-xl-4 col-sm-6">
                            <div class="card pricing-plan h-100 shadow-lg border-0">

                                <div class="card-header pricing-plan-header text-white text-center">
                                    <span class="badge bg-warning text-dark mb-2">One Time</span>
                                    <h4 class="fw-bold mt-2">White Label License</h4>
                                    <h2 class="price mt-3">₦5M – ₦10M</h2>
                                    <!-- <p class="small opacity-75 mt-2">
                                        Pricing depends on estate size and feature scope
                                    </p> -->
                                    <h4 class="fw-bold" style="font-size: 16px;">
                                        Pricing depends on estate size and feature scope
                                    </h4>
                                </div>

                                <div class="card-body p-4">
                                    <ul class="plan-features">
                                        <li>Full White Label Deployment</li>
                                        <li>Custom Branding & Domain</li>
                                        <li>Estate Specific Workloads & Rules</li>
                                        <li>Dedicated Onboard & Setup</li>
                                        <li>Full Access to  Aung ONE Core Infrastructure</li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <!-- Duplicate cards (reuse same structure) -->
                        <div class="col-xl-4 col-sm-6">
                            <div class="card pricing-plan h-100 shadow-lg border-0">
                                <div class="card-header pricing-plan-header text-white text-center">
                                    <span class="badge bg-success mb-2">Yearly</span>
                                    <h4 class="fw-bold mt-2">Annual Maintenance & Support</h4>
                                    <h2 class="price mt-3">25% - 30%</h2>
                                    <h4 class="fw-bold" style="font-size: 16px;">of Licence Fee</h4>
                                    <!-- <p class="small opacity-75 mt-2">
                                        Residents without an active access code generation cannot generate visitor access code
                                    </p> -->
                                </div>
                                <div class="card-body p-4">
                                    <ul class="plan-features">
                                        <li>System Updates and improvements</li>
                                        <li>Hosting and Infrastructural Support</li>
                                        <li>Security Patches & Monitoring</li>
                                        <li>Technical Support & uptime assurance</li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="card pricing-plan h-100 shadow-lg border-0">
                                <div class="card-header pricing-plan-header text-white text-center">
                                    <span class="badge bg-info mb-2">Per Resident</span>
                                    <h4 class="fw-bold mt-2">Service and Access Fees</h4>
                                    <h2 class="price mt-3">8.5% <span style="font-size: 15px;">Transaction Fee</span> ₦20,000 <span style="font-size: 15px;">Annual Access</span></h2>
                                    <!-- <p class="small opacity-75 mt-2">
                                        Designed for smart city deployments
                                    </p> -->
                                </div>
                                <div class="card-body p-4">
                                    <ul class="plan-features">
                                        <li>8.5% fee on all estate transactions</li>
                                        <li>Annual fee required for visitor access codes</li>
                                        <li>Applies to both Easy Pay & White-Label estates</li>
                                        <li>Can be paid by residents or covered in bulk by estates</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                     </div>

                    <!-- Action Buttons -->
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary btn-lg px-5 me-3 shadow">
                            Request a Demo
                        </a>
                        <a href="#" class="btn btn-outline-dark btn-lg px-5 shadow">
                            Contact Sales
                        </a>
                    </div>

                </div>

                <div id="olans-settings-menu-container" class="olans-settings-menu-container">
                    <div id="olan-settings-menu-inner">
                    </div>
                </div>

                <div>
                    <a class="visually-hidden-focusable" href="#maincontent">Skip to main content</a>
                </div>
               
                </script>
                <script type="text/javascript" charset="utf-8" src="{{asset('landing/js/jquery-3.7.1.min.js')}}"></script>
                
               <script src="{{asset('landing/js/head.js')}}"></script>
                



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
                                                                        <h3 id='' class='h2'>Pricing Plan</h3>
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
                                                                            <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=26"
                                                                                aria-current="page" title="Page">
                                                                                Pricing Plan
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
                                                            data-activityname="Pricing Plan"
                                                            class="activity-information">


                                                        </div>
                                                    </div>


                                                    <div class="box py-3 generalbox center clearfix">
                                                        <div class="no-overflow">
                                                            <p>Pricing Plan</p>
                                                        </div>
                                                    </div>
                                                    <div class="modified">Last modified: Sunday, 7 September 2025, 3:07
                                                        PM</div>


                                                    <div class="mt-5 mb-1 activity-navigation container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="float-start">
                                                                    <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=25&forceview=1"
                                                                        id="prev-activity-link"
                                                                        class="btn btn-link">&#x25C4; Become An
                                                                        Instructor</a>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mdl-align">
                                                                    <div class="urlselect">
                                                                        <form method="post"
                                                                            action="https://olan-moodle.hibootstrap.com/course/jumpto.php"
                                                                            class="d-flex flex-wrap align-items-center"
                                                                            id="url_select_f6970d8a212d6f14">
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
                                                                                <option
                                                                                    value="/mod/page/view.php?id=40&amp;forceview=1">
                                                                                    Contact Us</option>
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
                                                                    <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=27&forceview=1"
                                                                        id="next-activity-link"
                                                                        class="btn btn-link">Instructors 01 &#x25BA;</a>

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