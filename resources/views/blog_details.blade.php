@extends('frontend.layout.master')


@section('content')

        <div id="page" data-region="mainpage" data-usertour="scroller"
            class="olan-page-drawers drawers   drag-container">
            <div class=" drag-container">
                <div class="drawer-toggles d-flex">
                </div>

                <div class="page-banner-area">
                    <div class="container">
                        <div class="page-banner-content section-title-animation animation-style1" data-cues="slideInUp"
                            data-duration="1000">
                            <h2 class="title-animation">Blog</h2>
                            <nav aria-label="Navigation bar">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            Blog Details
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
                                                                    <h3 id='' class='h2'>Jeku Smit</h3>
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
                                                                            Users
                                                                        </span>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/user/profile.php?id=2">
                                                                            Jeku Smit
                                                                        </a>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/blog/index.php">
                                                                            Blog entries
                                                                        </a>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a href="https://olan-moodle.hibootstrap.com/blog/index.php"
                                                                            aria-current="page">
                                                                            Zero to Hero: A Beginner's Guide to Learning
                                                                            Python
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
                                                        <h3 id='' class='main page-section-title-hide'>Blog entry by
                                                            Jeku Smit</h3>
                                                        <div class="blog-details-area">
                                                            <div class="container">
                                                                <div class="row justify-content-center g-4"
                                                                    data-cues="slideInUp" data-duration="1000">
                                                                    <div class="col-xl-8 col-md-12">
                                                                        <div class="blog-details-desc">
                                                                            <div class="attachedimages"><img
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/1/blog/attachment/9/blog9.jpg"
                                                                                    alt="" /></div>
                                                                            <div class="content">
                                                                                <span class="tag-btn">Programming</span>
                                                                                <h3>Zero to Hero: A Beginner's Guide to
                                                                                    Learning Python</h3>
                                                                                <ul class="meta">
                                                                                    <li class="user-btn">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="24" height="24" x="0"
                                                                                            y="0"
                                                                                            viewBox="0 0 512 512.001"
                                                                                            style="enable-background:new 0 0 24 24"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <path
                                                                                                    d="M210.352 246.633c33.882 0 63.218-12.153 87.195-36.13 23.969-23.972 36.125-53.304 36.125-87.19 0-33.876-12.152-63.211-36.129-87.192C273.566 12.152 244.23 0 210.352 0c-33.887 0-63.22 12.152-87.192 36.125s-36.129 53.309-36.129 87.188c0 33.886 12.156 63.222 36.13 87.195 23.98 23.969 53.316 36.125 87.19 36.125zM144.379 57.34c18.394-18.395 39.973-27.336 65.973-27.336 25.996 0 47.578 8.941 65.976 27.336 18.395 18.398 27.34 39.98 27.34 65.972 0 26-8.945 47.579-27.34 65.977-18.398 18.399-39.98 27.34-65.976 27.34-25.993 0-47.57-8.945-65.973-27.34-18.399-18.394-27.344-39.976-27.344-65.976 0-25.993 8.945-47.575 27.344-65.973zM426.129 393.703c-.692-9.976-2.09-20.86-4.149-32.351-2.078-11.579-4.753-22.524-7.957-32.528-3.312-10.34-7.808-20.55-13.375-30.336-5.77-10.156-12.55-19-20.16-26.277-7.957-7.613-17.699-13.734-28.965-18.2-11.226-4.44-23.668-6.69-36.976-6.69-5.227 0-10.281 2.144-20.043 8.5a2711.03 2711.03 0 0 1-20.879 13.46c-6.707 4.274-15.793 8.278-27.016 11.903-10.949 3.543-22.066 5.34-33.043 5.34-10.968 0-22.086-1.797-33.043-5.34-11.21-3.622-20.3-7.625-26.996-11.899-7.77-4.965-14.8-9.496-20.898-13.469-9.754-6.355-14.809-8.5-20.035-8.5-13.313 0-25.75 2.254-36.973 6.7-11.258 4.457-21.004 10.578-28.969 18.199-7.609 7.281-14.39 16.12-20.156 26.273-5.558 9.785-10.058 19.992-13.371 30.34-3.2 10.004-5.875 20.945-7.953 32.524-2.063 11.476-3.457 22.363-4.149 32.363C.343 403.492 0 413.668 0 423.949c0 26.727 8.496 48.363 25.25 64.32C41.797 504.017 63.688 512 90.316 512h246.532c26.62 0 48.511-7.984 65.062-23.73 16.758-15.946 25.254-37.59 25.254-64.325-.004-10.316-.351-20.492-1.035-30.242zm-44.906 72.828c-10.934 10.406-25.45 15.465-44.38 15.465H90.317c-18.933 0-33.449-5.059-44.379-15.46-10.722-10.208-15.933-24.141-15.933-42.587 0-9.594.316-19.066.95-28.16.616-8.922 1.878-18.723 3.75-29.137 1.847-10.285 4.198-19.937 6.995-28.675 2.684-8.38 6.344-16.676 10.883-24.668 4.332-7.618 9.316-14.153 14.816-19.418 5.145-4.926 11.63-8.957 19.27-11.98 7.066-2.798 15.008-4.329 23.629-4.56 1.05.56 2.922 1.626 5.953 3.602 6.168 4.02 13.277 8.606 21.137 13.625 8.86 5.649 20.273 10.75 33.91 15.152 13.941 4.508 28.16 6.797 42.273 6.797 14.114 0 28.336-2.289 42.27-6.793 13.648-4.41 25.058-9.507 33.93-15.164 8.043-5.14 14.953-9.593 21.12-13.617 3.032-1.973 4.903-3.043 5.954-3.601 8.625.23 16.566 1.761 23.636 4.558 7.637 3.024 14.122 7.059 19.266 11.98 5.5 5.262 10.484 11.798 14.816 19.423 4.543 7.988 8.208 16.289 10.887 24.66 2.801 8.75 5.156 18.398 7 28.675 1.867 10.434 3.133 20.239 3.75 29.145v.008c.637 9.058.957 18.527.961 28.148-.004 18.45-5.215 32.38-15.937 42.582zm0 0"
                                                                                                    fill="#1c43fe"
                                                                                                    opacity="1"
                                                                                                    data-original="#000000"
                                                                                                    class=""></path>
                                                                                            </g>
                                                                                        </svg>
                                                                                        <a
                                                                                            href="https://olan-moodle.hibootstrap.com/user/view.php?id=2&amp;course=1">Jeku
                                                                                            Smit</a> </li>
                                                                                    <li>
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path
                                                                                                d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                                stroke="#1C43FE"
                                                                                                stroke-width="1.5" />
                                                                                            <path opacity="0.5"
                                                                                                d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                                stroke="#1C43FE"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round" />
                                                                                            <path
                                                                                                d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 17ZM8 13C8 13.2652 7.89464 13.5196 7.70711 13.7071C7.51957 13.8946 7.26522 14 7 14C6.73478 14 6.48043 13.8946 6.29289 13.7071C6.10536 13.5196 6 13.2652 6 13C6 12.7348 6.10536 12.4804 6.29289 12.2929C6.48043 12.1054 6.73478 12 7 12C7.26522 12 7.51957 12.1054 7.70711 12.2929C7.89464 12.4804 8 12.7348 8 13Z"
                                                                                                fill="#1C43FE" />
                                                                                        </svg>
                                                                                        <span>Tuesday, 9 September 2025,
                                                                                            3:09 PM</span>
                                                                                    </li>
                                                                                    <li>
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                                stroke="#1C43FE"
                                                                                                stroke-width="1.5" />
                                                                                            <path d="M12 8V12L14.5 14.5"
                                                                                                stroke="#1C43FE"
                                                                                                stroke-width="1.5"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" />
                                                                                        </svg>
                                                                                        <span>2 min read</span>
                                                                                    </li>
                                                                                </ul>

                                                                            </div>
                                                                            <div class="ett-blog-content items">
                                                                                <div class="no-overflow">
                                                                                    <div class="item">
                                                                                        <p>Online learning offers
                                                                                            flexibility, access to
                                                                                            world-class educators, and
                                                                                            the ability to learn at your
                                                                                            own pace — but staying
                                                                                            motivated can be a real
                                                                                            challenge. Whether you’re
                                                                                            balancing a job, school, or
                                                                                            parenting duties, it's easy
                                                                                            to feel overwhelmed or
                                                                                            distracted.</p>
                                                                                        <p>Here are practical strategies
                                                                                            to help you stay focused,
                                                                                            consistent, and inspired as
                                                                                            an online learner.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>1. Set Clear Goals</h3>
                                                                                        <p>Break your long-term
                                                                                            objective into small,
                                                                                            manageable goals. Instead of
                                                                                            saying “I want to learn
                                                                                            Python,” aim for “I’ll
                                                                                            complete Module 1 by
                                                                                            Friday.” Clear goals help
                                                                                            track progress and keep your
                                                                                            learning purposeful.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>2. Create a Consistent
                                                                                            Learning Schedule</h3>
                                                                                        <p>Treat your course like a real
                                                                                            classroom. Designate
                                                                                            specific days and times to
                                                                                            study and block distractions
                                                                                            during that time. A routine
                                                                                            builds discipline and builds
                                                                                            momentum over time.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>3. Choose the Right
                                                                                            Environment</h3>
                                                                                        <p>Your study space should be
                                                                                            quiet, clutter-free, and
                                                                                            dedicated to learning.
                                                                                            Whether it’s a cozy corner
                                                                                            at home or a local library,
                                                                                            the right environment makes
                                                                                            it easier to focus.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>4. Engage with the Learning
                                                                                            Community</h3>
                                                                                        <p>Join discussion forums,
                                                                                            attend live sessions, or
                                                                                            comment on lessons.
                                                                                            Interaction boosts
                                                                                            accountability and makes
                                                                                            learning feel more social —
                                                                                            especially helpful if you're
                                                                                            learning solo.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>5. Celebrate Small Wins</h3>
                                                                                        <p>Finished a module? Solved a
                                                                                            tricky problem? Celebrate
                                                                                            it! Rewarding yourself after
                                                                                            hitting a milestone
                                                                                            reinforces motivation and
                                                                                            encourages consistency.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>6. Use the Tools Available
                                                                                        </h3>
                                                                                        <p>Olan provides progress
                                                                                            tracking, reminders, notes,
                                                                                            and community features.
                                                                                            Leverage these tools to stay
                                                                                            organized and feel a sense
                                                                                            of achievement as you move
                                                                                            forward.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>7. Don't Forget Self-Care
                                                                                        </h3>
                                                                                        <p>Burnout kills motivation.
                                                                                            Take breaks, stay hydrated,
                                                                                            and get enough sleep. A
                                                                                            healthy mind learns better
                                                                                            and faster.</p>
                                                                                    </div>
                                                                                    <div class="item">
                                                                                        <h3>Final Thoughts</h3>
                                                                                        <p>Staying motivated in an
                                                                                            online learning environment
                                                                                            isn’t always easy, but with
                                                                                            the right mindset and
                                                                                            structure, it’s completely
                                                                                            achievable. Keep your goals
                                                                                            in sight, engage with
                                                                                            others, and remember —
                                                                                            progress beats perfection.
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="display:none" id="cmt-tmpl">
                                                                                    <div class="comment-message">
                                                                                        <div
                                                                                            class="comment-message-meta me-3">
                                                                                            <span
                                                                                                class="picture">___picture___</span><span
                                                                                                class="user">___name___</span>
                                                                                            - <span
                                                                                                class="time">___time___</span>
                                                                                        </div>
                                                                                        <div class="text">___content___
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mdl-left"><a
                                                                                        class="showcommentsnonjs"
                                                                                        href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=9&amp;nonjscomment=1&amp;comment_itemid=9&amp;comment_context=5&amp;comment_component=blog&amp;comment_area=format_blog">Show
                                                                                        comments</a>
                                                                                    <div id="comment-ctrl-698b0fa49ed17"
                                                                                        class="comment-ctrl">
                                                                                        <ul id="comment-list-698b0fa49ed17"
                                                                                            class="comment-list comments-loaded">
                                                                                            <li class="first"></li>
                                                                                        </ul>
                                                                                        <div id="comment-pagination-698b0fa49ed17"
                                                                                            class="comment-pagination">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4 col-md-12">
                                                                        <div class="widget-area">
                                                                            <div class="widget widget_search">
                                                                                <h3 class="widget-title">Search</h3>
                                                                                <form class="search-form"
                                                                                    action="https://olan-moodle.hibootstrap.com/blog/index.php">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="search"
                                                                                        placeholder="Search your keyword">
                                                                                    <button type="submit">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <mask id="mask0_8085_12410"
                                                                                                style="mask-type:luminance"
                                                                                                maskUnits="userSpaceOnUse"
                                                                                                x="1" y="1" width="22"
                                                                                                height="22">
                                                                                                <path
                                                                                                    d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
                                                                                                    stroke="white"
                                                                                                    stroke-width="1.5" />
                                                                                                <path opacity="0.5"
                                                                                                    d="M20 20L22 22"
                                                                                                    stroke="white"
                                                                                                    stroke-width="1.5"
                                                                                                    stroke-linecap="round" />
                                                                                            </mask>
                                                                                            <g
                                                                                                mask="url(#mask0_8085_12410)">
                                                                                                <path
                                                                                                    d="M0 0H24V24H0V0Z"
                                                                                                    fill="#131F34" />
                                                                                            </g>
                                                                                        </svg>
                                                                                    </button>
                                                                                </form>
                                                                            </div>

                                                                            <div class="widget widget_posts_thumb">
                                                                                <h3 class="widget-title">Popular Posts
                                                                                </h3>
                                                                                <article class="item">
                                                                                    <div class="info">
                                                                                        <h4 class="title usmall">
                                                                                            <a
                                                                                                href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=1">Real
                                                                                                Stories from Olan
                                                                                                Students</a>
                                                                                        </h4>
                                                                                        <span><i
                                                                                                class="ri-calendar-line"></i>Tuesday,
                                                                                            9 September 2025, 3:13
                                                                                            PM</span>
                                                                                    </div>
                                                                                    <div class="info">
                                                                                        <h4 class="title usmall">
                                                                                            <a
                                                                                                href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=2">How
                                                                                                to Stay Motivated While
                                                                                                Learning Online</a>
                                                                                        </h4>
                                                                                        <span><i
                                                                                                class="ri-calendar-line"></i>Tuesday,
                                                                                            9 September 2025, 3:13
                                                                                            PM</span>
                                                                                    </div>
                                                                                    <div class="info">
                                                                                        <h4 class="title usmall">
                                                                                            <a
                                                                                                href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=16">How
                                                                                                to Build a Learning
                                                                                                Routine That Actually
                                                                                                Sticks</a>
                                                                                        </h4>
                                                                                        <span><i
                                                                                                class="ri-calendar-line"></i>Tuesday,
                                                                                            9 September 2025, 3:13
                                                                                            PM</span>
                                                                                    </div>
                                                                                    <div class="info">
                                                                                        <h4 class="title usmall">
                                                                                            <a
                                                                                                href="https://olan-moodle.hibootstrap.com/blog/index.php?entryid=15">Best
                                                                                                Certifications That Can
                                                                                                Boost Your Career in
                                                                                                2025</a>
                                                                                        </h4>
                                                                                        <span><i
                                                                                                class="ri-calendar-line"></i>Tuesday,
                                                                                            9 September 2025, 3:13
                                                                                            PM</span>
                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br />&nbsp;&nbsp;<br />


                                                    </div>
                                                </div>



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



                <script>
                    //<![CDATA[
                    var require = {
                        baseUrl: 'https://olan-moodle.hibootstrap.com/lib/requirejs.php/1757783192/',
                        // We only support AMD modules with an explicit define() statement.
                        enforceDefine: true,
                        skipDataMain: true,
                        waitSeconds: 0,

                        paths: {
                            jquery: 'https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/jquery/jquery-3.7.1.min',
                            jqueryui: 'https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/jquery/ui-1.14.1/jquery-ui.min',
                            jqueryprivate: 'https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/requirejs/jquery-private'
                        },

                        // Custom jquery config map.
                        map: {
                            // '*' means all modules will get 'jqueryprivate'
                            // for their 'jquery' dependency.
                            '*': {
                                jquery: 'jqueryprivate'
                            },

                            // 'jquery-private' wants the real jQuery module
                            // though. If this line was not here, there would
                            // be an unresolvable cyclic dependency.
                            jqueryprivate: {
                                jquery: 'jquery'
                            }
                        }
                    };

                    //]]>
                </script>
                <script
                    src="https://olan-moodle.hibootstrap.com/lib/javascript.php/1757783192/lib/requirejs/require.min.js">
                </script>
               
            </div>
        </div>

@endsection