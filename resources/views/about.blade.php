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
                        <img src="{{asset('landing/about/page-banner-shape1.png')}}"
                            alt="image">
                    </div>

                    <div class="page-banner-shape2" data-speed="0.05" data-revert="true">
                        <img src="{{asset('landing/about/page-banner-shape2.png')}}"
                            alt="image">
                    </div>

                </div>

                <div class="olan-fullwidth-top" aria-label="Blocks">
                    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top"
                        data-droptarget="1" aria-labelledby="fullwidth-top-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-top-block-region-heading">Blocks</h2><a href="#sb-1"
                            class="visually-hidden-focusable">Skip [Olan] Features</a>

                        <section id="inst127" class=" block_olan_features block  card mb-3" role="region"
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

                        </section>

                        <span id="sb-1"></span><a href="#sb-2" class="visually-hidden-focusable">Skip [Olan] About
                            Two</a>

                        <section id="inst130" class=" block_olan_about_two block  card mb-3" role="region"
                            data-block="olan_about_two" data-instance-id="130" aria-labelledby="instance-130-header">

                            <div class="card-body p-3">

                                <h3 id="instance-130-header" class="h5 card-title d-inline">[Olan] About Two</h3>


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
                                                        <span class="sub">About Olan</span>
                                                        <h2 class="title-animation">
                                                            One Platform. Infinite <span>Learning Possibilities. <img
                                                                    src="{{asset('landing/about/title-line.png')}}"
                                                                    alt="image"></span>
                                                        </h2>
                                                        <p>
                                                            <p>At Olan, we believe quality education should be
                                                                accessible, engaging, and empowering—for everyone,
                                                                everywhere.</p>
                                                        </p>

                                                        <ul class="list" data-cues="fadeIn" data-duration="1000"
                                                            data-delay="0" data-stagger="120">
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <h3>Learn from Anywhere</h3>
                                                                    <p>Access your courses anytime, on any device—at
                                                                        home, at work, or on the go.</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <h3>Teach with Confidence</h3>
                                                                    <p>All the tools you need to build, launch, and
                                                                        scale your courses—stress-free.</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <img src="{{asset('landing/about/about-list-icon.svg')}}"
                                                                        alt="image"> </div>
                                                                <div class="content">
                                                                    <h3>Earn Real Certificates</h3>
                                                                    <p>Complete courses and receive professional
                                                                        certificates to boost your career.</p>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="about-btn">
                                                            <a href="#"
                                                                class="default-btn">
                                                                Learn More About Us <svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="14" viewBox="0 0 18 14" fill="none"
                                                                    aria-hidden="true">
                                                                    <path opacity="0.5"
                                                                        d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                                        fill="white" stroke="white" />
                                                                    <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.row-->
                                        </div>

                                        <div class="dl-video-area pt-140">
                                            <div class="container" data-cues="slideInUp" data-duration="1000"
                                                data-disabled="true">
                                                <div class="dl-video-view" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <img src="{{asset('landing/about/video.png')}}"
                                                        alt="image">
                                                    <a data-fslightbox="video" class="video-btn"
                                                        href="https://youtu.be/PWvPbGWVRrU">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                                            viewBox="0 0 24 24">
                                                            <path fill="none" stroke="#fff" stroke-width="1.5"
                                                                d="M20.409 9.353a2.998 2.998 0 0 1 0 5.294L7.597 21.614C5.534 22.737 3 21.277 3 18.968V5.033c0-2.31 2.534-3.769 4.597-2.648z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="education-about-rectangle">
                                            <img src="{{asset('landing/about/rectangle2.png')}}"
                                                alt="image">
                                        </div>

                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-2"></span><a href="#sb-3" class="visually-hidden-focusable">Skip [Olan] Partners
                            Three</a>

                        <section id="inst131" class=" block_olan_partners_three block  card mb-3" role="region"
                            data-block="olan_partners_three" data-instance-id="131"
                            aria-labelledby="instance-131-header">

                            <div class="card-body p-3">

                                <h3 id="instance-131-header" class="h5 card-title d-inline">[Olan] Partners Three</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-partner-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000">
                                                <div class="col-lg-6 col-md-12">
                                                    <div
                                                        class="ot-partner-content section-title-animation animation-style3">
                                                        <span class="sub">Our Partners</span>
                                                        <h2 class="title-animation">
                                                            Trusted by Leading <span>
                                                                Organizations <img
                                                                    src="{{asset('landing/about/title-line.png')}}"
                                                                    alt="image">
                                                            </span>
                                                            Worldwide </h2>
                                                        <p>Our platform supports organizations of all sizes in
                                                            upskilling their workforce through expert-led training.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="ot-partner-items">
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award1.png')}}"
                                                                alt="award1.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award2.png')}}"
                                                                alt="award2.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award3.png')}}"
                                                                alt="award3.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award4.png')}}"
                                                                alt="award4.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award5.png')}}"
                                                                alt="award5.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award6.png')}}"
                                                                alt="award6.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award7.png')}}"
                                                                alt="award7.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award8.png')}}"
                                                                alt="award8.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="{{asset('landing/images/award9.png')}}"
                                                                alt="award9.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-3"></span><a href="#sb-4" class="visually-hidden-focusable">Skip [Olan] Overview
                            Area</a>

                        <section id="inst132" class=" block_olan_overview_area block  card mb-3" role="region"
                            data-block="olan_overview_area" data-instance-id="132"
                            aria-labelledby="instance-132-header">

                            <div class="card-body p-3">

                                <h3 id="instance-132-header" class="h5 card-title d-inline">[Olan] Overview Area</h3>


                                <div class="card-text content mt-3">

                                    <div class="education-overview-area pb-140">
                                        <div class="container">
                                            <div class="education-overview-inner">
                                                <div class="overview-fun-items" data-cues="slideInUp"
                                                    data-duration="1000">

                                                    <div class="fun">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <h3 class="counter">6</h3>
                                                            <h3 class="sub">.</h3>
                                                            <h3 class="counter">8</h3>
                                                            <h3 class="sub">M+</h3>
                                                        </div>
                                                        <p>ACTIVE LEARNERS</p>
                                                    </div>

                                                    <div class="fun wrap2">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <h3 class="counter">7</h3>
                                                            <h3 class="sub">.</h3>
                                                            <h3 class="counter">5</h3>
                                                            <h3 class="sub">K+</h3>
                                                        </div>
                                                        <p>COURSES AVAILABLE</p>
                                                    </div>

                                                    <div class="fun wrap3">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <h3 class="counter">120</h3>
                                                            <h3 class="sub">+</h3>
                                                        </div>
                                                        <p>COUNTRIES REACHED</p>
                                                    </div>

                                                    <div class="fun wrap4">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <h3 class="counter">4</h3>
                                                            <h3 class="sub">.</h3>
                                                            <h3 class="counter">9</h3>
                                                        </div>
                                                        <p>AVERAGE COURSE RATING</p>
                                                    </div>

                                                </div>

                                                <div class="row justify-content-center align-items-center g-4"
                                                    data-cues="slideInUp" data-duration="1000">
                                                    <div class="col-lg-7 col-md-12">
                                                        <div
                                                            class="education-overview-content section-title-animation animation-style1">
                                                            <h2 class="title-animation">Kickstart Your Learning Journey
                                                                and Build the <span>Career You<img
                                                                        src="{{asset('landing/about/title-line.png')}}"
                                                                        alt="image"></span> Deserve</h2>
                                                            <p>Explore expert-led courses that help you grow faster,
                                                                smarter, and stronger.</p>
                                                            <div class="overview-btn">
                                                                <a href="#"
                                                                    class="default-btn">Get Started Now
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="14" viewBox="0 0 18 14" fill="none">
                                                                        <path opacity="0.5"
                                                                            d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                                            fill="white" stroke="white" />
                                                                        <path d="M10.75 1L16.75 7L10.75 13"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-12">
                                                        <div class="education-overview-image">

                                                            <img src="{{asset('landing/about/overview.png')}}"
                                                                alt="image">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row justify-content-center g-1" data-cues="slideInUp"
                                                data-duration="1000">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="education-overview-wrapper">
                                                        <div class="swiper education-overview-slider">
                                                            <div class="swiper-wrapper">

                                                                <div class="swiper-slide">
                                                                    <div class="education-overview-slide-item">
                                                                        <div class="quote">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="43" height="43"
                                                                                viewBox="0 0 43 43" fill="none">
                                                                                <path
                                                                                    d="M34.0165 17.6209C33.9299 16.6846 33.9961 14.1395 36.4343 10.6003C36.6187 10.3333 36.5853 9.97306 36.3562 9.74409C35.3622 8.75005 34.7468 8.12278 34.3151 7.68385C33.7475 7.1051 33.4883 6.84138 33.1091 6.49752C32.8558 6.26989 32.4727 6.26592 32.2168 6.48905C27.967 10.187 23.2468 17.8282 23.9298 27.1899C24.3301 32.6869 28.3397 36.6768 33.4634 36.6768C38.7216 36.6768 42.9995 32.3995 42.9995 27.1413C42.9995 22.0688 39.0182 17.9089 34.0165 17.6209ZM33.4634 35.333C29.0634 35.333 25.6181 31.8674 25.2697 27.0928C24.5013 16.5639 30.7601 9.7244 32.6511 7.9135C32.8355 8.09524 33.0461 8.3091 33.3565 8.62535C33.7304 9.0059 34.2423 9.52687 35.0165 10.3038C32.0566 14.8638 32.615 18.113 32.8597 18.5788C32.9759 18.8 33.2141 18.9489 33.4634 18.9489C37.9808 18.9489 41.6558 22.6239 41.6558 27.1413C41.6558 31.6581 37.9808 35.333 33.4634 35.333Z"
                                                                                    fill="#1C43FE" />
                                                                                <path
                                                                                    d="M10.1546 17.6207C10.0673 16.6871 10.1316 14.1439 12.5724 10.6002C12.7561 10.3331 12.7233 9.97289 12.4943 9.74392C11.5022 8.75183 10.8874 8.12524 10.4564 7.6863C9.88688 7.10627 9.627 6.84182 9.24779 6.49735C8.9945 6.26972 8.61133 6.26643 8.35548 6.48821C4.10573 10.1861 -0.615129 17.8261 0.0665551 27.1897C0.468135 32.686 4.47836 36.6766 9.60207 36.6766C14.8603 36.6766 19.1383 32.3993 19.1383 27.1411C19.1383 22.068 15.1569 17.9075 10.1546 17.6207ZM9.60207 35.3329C5.20277 35.3329 1.75545 31.8672 1.40641 27.0919C0.640067 16.5604 6.89885 9.72356 8.78978 7.91333C8.97481 8.09507 9.18612 8.31027 9.49713 8.6272C9.87042 9.00775 10.3816 9.52805 11.1545 10.3036C8.1947 14.8643 8.75309 18.1128 8.99779 18.578C9.11396 18.7991 9.35274 18.9487 9.60207 18.9487C14.1196 18.9487 17.7945 22.6237 17.7945 27.1411C17.7945 31.6579 14.1196 35.3329 9.60207 35.3329Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                        </div>
                                                                        <p>Olan completely changed the way I learn. The
                                                                            platform is smooth, the content is real, and
                                                                            I feel more confident applying for jobs now.
                                                                        </p>
                                                                        <div class="profile">
                                                                            <div class="avatars"><img
                                                                                    src="{{asset('landing/about/user2.jpg')}}"
                                                                                    class="left" alt="image"><img
                                                                                    src="{{asset('landing/about/user3.jpg')}}"
                                                                                    class="active" alt="image"><img
                                                                                    src="{{asset('landing/about/user1.jpg')}}"
                                                                                    class="right" alt="image"></div>
                                                                            <div class="content">
                                                                                <h3>Maria Jackson</h3>
                                                                                <span>Aspiring Data Analyst</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <div class="education-overview-slide-item">
                                                                        <div class="quote">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="43" height="43"
                                                                                viewBox="0 0 43 43" fill="none">
                                                                                <path
                                                                                    d="M34.0165 17.6209C33.9299 16.6846 33.9961 14.1395 36.4343 10.6003C36.6187 10.3333 36.5853 9.97306 36.3562 9.74409C35.3622 8.75005 34.7468 8.12278 34.3151 7.68385C33.7475 7.1051 33.4883 6.84138 33.1091 6.49752C32.8558 6.26989 32.4727 6.26592 32.2168 6.48905C27.967 10.187 23.2468 17.8282 23.9298 27.1899C24.3301 32.6869 28.3397 36.6768 33.4634 36.6768C38.7216 36.6768 42.9995 32.3995 42.9995 27.1413C42.9995 22.0688 39.0182 17.9089 34.0165 17.6209ZM33.4634 35.333C29.0634 35.333 25.6181 31.8674 25.2697 27.0928C24.5013 16.5639 30.7601 9.7244 32.6511 7.9135C32.8355 8.09524 33.0461 8.3091 33.3565 8.62535C33.7304 9.0059 34.2423 9.52687 35.0165 10.3038C32.0566 14.8638 32.615 18.113 32.8597 18.5788C32.9759 18.8 33.2141 18.9489 33.4634 18.9489C37.9808 18.9489 41.6558 22.6239 41.6558 27.1413C41.6558 31.6581 37.9808 35.333 33.4634 35.333Z"
                                                                                    fill="#1C43FE" />
                                                                                <path
                                                                                    d="M10.1546 17.6207C10.0673 16.6871 10.1316 14.1439 12.5724 10.6002C12.7561 10.3331 12.7233 9.97289 12.4943 9.74392C11.5022 8.75183 10.8874 8.12524 10.4564 7.6863C9.88688 7.10627 9.627 6.84182 9.24779 6.49735C8.9945 6.26972 8.61133 6.26643 8.35548 6.48821C4.10573 10.1861 -0.615129 17.8261 0.0665551 27.1897C0.468135 32.686 4.47836 36.6766 9.60207 36.6766C14.8603 36.6766 19.1383 32.3993 19.1383 27.1411C19.1383 22.068 15.1569 17.9075 10.1546 17.6207ZM9.60207 35.3329C5.20277 35.3329 1.75545 31.8672 1.40641 27.0919C0.640067 16.5604 6.89885 9.72356 8.78978 7.91333C8.97481 8.09507 9.18612 8.31027 9.49713 8.6272C9.87042 9.00775 10.3816 9.52805 11.1545 10.3036C8.1947 14.8643 8.75309 18.1128 8.99779 18.578C9.11396 18.7991 9.35274 18.9487 9.60207 18.9487C14.1196 18.9487 17.7945 22.6237 17.7945 27.1411C17.7945 31.6579 14.1196 35.3329 9.60207 35.3329Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                        </div>
                                                                        <p>Thanks to this platform, I transitioned from
                                                                            a complete beginner to a confident data
                                                                            professional. Totally recommend it!</p>
                                                                        <div class="profile">
                                                                            <div class="avatars"><img
                                                                                    src="{{asset('landing/about/user2.jpg')}}"
                                                                                    class="left" alt="image"><img
                                                                                    src="{{asset('landing/about/user1.jpg')}}"
                                                                                    class="active" alt="image"><img
                                                                                    src="{{asset('landing/about/user3.jpg')}}"
                                                                                    class="right" alt="image"></div>
                                                                            <div class="content">
                                                                                <h3>James Smith</h3>
                                                                                <span>Junior Data Scientist</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="swiper-slide">
                                                                    <div class="education-overview-slide-item">
                                                                        <div class="quote">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="43" height="43"
                                                                                viewBox="0 0 43 43" fill="none">
                                                                                <path
                                                                                    d="M34.0165 17.6209C33.9299 16.6846 33.9961 14.1395 36.4343 10.6003C36.6187 10.3333 36.5853 9.97306 36.3562 9.74409C35.3622 8.75005 34.7468 8.12278 34.3151 7.68385C33.7475 7.1051 33.4883 6.84138 33.1091 6.49752C32.8558 6.26989 32.4727 6.26592 32.2168 6.48905C27.967 10.187 23.2468 17.8282 23.9298 27.1899C24.3301 32.6869 28.3397 36.6768 33.4634 36.6768C38.7216 36.6768 42.9995 32.3995 42.9995 27.1413C42.9995 22.0688 39.0182 17.9089 34.0165 17.6209ZM33.4634 35.333C29.0634 35.333 25.6181 31.8674 25.2697 27.0928C24.5013 16.5639 30.7601 9.7244 32.6511 7.9135C32.8355 8.09524 33.0461 8.3091 33.3565 8.62535C33.7304 9.0059 34.2423 9.52687 35.0165 10.3038C32.0566 14.8638 32.615 18.113 32.8597 18.5788C32.9759 18.8 33.2141 18.9489 33.4634 18.9489C37.9808 18.9489 41.6558 22.6239 41.6558 27.1413C41.6558 31.6581 37.9808 35.333 33.4634 35.333Z"
                                                                                    fill="#1C43FE" />
                                                                                <path
                                                                                    d="M10.1546 17.6207C10.0673 16.6871 10.1316 14.1439 12.5724 10.6002C12.7561 10.3331 12.7233 9.97289 12.4943 9.74392C11.5022 8.75183 10.8874 8.12524 10.4564 7.6863C9.88688 7.10627 9.627 6.84182 9.24779 6.49735C8.9945 6.26972 8.61133 6.26643 8.35548 6.48821C4.10573 10.1861 -0.615129 17.8261 0.0665551 27.1897C0.468135 32.686 4.47836 36.6766 9.60207 36.6766C14.8603 36.6766 19.1383 32.3993 19.1383 27.1411C19.1383 22.068 15.1569 17.9075 10.1546 17.6207ZM9.60207 35.3329C5.20277 35.3329 1.75545 31.8672 1.40641 27.0919C0.640067 16.5604 6.89885 9.72356 8.78978 7.91333C8.97481 8.09507 9.18612 8.31027 9.49713 8.6272C9.87042 9.00775 10.3816 9.52805 11.1545 10.3036C8.1947 14.8643 8.75309 18.1128 8.99779 18.578C9.11396 18.7991 9.35274 18.9487 9.60207 18.9487C14.1196 18.9487 17.7945 22.6237 17.7945 27.1411C17.7945 31.6579 14.1196 35.3329 9.60207 35.3329Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                        </div>
                                                                        <p>Olan is your all-in-one online education
                                                                            platform—built for students, instructors,
                                                                            and institutions to thrive in a connected
                                                                            learning world.</p>
                                                                        <div class="profile">
                                                                            <div class="avatars"><img
                                                                                    src="{{asset('landing/about/user2.jpg')}}"
                                                                                    class="left" alt="image"><img
                                                                                    src="{{asset('landing/about/user3.jpg')}}"
                                                                                    class="active" alt="image"><img
                                                                                    src="{{asset('landing/about/user1.jpg')}}"
                                                                                    class="right" alt="image"></div>
                                                                            <div class="content">
                                                                                <h3>Sophie Allen</h3>
                                                                                <span>Data Enthusiast</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="overview-nav-buttons">
                                                            <div class="button-prev">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <g fill="none">
                                                                        <path fill="#1C43FE"
                                                                            d="M20 12.75a.75.75 0 0 0 0-1.5zm0-1.5H4v1.5h16z"
                                                                            opacity="0.5" />
                                                                        <path stroke="#1C43FE" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="m10 6l-6 6l6 6" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="button-next">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24">
                                                                    <g fill="none">
                                                                        <path fill="#1C43FE"
                                                                            d="M4 11.25a.75.75 0 0 0 0 1.5zm0 1.5h16v-1.5H4z"
                                                                            opacity="0.5" />
                                                                        <path stroke="#1C43FE" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="1.5"
                                                                            d="m14 6l6 6l-6 6" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-12">
                                                    <div class="education-overview-right">
                                                        <div class="content section-title-animation animation-style1">
                                                            <h3 class="title-animation">Join a Global Community of
                                                                Learners and Educators</h3>
                                                            <p>Collaborate with learners from 120+ countries, share
                                                                ideas, and grow with expert guidance.</p>
                                                            <a href="https://olan.ddev.site/mod/page/view.php?id=22"
                                                                class="default-btn">Join Our Community
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="14" viewBox="0 0 18 14" fill="none">
                                                                    <path opacity="0.5"
                                                                        d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                                        fill="white" stroke="white" />
                                                                    <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <div class="users">

                                                            <img src="{{asset('landing/about/users.png')}}"
                                                                alt="image">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-4"></span><a href="#sb-5" class="visually-hidden-focusable">Skip [Olan] Team</a>

                        <section id="inst133" class=" block_olan_team block  card mb-3" role="region"
                            data-block="olan_team" data-instance-id="133" aria-labelledby="instance-133-header">

                            <div class="card-body p-3">

                                <h3 id="instance-133-header" class="h5 card-title d-inline">[Olan] Team</h3>


                                <div class="card-text content mt-3">
                                    <div class="education-team-area pb-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000"><span class="sub">Meet Our
                                                    Instructors</span>
                                                <h2 class="title-animation">Your Learning Guides <img
                                                        src="{{asset('landing/about/title-line.png')}}"
                                                        alt="image"></h2>
                                            </div>
                                            <div class="row justify-content-center g-4" data-cues="slideInUp"
                                                data-duration="1000">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="education-team-card">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="{{asset('landing/about/team1.jpg')}}"
                                                                    alt="image"></a>
                                                            <div class="share-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M9 11.5C9 12.163 8.73661 12.7989 8.26777 13.2678C7.79893 13.7366 7.16304 14 6.5 14C5.83696 14 5.20107 13.7366 4.73223 13.2678C4.26339 12.7989 4 12.163 4 11.5C4 10.837 4.26339 10.2011 4.73223 9.73223C5.20107 9.26339 5.83696 9 6.5 9C7.16304 9 7.79893 9.26339 8.26777 9.73223C8.73661 10.2011 9 10.837 9 11.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" />
                                                                    <path opacity="0.5"
                                                                        d="M14.32 16.8018L9 13.2898M14.42 6.83984L9.1 10.3518"
                                                                        stroke="#1C43FE" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M19 18.5C19 19.163 18.7366 19.7989 18.2678 20.2678C17.7989 20.7366 17.163 21 16.5 21C15.837 21 15.2011 20.7366 14.7322 20.2678C14.2634 19.7989 14 19.163 14 18.5C14 17.837 14.2634 17.2011 14.7322 16.7322C15.2011 16.2634 15.837 16 16.5 16C17.163 16 17.7989 16.2634 18.2678 16.7322C18.7366 17.2011 19 17.837 19 18.5ZM19 5.5C19 6.16304 18.7366 6.79893 18.2678 7.26777C17.7989 7.73661 17.163 8 16.5 8C15.837 8 15.2011 7.73661 14.7322 7.26777C14.2634 6.79893 14 6.16304 14 5.5C14 4.83696 14.2634 4.20107 14.7322 3.73223C15.2011 3.26339 15.837 3 16.5 3C17.163 3 17.7989 3.26339 18.2678 3.73223C18.7366 4.20107 19 4.83696 19 5.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" /></svg>
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-instagram-fill"></i></a></li>
                                                                </ul>
                                                                <div class="shape1"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h3><a
                                                                    href="#">Maria
                                                                    Jackson</a></h3><span>UX/UI Design Mentor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="education-team-card wrap-style">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="{{asset('landing/about/team2.jpg')}}"
                                                                    alt="image"></a>
                                                            <div class="share-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M9 11.5C9 12.163 8.73661 12.7989 8.26777 13.2678C7.79893 13.7366 7.16304 14 6.5 14C5.83696 14 5.20107 13.7366 4.73223 13.2678C4.26339 12.7989 4 12.163 4 11.5C4 10.837 4.26339 10.2011 4.73223 9.73223C5.20107 9.26339 5.83696 9 6.5 9C7.16304 9 7.79893 9.26339 8.26777 9.73223C8.73661 10.2011 9 10.837 9 11.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" />
                                                                    <path opacity="0.5"
                                                                        d="M14.32 16.8018L9 13.2898M14.42 6.83984L9.1 10.3518"
                                                                        stroke="#1C43FE" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M19 18.5C19 19.163 18.7366 19.7989 18.2678 20.2678C17.7989 20.7366 17.163 21 16.5 21C15.837 21 15.2011 20.7366 14.7322 20.2678C14.2634 19.7989 14 19.163 14 18.5C14 17.837 14.2634 17.2011 14.7322 16.7322C15.2011 16.2634 15.837 16 16.5 16C17.163 16 17.7989 16.2634 18.2678 16.7322C18.7366 17.2011 19 17.837 19 18.5ZM19 5.5C19 6.16304 18.7366 6.79893 18.2678 7.26777C17.7989 7.73661 17.163 8 16.5 8C15.837 8 15.2011 7.73661 14.7322 7.26777C14.2634 6.79893 14 6.16304 14 5.5C14 4.83696 14.2634 4.20107 14.7322 3.73223C15.2011 3.26339 15.837 3 16.5 3C17.163 3 17.7989 3.26339 18.2678 3.73223C18.7366 4.20107 19 4.83696 19 5.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" /></svg>
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-instagram-fill"></i></a></li>
                                                                </ul>
                                                                <div class="shape1"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h3><a
                                                                    href="#">James
                                                                    Patel</a></h3><span>Senior Web Developer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="education-team-card">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="{{asset('landing/about/team3.jpg')}}"
                                                                    alt="image"></a>
                                                            <div class="share-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M9 11.5C9 12.163 8.73661 12.7989 8.26777 13.2678C7.79893 13.7366 7.16304 14 6.5 14C5.83696 14 5.20107 13.7366 4.73223 13.2678C4.26339 12.7989 4 12.163 4 11.5C4 10.837 4.26339 10.2011 4.73223 9.73223C5.20107 9.26339 5.83696 9 6.5 9C7.16304 9 7.79893 9.26339 8.26777 9.73223C8.73661 10.2011 9 10.837 9 11.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" />
                                                                    <path opacity="0.5"
                                                                        d="M14.32 16.8018L9 13.2898M14.42 6.83984L9.1 10.3518"
                                                                        stroke="#1C43FE" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M19 18.5C19 19.163 18.7366 19.7989 18.2678 20.2678C17.7989 20.7366 17.163 21 16.5 21C15.837 21 15.2011 20.7366 14.7322 20.2678C14.2634 19.7989 14 19.163 14 18.5C14 17.837 14.2634 17.2011 14.7322 16.7322C15.2011 16.2634 15.837 16 16.5 16C17.163 16 17.7989 16.2634 18.2678 16.7322C18.7366 17.2011 19 17.837 19 18.5ZM19 5.5C19 6.16304 18.7366 6.79893 18.2678 7.26777C17.7989 7.73661 17.163 8 16.5 8C15.837 8 15.2011 7.73661 14.7322 7.26777C14.2634 6.79893 14 6.16304 14 5.5C14 4.83696 14.2634 4.20107 14.7322 3.73223C15.2011 3.26339 15.837 3 16.5 3C17.163 3 17.7989 3.26339 18.2678 3.73223C18.7366 4.20107 19 4.83696 19 5.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" /></svg>
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-instagram-fill"></i></a></li>
                                                                </ul>
                                                                <div class="shape1"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h3><a
                                                                    href="#">Hannah
                                                                    Kim</a></h3><span>Personal Productivity Coach</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="education-team-card wrap-style">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="{{asset('landing/about/team4.jpg')}}"
                                                                    alt="image"></a>
                                                            <div class="share-btn"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M9 11.5C9 12.163 8.73661 12.7989 8.26777 13.2678C7.79893 13.7366 7.16304 14 6.5 14C5.83696 14 5.20107 13.7366 4.73223 13.2678C4.26339 12.7989 4 12.163 4 11.5C4 10.837 4.26339 10.2011 4.73223 9.73223C5.20107 9.26339 5.83696 9 6.5 9C7.16304 9 7.79893 9.26339 8.26777 9.73223C8.73661 10.2011 9 10.837 9 11.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" />
                                                                    <path opacity="0.5"
                                                                        d="M14.32 16.8018L9 13.2898M14.42 6.83984L9.1 10.3518"
                                                                        stroke="#1C43FE" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M19 18.5C19 19.163 18.7366 19.7989 18.2678 20.2678C17.7989 20.7366 17.163 21 16.5 21C15.837 21 15.2011 20.7366 14.7322 20.2678C14.2634 19.7989 14 19.163 14 18.5C14 17.837 14.2634 17.2011 14.7322 16.7322C15.2011 16.2634 15.837 16 16.5 16C17.163 16 17.7989 16.2634 18.2678 16.7322C18.7366 17.2011 19 17.837 19 18.5ZM19 5.5C19 6.16304 18.7366 6.79893 18.2678 7.26777C17.7989 7.73661 17.163 8 16.5 8C15.837 8 15.2011 7.73661 14.7322 7.26777C14.2634 6.79893 14 6.16304 14 5.5C14 4.83696 14.2634 4.20107 14.7322 3.73223C15.2011 3.26339 15.837 3 16.5 3C17.163 3 17.7989 3.26339 18.2678 3.73223C18.7366 4.20107 19 4.83696 19 5.5Z"
                                                                        stroke="#1C43FE" stroke-width="1.5" /></svg>
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-instagram-fill"></i></a></li>
                                                                </ul>
                                                                <div class="shape1"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"><svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h3><a
                                                                    href="#">Liam
                                                                    Chen</a></h3><span>Lead Data Science Educator</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-5"></span><a href="#sb-6" class="visually-hidden-focusable">Skip [Olan] CTA</a>

                        <section id="inst134" class=" block_olan_cta block  card mb-3" role="region"
                            data-block="olan_cta" data-instance-id="134" aria-labelledby="instance-134-header">

                            <div class="card-body p-3">

                                <h3 id="instance-134-header" class="h5 card-title d-inline">[Olan] CTA</h3>


                                <div class="card-text content mt-3">
                                    <div class="cta-wrap-area ptb-140">
                                        <div class="container">
                                            <div class="cta-wrap-content section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000">
                                                <h2 class="title-animation">
                                                    Start Your Journey Toward In-Demand <span>
                                                        Skills Today <img
                                                            src="{{asset('landing/about/title-line.png')}}"
                                                            alt="image"> </span>
                                                </h2>
                                                <p>Enroll now and learn from certified industry experts.</p>
                                                <a href="#" class="default-btn">
                                                    Get Started Now <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                        height="14" viewBox="0 0 18 14" fill="none">
                                                        <path opacity="0.5" d="M16.375 6.75V7.25H1.375V6.75H16.375Z"
                                                            fill="#1C43FE" stroke="#1C43FE" />
                                                        <path d="M10.875 1L16.875 7L10.875 13" stroke="#1C43FE"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="cta-wrap-shape1" data-speed="0.02" data-revert="true">
                                            <img src="{{asset('landing/about/cta-shape5.png')}}"
                                                alt="image">
                                        </div>
                                        <div class="cta-wrap-shape2" data-speed="0.02" data-revert="true">
                                            <img src="{{asset('landing/about/cta-shape6.png')}}"
                                                alt="image">
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-6"></span>
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