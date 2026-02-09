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
                            <h2 class="title-animation">About Us</h2>
                            <nav aria-label="Navigation bar">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('home')}}">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="{{route('about')}}"
                                            aria-current="page" title="Page">
                                            About Us
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
                        <img src="landing/images/cta-shape6.png"
                                                        alt="image">
                    </div>

                    <div class="page-banner-shape2" data-speed="0.05" data-revert="true">
                        <img src="landing/images/cta-shape5.png" alt="image">
                    </div>

                </div>

                <div class="olan-fullwidth-top" aria-label="Blocks">
                    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top"
                        data-droptarget="1" aria-labelledby="fullwidth-top-block-region-heading">
                        <!-- <h2 class="visually-hidden" id="fullwidth-top-block-region-heading">Blocks</h2> -->
                        <!-- <a href="#sb-1"
                            class="visually-hidden-focusable">Skip [Olan] Features</a> -->

                        <!-- <section id="inst127" class=" block_olan_features block  card mb-3" role="region"
                            data-block="olan_features" data-instance-id="127" aria-labelledby="instance-127-header">

                            <div class="card-body p-3">

                                <h3 id="instance-127-header" class="h5 card-title d-inline">[Olan] Features</h3>


                                <div class="card-text content mt-3">
                                    <div class="dl-choose-area pb-140 pt-140">
                                        <div class="container">
                                            <div class="row justify-content-center g-5" data-cues="slideInUp"
                                                data-duration="1000">
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="dl-choose-card">
                                                        <div class="icon">
                                                            <img src="{{asset('landing/about/feature-icon1.svg')}}"
                                                                alt="icon 1"> </div>
                                                        <div class="content">
                                                            <h3>Flexible by Design</h3>
                                                            <p>Learn anytime, anywhere—on your schedule.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="dl-choose-card wrap2">
                                                        <div class="icon">
                                                            <img src="{{asset('landing/about/feature-icon2.svg')}}"
                                                                alt="icon 2"> </div>
                                                        <div class="content">
                                                            <h3>Top-Rated Instructors</h3>
                                                            <p>Train with professionals who know the real-world
                                                                industry.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="dl-choose-card wrap3">
                                                        <div class="icon">
                                                            <img src="{{asset('landing/about/feature-icon3.svg')}}"
                                                                alt="icon 3"> </div>
                                                        <div class="content">
                                                            <h3>Track Your Progress</h3>
                                                            <p>Stay motivated with milestones, progress bars, and
                                                                reminders.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-sm-6">
                                                    <div class="dl-choose-card wrap4">
                                                        <div class="icon">
                                                            <img src="{{asset('landing/about/feature-icon4.svg')}}"
                                                                alt="icon 4"> </div>
                                                        <div class="content">
                                                            <h3>Recognized Certification</h3>
                                                            <p>Build your resume with proof of what you’ve achieved.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section> -->

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                               
                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000">
                                                <h2 class="title-animation">
                                                    <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                    About AUNG Solutions Nigeria Limited

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
                                                                AUNG Solutions Nigeria Limited is a dynamic and forward-thinking technology company headquartered in <b>Lagos, Nigeria</b>, committed to building practical, secure, and scalable digital solutions for businesses, communities, and organizations across Africa and emerging markets.
                                                                We specialize in the <b>design, development, and deployment of innovative applications and digital platforms</b> that address real-world challenges across multiple sectors. Our solutions are thoughtfully engineered to meet the evolving needs of modern businesses, residential communities, and digital creators, bridging gaps between technology, security, finance, and everyday operations.
                                                                At AUNG Solutions, we believe technology should not complicate life or create friction. Instead, it should <b>simplify processes, strengthen trust, improve accountability, and unlock growth opportunities</b>. This belief drives every product we build and every solution we deploy.

                                                            </p>
                                                        </p>
                                                        

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-->
                                        </div>

                                       

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                       <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                            
                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-6 col-md-12">
                                                    <div class="education-about-image">
                                                        <img src="{{asset('landing/about/about.jpg')}}"
                                                            alt="image">

                                                        <div class="fun-wrap">
                                                            <div class="icon">
                                                                <img src="{{asset('landing/about/about-icon2.svg')}}"
                                                                    alt="image"> </div>
                                                            <div class="d-flex align-items-center">
                                                                <h3 class="counter">60</h3>
                                                                <h3 class="sub">K+</h3>
                                                            </div>
                                                            <p>Active Learners</p>
                                                        </div>

                                                        <div class="fun-color-wrap">
                                                            <div class="icon">
                                                                <img src="{{asset('landing/about/about-icon1.svg')}}"
                                                                    alt="image"> </div>
                                                            <div class="d-flex align-items-center">
                                                                <h3 class="counter">4500</h3>
                                                                <h3 class="sub">+</h3>
                                                            </div>
                                                            <p>Expert Instructors</p>
                                                        </div>

                                                        <div class="shape1" data-speed="0.03" data-revert="true"><img
                                                                src="{{asset('landing/about/about-shape1.png')}}"
                                                                alt="image"></div>
                                                        <div class="shape2" data-speed="0.03" data-revert="true"><img
                                                                src="{{asset('landing/about/about-shape2.png')}}"
                                                                alt="image"></div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-md-12">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        <h2 class="title-animation">
                                                             <span>What We Do 
                                                                <img
                                                                    src="{{asset('landing/about/title-line.png')}}"
                                                                    alt="image"></span>
                                                        </h2>
                                               
                                                        <!-- <span style="margin-top:35px;" class="sub">What We Do</span> -->
                                                        <ul class="list" data-cues="fadeIn" data-duration="1000"
                                                            data-delay="0" data-stagger="120">
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image">
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <h3>Learn from Anywhere</h3>
                                                                    <p>Access your courses anytime, on any device—at
                                                                        home, at work, or on the go.</p> -->
                                                                    <p>
                                                                        <b>Community Wallet & Estate Management Systems</b> that automate payments, improve debt recovery, enhance security, and foster collaboration within residential estates.

                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Teach with Confidence</h3>
                                                                    <p>All the tools you need to build, launch, and
                                                                        scale your courses—stress-free.</p> -->
                                                                    <p>
                                                                        <b>Identity Verification and Access Control Solutions</b> that help communities and businesses maintain accurate records and improve safety through secure digital verification.

                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p> -->
                                                                     <p>
                                                                        <b>Custom Software Development and API Integrations</b> tailored to meet specific operational and industry requirements.

                                                                     </p>   
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-->
                                        </div>

                                       

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000">
                                                <!-- <span class="sub">Meet Our
                                                    Instructors</span> -->
                                                <h2 class="title-animation">Our Mission <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image"></h2>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-12 col-md-12">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        <p>
                                                            <p>
                                                                Our mission is to leverage technology to solve real-world problems, 
                                                                drive digital transformation, and empower organizations to operate more efficiently, 
                                                                securely, and profitably in an increasingly interconnected environment.
                                                                We focus on creating systems that replace manual, fragmented, and conflict-driven processes with <b>intelligent automation and transparent digital workflows</b>.
                                                            </p>
                                                        </p>
                                                        
                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <!--/.row-->
                                        </div>

                                      

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000">
                                                <!-- <span class="sub">Meet Our
                                                    Instructors</span> -->
                                                <h2 class="title-animation">Our Vision <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image"></h2>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-12 col-md-12">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        
                                                        <p>
                                                            <p>
                                                                To become one of Africa’s most trusted technology solution 
                                                                providers, powering smarter communities, stronger businesses, 
                                                                and a more connected digital economy across developing nations.

                                                            </p>
                                                        </p>
                                                        
                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <!--/.row-->
                                        </div>

                                      

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000">
                                                <!-- <span class="sub">Meet Our
                                                    Instructors</span> -->
                                                <h2 class="title-animation">Our Approach <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image"></h2>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-12 col-md-12">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        
                                                        <p>
                                                            <p>
                                                                We take a problem-first approach to innovation. Before building, we study the challenges faced by users on the ground, estate managers struggling with service charge recovery, 
                                                                businesses managing daily sales manually, or communities 
                                                                facing security risks due to poor verification systems.

                                                            </p>
                                                        </p>

                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-6 col-md-12" style="margin-top: -200px;">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        
                                                           <p>
                                                                By combining deep local insight with modern technology, we deliver solutions that are:

                                                            </p>
                                                        <ul class="list" data-cues="fadeIn" data-duration="1000"
                                                            data-delay="0" data-stagger="120">
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image">
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <h3>Learn from Anywhere</h3>
                                                                    <p>Access your courses anytime, on any device—at
                                                                        home, at work, or on the go.</p> -->
                                                                    <p>
                                                                        Practical and easy to adopt
                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Teach with Confidence</h3>
                                                                    <p>All the tools you need to build, launch, and
                                                                        scale your courses—stress-free.</p> -->
                                                                    <p>
                                                                        Secure and compliant with data protection standards
                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p> -->
                                                                     <p>
                                                                        Flexible enough to scale across industries and regions
                                                                     </p>   
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-12" style="margin-top: 80px;">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        
                                                        <p>
                                                                Why Aung Solutions
                                                        </p>
                                                        <ul class="list" data-cues="fadeIn" data-duration="1000"
                                                            data-delay="0" data-stagger="120">
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image">
                                                                </div>
                                                                <div class="content">
                                                                    <!-- <h3>Learn from Anywhere</h3>
                                                                    <p>Access your courses anytime, on any device—at
                                                                        home, at work, or on the go.</p> -->
                                                                    <p>
                                                                        <b>Multi-Industry Expertise:</b> Solutions designed for estates, businesses, creators, and enterprises.
                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Teach with Confidence</h3>
                                                                    <p>All the tools you need to build, launch, and
                                                                        scale your courses—stress-free.</p> -->
                                                                    <p>
                                                                        <b>Security-Driven Design:</b> Data protection, identity verification, and system integrity are core priorities.


                                                                    </p>    
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p> -->
                                                                     <p>
                                                                        <b>Scalable Architecture:</b> Products built to grow from single users to thousands of organizations.


                                                                     </p>   
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p> -->
                                                                     <p>
                                                                        <b>Community-Focused Innovation:</b> Technology that promotes collaboration, not conflict.

                                                                     </p>   
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <!-- <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p> -->
                                                                     <p>
                                                                        <b>Economic Impact:</b> Creating jobs, enabling businesses, and contributing to sustainable growth.

                                                                     </p>   
                                                                </div>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <!--/.row-->

                                           
                                        </div>

                                      

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        

                        

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                                <div class="card-text content mt-3">
                                    <div class="education-about-area wrap-style2 pt-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000">
                                                <!-- <span class="sub">Meet Our
                                                    Instructors</span> -->
                                                <h2 class="title-animation">Our Commitment<img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image"></h2>
                                            </div>
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0">
                                                <div class="col-xl-12 col-md-12">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <!-- <span class="sub">About AUNG Solutions Nigeria Limited</span> -->
                                                        
                                                        
                                                            <p>
                                                                Aung Solutions Nigeria Limited is committed to <b>continuous innovation</b>, 
                                                                ethical technology deployment, and long-term partnerships.
                                                                As we expand our product ecosystem, we remain focused on delivering measurable value, maintaining trust, and contributing meaningfully to Africa’s digital future.

                                                            </p>
                                                        
                                                        
                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <!--/.row-->
                                        </div>

                                      

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-6"></span>
                    </aside>
                </div>

                
                
                
                
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
                                                                        <h3 id='' class='h2'>About Us</h3>
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
                                                                                href="{{route('home')}}">
                                                                                Home
                                                                            </a>
                                                                        </li>


                                                                        <li class="breadcrumb-item">
                                                                            <a href="{{route('about')}}"
                                                                                aria-current="page" title="Page">
                                                                                About
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
                                                            data-activityname="About Us"
                                                            class="activity-information">


                                                        </div>
                                                    </div>


                                                    <div class="box py-3 generalbox center clearfix">
                                                        <div class="no-overflow">
                                                            <p>About Us 02</p>
                                                        </div>
                                                    </div>
                                                    <div class="modified">Last modified: Sunday, 7 September 2025, 10:44
                                                        AM</div>


                                                    <div class="mt-5 mb-1 activity-navigation container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="float-start">
                                                                    <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=21&forceview=1"
                                                                        id="prev-activity-link"
                                                                        class="btn btn-link">&#x25C4; About Us 01</a>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mdl-align">
                                                                    <div class="urlselect">
                                                                        <form method="post"
                                                                            action="https://olan-moodle.hibootstrap.com/course/jumpto.php"
                                                                            class="d-flex flex-wrap align-items-center"
                                                                            id="url_select_f696f919b7005d14">
                                                                            <input type="hidden" name="sesskey"
                                                                                value="sP67kdz83P">
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
                                                                    <a href="https://olan-moodle.hibootstrap.com/mod/page/view.php?id=23&forceview=1"
                                                                        id="next-activity-link"
                                                                        class="btn btn-link">About Us 03 &#x25BA;</a>

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


              



                <!-- Start Go Top Area -->
                <button type="button" id="back-to-top" class="position-fixed text-center border-0 p-0">
                    <i class="ri-arrow-up-s-line"></i>
                </button>
                <!-- End Go Top Area -->



                
                <script
                    src="https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/requirejs/require.min.js">
                </script>
                
                
                
            </div>
        </div>

@endsection        