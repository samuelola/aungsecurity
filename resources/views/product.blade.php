@extends('frontend.layout.master')


@section('content')

        <div id="page" data-region="mainpage" data-usertour="scroller"
            class="olan-page-drawers drawers   drag-container">
            <div class=" drag-container">
                <div class="drawer-toggles d-flex">
                </div>

                <div class="page-banner-area">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 class="title-animation">Product</h2>
                            <nav aria-label="Navigation bar">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="#"
                                            aria-current="page">
                                            Product
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
                        <h2 class="visually-hidden" id="fullwidth-top-block-region-heading">Blocks</h2>
                    </aside>
                </div>

                <div id="olans-settings-menu-container" class="olans-settings-menu-container">
                    <div id="olan-settings-menu-inner">
                    </div>
                </div>

                <div>
                    <a class="visually-hidden-focusable" href="#maincontent">Skip to main content</a>
                </div>
                



                <div>

                    <div style="margin-top:80px;" class="container d-print-block bottom-region-main-box">
                        <div id="page-content" class="d-print-block">
                            <div id="region-main-box">
                                <div class="row">


                                    <div class="col-lg-12">


                                        <div id="region-main" aria-label="Content">

                                            <div class="container">
                                                    <div class="row justify-content-center align-items-center g-5"
                                                        data-cues="slideInUp" data-duration="1000" data-disabled="true">
                                                            <h2 class="title-animation" data-cue="slideInUp" data-duration="1000"
                                                            style="perspective: 400px; animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
                                                            data-show="true">
                                                            <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                    Powerful Digital Solutions Built for Communities and Businesses

                                                                </div>
                                                                
                                                            </div>
                                                            <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <img src="/landing/images/title-line.png"
                                                                    alt="image"></div>
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
                                                                        Aung Solutions operates as a <b>multi-solution technology hub</b>, 
                                                                        delivering a diverse range of secure, scalable, 
                                                                        and user-friendly products under one unified platform.
                                                                        Each solution is designed to solve real-world operational challenges while 
                                                                        enabling growth, transparency, and collaboration across residential 
                                                                        communities and businesses.

                                                                    </p>
                                                                    <p>
                                                                        Our products are modular, meaning you can deploy what you need today and scale seamlessly as your needs evolve.

                                                                    </p>
                                                                </p>
                                                                
                                                            </div>
                                                        </div>

                                                    
                                                    </div>      
                                            </div>
                                            <div class="olan-main" style="margin-top: 80px;">
                                                <span class="notifications" id="user-notifications"></span>

                                                <div class="blog-area">
                                                    <div class="row">

                                                        <span id="maincontent"></span>
                                                        <h3 id='' class='main page-section-title-hide'>Site blog</h3>
                                                        
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="#">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/1/blog2.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                   
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <a href="#"
                                                                        class="tag-btn">Success Stories</a> -->
                                                                    <h3>
                                                                        <a
                                                                            href="#">Community Wallet & Estate Management System(“AUNG”)</a> </h3>
                                                                    
                                                                    <p>Our Community Wallet & Estate Management System is designed to eliminate manual ...</p>

                                                                    <a style="margin-top:20px;"
                                                                    href="#"
                                                                    class="default-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#communityWalletModal">
                                                                        View More
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" aria-hidden="true">
                                                                            <path opacity="0.5" d="M16.25 6.75V7.25H1.25V6.75H16.25Z" fill="white" stroke="white"></path>
                                                                            <path d="M10.75 1L16.75 7L10.75 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="#">
                                                                        <div class="attachedimages">
                                                                            <img src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/2/blog1.jpg" alt="">
                                                                            </div>
                                                                    </a>
                                                                   
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <a href="#"
                                                                        class="tag-btn">Success Stories</a> -->
                                                                    <h3>
                                                                        <a
                                                                            href="#">Identity Verification & Access Control Solutions</a> </h3>
                                                                    
                                                                    <p>Our identity verification solutions help estates and businesses maintain ...</p>

                                                                    <a style="margin-top:20px;"
                                                                    href="#"
                                                                    class="default-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#communityWalletModal2">
                                                                        View More
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" aria-hidden="true">
                                                                            <path opacity="0.5" d="M16.25 6.75V7.25H1.25V6.75H16.25Z" fill="white" stroke="white"></path>
                                                                            <path d="M10.75 1L16.75 7L10.75 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="#">
                                                                        <div class="attachedimages">
                                                                            <img src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/2/blog1.jpg" alt="">
                                                                            </div>
                                                                    </a>
                                                                   
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <a href="#"
                                                                        class="tag-btn">Success Stories</a> -->
                                                                    <h3>
                                                                        <a
                                                                            href="#">Custom Software Development & API Integrations</a> </h3>
                                                                    
                                                                    <p>Beyond our core platforms, Aung Solutions offers custom software ...</p>

                                                                    <a style="margin-top:20px;"
                                                                    href="#"
                                                                    class="default-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#communityWalletModal3">
                                                                        View More
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" aria-hidden="true">
                                                                            <path opacity="0.5" d="M16.25 6.75V7.25H1.25V6.75H16.25Z" fill="white" stroke="white"></path>
                                                                            <path d="M10.75 1L16.75 7L10.75 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </svg>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        


                                                    </div>
                                                </div>



                                            </div>

                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                   
                </div>


            </div>
        </div>


        <!--modal-->
           <div class="modal fade" id="communityWalletModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Community Wallet & Estate Management System (“AUNG”)
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <h6>Smarter Payments. Safer Communities. Stronger Collaboration.</h6>
                        <p>
                            Our Community Wallet & Estate Management System is designed to eliminate manual payment processes,
                            provide easy and convenient payment options, reduce conflicts around service charges,
                            and strengthen security within residential estates.
                        </p>

                        <h6 class="mt-3">Key Capabilities</h6>
                        <ul>
                            <li><strong>Automated Service Charge Payments:</strong>
                                Residents can pay estate fees seamlessly through a secure digital wallet with flexible payment schedules.
                            </li>
                            <li><strong>Improved Debt Recovery:</strong>
                                Automated reminders, transparent records, and real-time tracking reduce defaults without disrupting community harmony.
                            </li>
                            <li><strong>Resident & Estate Dashboards:</strong>
                                Clear visibility into payment history, outstanding balances, and transaction summaries.
                            </li>
                            <li><strong>Visitor & Service Personnel Management:</strong>
                                Pre-approved access passes, digital logs, and entry verification enhance estate security.
                            </li>
                            <li><strong>Emergency & Community Alerts:</strong>
                                Quick communication channels for urgent notices and safety alerts.
                            </li>
                        </ul>

                        <h6 class="mt-3">Who It’s For</h6>
                        <ul>
                            <li>Residential estates</li>
                            <li>Gated communities</li>
                            <li>Property managers and landlords</li>
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!--endmodal-->



        <!--modal-->
           <div class="modal fade" id="communityWalletModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Identity Verification & Access Control Solutions

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <h6>Know Who Enters. Know Who Belongs.</h6>
                        <p>
                            Our identity verification solutions help estates and businesses 
                            maintain accurate records and ensure safer environments through 
                            secure digital validation.

                        </p>

                        <h6 class="mt-3">Key Capabilities</h6>
                        <ul>
                            <li><strong>User Identity Verification:</strong>
                                Secure onboarding using facial verification and valid identification documents.
                            </li>
                            <li><strong>Digital Resident Profiles:</strong>
                                Verified records containing occupant details, roles, and access permissions.

                            </li>
                            <li><strong>Visitor Authorization & Tracking:</strong>
                                Temporary digital passes for visitors and service providers with time-bound access.
                            </li>
                            <li><strong>Audit Trails & Access Logs:</strong>
                                Complete visibility into entry and exit records for security teams and administrators.
                            </li>
                           
                        </ul>

                        <h6 class="mt-3">Benefits</h6>
                        <ul>
                            <li>Reduces unauthorized access</li>
                            <li>Improves accountability</li>
                            <li>Strengthens trust within communities and organizations</li>
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!--endmodal-->


        <!--modal-->
           <div class="modal fade" id="communityWalletModal3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">
                            Custom Software Development & API Integrations

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <h6>Technology Built Around Your Operations</h6>
                        <p>
                            Beyond our core platforms, Aung Solutions offers custom software 
                            development and API integrations tailored to your specific operational 
                            and industry needs.


                        </p>

                        <h6 class="mt-3">What We Offer</h6>
                        <ul>
                            <li><strong>Custom Application Development:</strong>
                                Bespoke software solutions designed to match your workflow and business objectives.
                            </li>
                            <li><strong>API Integrations:</strong>
                                Seamless integration with payment gateways, identity services, security systems, and third-party platforms.

                            </li>
                            <li><strong>Scalable Architecture:</strong>
                                Systems designed to grow with your organization without performance bottlenecks.
                            </li>
                            <li><strong>Ongoing Support & Optimization:</strong>
                                Continuous improvement to ensure reliability and performance.
                            </li>
                           
                        </ul>

                        <h6 class="mt-3">Ideal For</h6>
                        <ul>
                            <li>Enterprises with unique operational requirements</li>
                            <li>Estate management companies using existing systems</li>
                            <li>Organizations seeking digital transformation</li>
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!--endmodal-->
   
@endsection        