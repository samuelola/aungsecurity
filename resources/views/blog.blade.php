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
                            <h2 class="title-animation">Blog</h2>
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
                                            Blog 
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
                                                                <div class="page-header-headings">
                                                                    <h3 id='' class='h2'>Online Courses &amp; Training +
                                                                        LMS Moodle Theme</h3>
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
                                                                        <a href="https://olan-moodle.hibootstrap.com/">
                                                                            Home
                                                                        </a>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <span>
                                                                            Site pages
                                                                        </span>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php">
                                                                            Site blogs
                                                                        </a>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a href="https://olan-moodle.hibootstrap.com/blog/index.php"
                                                                            aria-current="page">
                                                                            Blog entries
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

                                                <div class="blog-area">
                                                    <div class="row">

                                                        <span id="maincontent"></span>
                                                        <h3 id='' class='main page-section-title-hide'>Site blog</h3>
                                                        <nav aria-label="Page"
                                                            class="pagination pagination-centered justify-content-center">
                                                            <ul class="mt-1 pagination " data-page-size="10">
                                                                <li class="page-item active" data-page-number="1">
                                                                    <a href="#" class="page-link" aria-current="page">
                                                                        <span aria-hidden="true">1</span>
                                                                        <span class="visually-hidden">Page 1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item " data-page-number="2">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?column=3&amp;blogpage=1"
                                                                        class="page-link">
                                                                        <span aria-hidden="true">2</span>
                                                                        <span class="visually-hidden">Page 2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item" data-page-number="2">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?column=3&amp;blogpage=1"
                                                                        class="page-link">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="visually-hidden">Next page</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=1">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/1/blog2.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=1"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=1"
                                                                        class="tag-btn">Success Stories</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=1">Real
                                                                            Stories from Olan Students</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>At Olan, learning is not just about completing
                                                                        courses—it’s about transforming lives, careers,
                                                                        and futures.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=2">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/2/blog1.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=2"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=2"
                                                                        class="tag-btn">Learning Tips</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=2">How
                                                                            to Stay Motivated While Learning Online</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=16">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/16/blog15.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=16"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=16"
                                                                        class="tag-btn">Habits</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=16">How
                                                                            to Build a Learning Routine That Actually
                                                                            Sticks</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=15">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/15/blog16.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=15"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=15"
                                                                        class="tag-btn">Career</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=15">Best
                                                                            Certifications That Can Boost Your Career in
                                                                            2025</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=14">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/14/blog14.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=14"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=14"
                                                                        class="tag-btn">Tools &amp; Tech</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=14">Mastering
                                                                            Focus: Best Tools for Online Learners</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=13">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/13/blog13.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=13"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=13"
                                                                        class="tag-btn">Course Guide</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=13">Which
                                                                            Online Course Format Is Right for You?</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=12">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/12/blog12.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=12"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=12"
                                                                        class="tag-btn">Productivity</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=12">Top
                                                                            10 Time Management Tricks for Online
                                                                            Students</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=11">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/11/blog11.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=11"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=11"
                                                                        class="tag-btn">Learning Tips</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=11">How
                                                                            to Stay Motivated While Learning Online</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=10">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/10/blog10.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=10"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=10"
                                                                        class="tag-btn">Live Learning</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=10">How
                                                                            to Prepare for Your First Live Online
                                                                            Class</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-sm-12   mb-4">
                                                            <div class="education-blog-card with-little-gap">
                                                                <div class="image">
                                                                    <a
                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=9">
                                                                        <div class="attachedimages"><img
                                                                                src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/9/blog9.jpg"
                                                                                alt="" /></div>
                                                                    </a>
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=9"
                                                                        class="arrow-btn">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE" />
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                        <div class="shape1">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=9"
                                                                        class="tag-btn">Programming</a>
                                                                    <h3>
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=9">Zero
                                                                            to Hero: A Beginner's Guide to Learning
                                                                            Python</a> </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                    fill="#1C43FE" />
                                                                            </svg>
                                                                            <span>
                                                                                9 September 2025 </span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE"
                                                                                    stroke-width="1.5" />
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                            <span>2 min read</span>
                                                                        </li>
                                                                    </ul>
                                                                    <p>Online learning offers flexibility, access to
                                                                        world-class educators, and the ability to learn
                                                                        at your</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <nav aria-label="Page"
                                                            class="pagination pagination-centered justify-content-center">
                                                            <ul class="mt-1 pagination " data-page-size="10">
                                                                <li class="page-item active" data-page-number="1">
                                                                    <a href="#" class="page-link" aria-current="page">
                                                                        <span aria-hidden="true">1</span>
                                                                        <span class="visually-hidden">Page 1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item " data-page-number="2">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?column=3&amp;blogpage=1"
                                                                        class="page-link">
                                                                        <span aria-hidden="true">2</span>
                                                                        <span class="visually-hidden">Page 2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="page-item" data-page-number="2">
                                                                    <a href="https://olan-moodle.hibootstrap.com/blog/index.php?column=3&amp;blogpage=1"
                                                                        class="page-link">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                        <span class="visually-hidden">Next page</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav><br />&nbsp;&nbsp;<br />


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


                    <aside id="block-region-fullwidth-bottom" class="block-region" data-blockregion="fullwidth-bottom"
                        data-droptarget="1" aria-labelledby="fullwidth-bottom-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-bottom-block-region-heading">Blocks</h2>
                    </aside>
                </div>


            </div>
        </div>

@endsection        
    