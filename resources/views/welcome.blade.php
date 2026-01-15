<!DOCTYPE html>
<html dir="ltr" lang="en" xml:lang="en" class="yui3-js-enabled" style="scroll-behavior: smooth;">

<head>
    <title>Olan: Online Training | Olan</title>
    <link rel="shortcut icon" href="#">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="moodle, Olan: Online Training | Olan">
    <link rel="stylesheet" type="text/css" href="landing/css/style.css">
    <link rel="stylesheet" type="text/css" href="landing/css/simple-min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style class="fslightbox-styles">
        .fslightbox-absoluted {
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-fade-in {
            animation: fslightbox-fade-in .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out {
            animation: fslightbox-fade-out .3s ease
        }

        .fslightbox-fade-in-strong {
            animation: fslightbox-fade-in-strong .3s cubic-bezier(0, 0, .7, 1)
        }

        .fslightbox-fade-out-strong {
            animation: fslightbox-fade-out-strong .3s ease
        }

        @keyframes fslightbox-fade-in {
            from {
                opacity: .65
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out {
            from {
                opacity: .35
            }

            to {
                opacity: 0
            }
        }

        @keyframes fslightbox-fade-in-strong {
            from {
                opacity: .3
            }

            to {
                opacity: 1
            }
        }

        @keyframes fslightbox-fade-out-strong {
            from {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .fslightbox-cursor-grabbing {
            cursor: grabbing
        }

        .fslightbox-full-dimension {
            width: 100%;
            height: 100%
        }

        .fslightbox-open {
            overflow: hidden;
            height: 100%
        }

        .fslightbox-flex-centered {
            display: flex;
            justify-content: center;
            align-items: center
        }

        .fslightbox-opacity-0 {
            opacity: 0 !important
        }

        .fslightbox-opacity-1 {
            opacity: 1 !important
        }

        .fslightbox-scrollbarfix {
            padding-right: 17px
        }

        .fslightbox-transform-transition {
            transition: transform .3s
        }

        .fslightbox-container {
            font-family: Arial, sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            background: linear-gradient(rgba(30, 30, 30, .9), #000 1810%);
            touch-action: pinch-zoom;
            z-index: 1000000000;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent
        }

        .fslightbox-container * {
            box-sizing: border-box
        }

        .fslightbox-svg-path {
            transition: fill .15s ease;
            fill: #ddd
        }

        .fslightbox-nav {
            height: 45px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0
        }

        .fslightbox-slide-number-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 100%;
            font-size: 15px;
            color: #d7d7d7;
            z-index: 0;
            max-width: 55px;
            text-align: left
        }

        .fslightbox-slide-number-container .fslightbox-flex-centered {
            height: 100%
        }

        .fslightbox-slash {
            display: block;
            margin: 0 5px;
            width: 1px;
            height: 12px;
            transform: rotate(15deg);
            background: #fff
        }

        .fslightbox-toolbar {
            position: absolute;
            z-index: 3;
            right: 0;
            top: 0;
            height: 100%;
            display: flex;
            background: rgba(35, 35, 35, .65)
        }

        .fslightbox-toolbar-button {
            height: 100%;
            width: 45px;
            cursor: pointer
        }

        .fslightbox-toolbar-button:hover .fslightbox-svg-path {
            fill: #fff
        }

        .fslightbox-slide-btn-container {
            display: flex;
            align-items: center;
            padding: 12px 12px 12px 6px;
            position: absolute;
            top: 50%;
            cursor: pointer;
            z-index: 3;
            transform: translateY(-50%)
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container {
                padding: 22px 22px 22px 6px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container {
                padding: 30px 30px 30px 6px
            }
        }

        .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
            fill: #f1f1f1
        }

        .fslightbox-slide-btn {
            padding: 9px;
            font-size: 26px;
            background: rgba(35, 35, 35, .65)
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn {
                padding: 10px
            }
        }

        @media (min-width:1600px) {
            .fslightbox-slide-btn {
                padding: 11px
            }
        }

        .fslightbox-slide-btn-container-previous {
            left: 0
        }

        @media (max-width:475.99px) {
            .fslightbox-slide-btn-container-previous {
                padding-left: 3px
            }
        }

        .fslightbox-slide-btn-container-next {
            right: 0;
            padding-left: 12px;
            padding-right: 3px
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 22px
            }
        }

        @media (min-width:768px) {
            .fslightbox-slide-btn-container-next {
                padding-left: 30px
            }
        }

        @media (min-width:476px) {
            .fslightbox-slide-btn-container-next {
                padding-right: 6px
            }
        }

        .fslightbox-down-event-detector {
            position: absolute;
            z-index: 1
        }

        .fslightbox-slide-swiping-hoverer {
            z-index: 4
        }

        .fslightbox-invalid-file-wrapper {
            font-size: 22px;
            color: #eaebeb;
            margin: auto
        }

        .fslightbox-video {
            object-fit: cover
        }

        .fslightbox-youtube-iframe {
            border: 0
        }

        .fslightboxl {
            display: block;
            margin: auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 67px;
            height: 67px
        }

        .fslightboxl div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 54px;
            height: 54px;
            margin: 6px;
            border: 5px solid;
            border-color: #999 transparent transparent transparent;
            border-radius: 50%;
            animation: fslightboxl 1.2s cubic-bezier(.5, 0, .5, 1) infinite
        }

        .fslightboxl div:nth-child(1) {
            animation-delay: -.45s
        }

        .fslightboxl div:nth-child(2) {
            animation-delay: -.3s
        }

        .fslightboxl div:nth-child(3) {
            animation-delay: -.15s
        }

        @keyframes fslightboxl {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fslightbox-source {
            position: relative;
            z-index: 2;
            opacity: 0
        }
    </style>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="core/first"
        src="landing/first.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jqueryprivate"
        src="landing/private.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery"
        src="landing/jquery-3.7.1.min.js"></script>
</head>

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
        <div class="navbar-area navbar navbar-expand-lg bg-white sticky" id="navbar">
            <div class="   container-fluid">
                <a class="navbar-brand" href="/">
                    <img class="main-logo"
                        src="/pluginfile.php/1/theme_olan/main_logo/1757783192/olan-main-logo.svg"
                        alt="Olan">

                </a>

                <div class="category-menu">
                    <span class="category-menu-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <g clip-path="url(#clip0_7904_1954)">
                                <path
                                    d="M18.6157 2.97314H6.81885C5.84932 2.97314 5.06104 3.76182 5.06104 4.73096C5.06104 5.70049 5.84932 6.48877 6.81885 6.48877H18.6157C19.5849 6.48877 20.3735 5.70049 20.3735 4.73096C20.3735 3.76182 19.5849 2.97314 18.6157 2.97314Z"
                                    fill="#63667D"></path>
                                <path
                                    d="M18.6157 8.83252H6.81885C5.84932 8.83252 5.06104 9.62119 5.06104 10.5903C5.06104 11.5599 5.84932 12.3481 6.81885 12.3481H18.6157C19.5849 12.3481 20.3735 11.5599 20.3735 10.5903C20.3735 9.62119 19.5849 8.83252 18.6157 8.83252Z"
                                    fill="#63667D"></path>
                                <path
                                    d="M18.6157 14.6919H6.81885C5.84932 14.6919 5.06104 15.4806 5.06104 16.4497C5.06104 17.4192 5.84932 18.2075 6.81885 18.2075H18.6157C19.5849 18.2075 20.3735 17.4192 20.3735 16.4497C20.3735 15.4806 19.5849 14.6919 18.6157 14.6919Z"
                                    fill="#63667D"></path>
                                <path
                                    d="M2.13135 2.97314C1.16182 2.97314 0.373535 3.76182 0.373535 4.73096C0.373535 5.70049 1.16182 6.48877 2.13135 6.48877C3.10049 6.48877 3.88916 5.70049 3.88916 4.73096C3.88916 3.76182 3.10049 2.97314 2.13135 2.97314Z"
                                    fill="#63667D"></path>
                                <path
                                    d="M2.13135 8.83252C1.16182 8.83252 0.373535 9.62119 0.373535 10.5903C0.373535 11.5599 1.16182 12.3481 2.13135 12.3481C3.10049 12.3481 3.88916 11.5599 3.88916 10.5903C3.88916 9.62119 3.10049 8.83252 2.13135 8.83252Z"
                                    fill="#63667D"></path>
                                <path
                                    d="M2.13135 14.6919C1.16182 14.6919 0.373535 15.4806 0.373535 16.4497C0.373535 17.4192 1.16182 18.2075 2.13135 18.2075C3.10049 18.2075 3.88916 17.4192 3.88916 16.4497C3.88916 15.4806 3.10049 14.6919 2.13135 14.6919Z"
                                    fill="#63667D"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7904_1954">
                                    <rect width="20" height="20" fill="white" transform="translate(0.373535 0.590332)">
                                    </rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Category
                    </span>
                    <div class="category-dropdown-wrap">
                        <div class="ul category-dropdown">
                            <div class="li cat-item">
                                <a href="#">Data Science <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=23"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/286/course/overviewfiles/courses17.jpg"
                                                    alt="Mastering Excel for Adv Business  ">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Mastering Excel for Adv Business </h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=22"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/284/course/overviewfiles/courses15.jpg"
                                                    alt="Data Analysis with Pandas &amp; NumPy">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Data Analysis with Pandas &amp; NumPy</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=21"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/283/course/overviewfiles/courses16.jpg"
                                                    alt="Ntro To Machine Learning (Scikit-Learn)">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Ntro To Machine Learning (Scikit-Learn)</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=20"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/282/course/overviewfiles/courses19.jpg"
                                                    alt="Project Management Fundamentals (Agile)">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Project Management Fundamentals (Agile)</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=16"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/97/course/overviewfiles/courses20.jpg"
                                                    alt="Build a Data Science Website with PHP">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Build a Data Science Website with PHP</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=15"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/96/course/overviewfiles/courses14.jpg"
                                                    alt="Olan Mastering in Data Science ">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Olan Mastering in Data Science </h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=14"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/95/course/overviewfiles/courses22.jpg"
                                                    alt="Data Visualization with Tableau">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Data Visualization with Tableau</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=5"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/81/course/overviewfiles/courses4.jpg"
                                                    alt="Numpy Essentials for Data Science">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Numpy Essentials for Data Science</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Tech &amp; Development <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=6"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/84/course/overviewfiles/courses3.jpg"
                                                    alt="Python Projects for Beginners">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Python Projects for Beginners</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=2"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/24/course/overviewfiles/courses21.jpg"
                                                    alt="Ethical Hacking &amp; Penetration Testing">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Ethical Hacking &amp; Penetration Testing</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Health &amp; Wellness <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=26"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/299/course/overviewfiles/courses36.jpg"
                                                    alt="Foundations of Health &amp; Wellness for Everyday Living">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Foundations of Health &amp; Wellness for Everyday Living</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Academic Tutoring <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=27"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/301/course/overviewfiles/courses35.jpg"
                                                    alt="Academic Tutoring Mastery: Helping Students Succeed">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Academic Tutoring Mastery: Helping Students Succeed</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Language Learning <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=28"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/303/course/overviewfiles/courses34.jpg"
                                                    alt="Fluency Fast-Track: Master a New Language with Confidence">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Fluency Fast-Track: Master a New Language with Confidence</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Personal Growth <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=10"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/90/course/overviewfiles/courses13.jpg"
                                                    alt="Business Writing Essentials">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Business Writing Essentials</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Marketing &amp; SEO <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=13"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/94/course/overviewfiles/courses12.jpg"
                                                    alt="Advance Marketing AI World">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Advance Marketing AI World</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=9"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/89/course/overviewfiles/courses2.gif"
                                                    alt="Data Visualization with Python">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Data Visualization with Python</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Science &amp; Research <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=8"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/87/course/overviewfiles/courses3.jpg"
                                                    alt="Python Projects for Beginners">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Python Projects for Beginners</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Design &amp; Creativity <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=12"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/92/course/overviewfiles/courses6.jpg"
                                                    alt="Design Marketing Mastery">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Design Marketing Mastery</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=11"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/91/course/overviewfiles/courses7.jpg"
                                                    alt="UI/UX Design Fundamentals">
                                            </div>
                                            <div class="course-caption">
                                                <h3>UI/UX Design Fundamentals</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Business &amp; Marketing <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=29"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/305/course/overviewfiles/courses33.jpg"
                                                    alt="Smart Marketing Strategies: Grow and Scale Your Business">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Smart Marketing Strategies: Grow and Scale Your Business</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="li cat-item">
                                <a href="#">Graphic Design <i class="ri-arrow-right-s-line"></i></a>
                                <div class="ul children course-list">
                                    <div class="li course-item">
                                        <a href="/course/view.php?id=30"
                                            class="course-permalink">
                                            <div class="course-thumbnail">
                                                <img src="/pluginfile.php/307/course/overviewfiles/courses32.jpg"
                                                    alt="Creative Design Fundamentals: From Beginner to Pro">
                                            </div>
                                            <div class="course-caption">
                                                <h3>Creative Design Fundamentals: From Beginner to Pro</h3>
                                                <div class="price">
                                                    <span class="new-price">Enroll </span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <a class="navbar-toggler toggle-btn d-lg-none" data-bs-toggle="offcanvas" href="#navbarOffcanvas"
                    role="button" aria-bs-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <!-- custom_menu -->
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0cd3694fe06abbba62"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0cd3694fe06abbba62">
                                Home
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0cd3694fe06abbba62"
                                aria-labelledby="drop-down-694fe06ac0cd3694fe06abbba62">
                                <a class="dropdown-item" role="menuitem"
                                    href="/?redirect=0"> eLearning School</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=16"> Distance
                                    Learning</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=17"> Online
                                    Training</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0d4e694fe06abbba63"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0d4e694fe06abbba63">
                                About Us
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0d4e694fe06abbba63"
                                aria-labelledby="drop-down-694fe06ac0d4e694fe06abbba63">
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=21"> About Us 01</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=22"> About Us 02</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=23"> About Us 03</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=25"> Become An
                                    Instructor</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0dcf694fe06abbba64"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0dcf694fe06abbba64">
                                Pages
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0dcf694fe06abbba64"
                                aria-labelledby="drop-down-694fe06ac0dcf694fe06abbba64">
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=26"> Pricing Plan</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=24"> Testimonials</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=35"> Success
                                    Story</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=36"> Membership
                                    Levels</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=33"> Events</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=34"> Event
                                    Details</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=32"> FAQ's</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=37"> Purchase
                                    Guide</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=38"> Privacy
                                    Policy</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=39"> Terms &amp;
                                    Conditions</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0e33694fe06abbba65"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0e33694fe06abbba65">
                                Instructors
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0e33694fe06abbba65"
                                aria-labelledby="drop-down-694fe06ac0e33694fe06abbba65">
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=30"> Instructors
                                    Filtering</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=27"> Instructors
                                    01</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=28"> Instructors
                                    02</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=29"> Instructors
                                    03</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/mod/page/view.php?id=31"> Instructor
                                    Details</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0e89694fe06abbba66"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0e89694fe06abbba66">
                                Courses
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0e89694fe06abbba66"
                                aria-labelledby="drop-down-694fe06ac0e89694fe06abbba66">
                                <a class="dropdown-item" role="menuitem"
                                    href="/course/index.php?categoryid=2">
                                    Courses</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/course/view.php?id=12"> Single Courses</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/course/"> Categories</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/login/index.php"> Login</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/login/signup.php"> Register</a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac0f04694fe06abbba67"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                                aria-controls="drop-down-menu-694fe06ac0f04694fe06abbba67">
                                Blog
                            </a>
                            <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac0f04694fe06abbba67"
                                aria-labelledby="drop-down-694fe06ac0f04694fe06abbba67">
                                <a class="dropdown-item" role="menuitem"
                                    href="/blog/"> Blog 01</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/blog/?column=3"> Blog 02</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/blog/?column=2"> Blog 03</a>
                                <a class="dropdown-item" role="menuitem"
                                    href="/blog/index.php?entryid=9"> Blog
                                    Details</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="/mod/page/view.php?id=40">Contact Us</a>
                        </li>
                    </ul>


                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">

                            <form class="search-form" method="get"
                                action="/course/search.php">
                                <input type="text" class="form-control" name="q" placeholder="Search for anything">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <mask id="mask0_7812_541" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                            x="1" y="1" width="22" height="22">
                                            <path
                                                d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"
                                                stroke="white" stroke-width="1.5"></path>
                                            <path opacity="0.5" d="M20 20L22 22" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round"></path>
                                        </mask>
                                        <g mask="url(#mask0_7812_541)">
                                            <path d="M0 0H24V24H0V0Z" fill="#131F34"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>

                        </div>

                        <div class="option-item">

                            <a href="{{route('tenant_create')}}" class="default-btn">
                                Login/Signup
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M2.00098 11.999H16.001M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path opacity="0.5"
                                        d="M9.00195 7C9.01395 4.825 9.11095 3.647 9.87895 2.879C10.758 2 12.172 2 15 2H16C18.829 2 20.243 2 21.122 2.879C22 3.757 22 5.172 22 8V16C22 18.828 22 20.243 21.122 21.121C20.242 22 18.829 22 16 22H15C12.172 22 10.758 22 9.87895 21.121C9.11095 20.353 9.01395 19.175 9.00195 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Mobile Navbar Area -->
        <div class="sidebar-menu-area offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a class="logo d-inline-block" href="/">
                    <img src="/pluginfile.php/1/theme_olan/mobile_logo/1757783192/olan-main-logo.svg"
                        alt="Olan">

                </a>
                <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="close-btn">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="mobile-menu">
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac13f6694fe06abbba68"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac13f6694fe06abbba68">
                            Home
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac13f6694fe06abbba68"
                            aria-labelledby="drop-down-694fe06ac13f6694fe06abbba68">
                            <a class="dropdown-item" role="menuitem"
                                href="/?redirect=0"> eLearning School</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=16"> Distance
                                Learning</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=17"> Online Training</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac1482694fe06abbba69"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac1482694fe06abbba69">
                            About Us
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac1482694fe06abbba69"
                            aria-labelledby="drop-down-694fe06ac1482694fe06abbba69">
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=21"> About Us 01</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=22"> About Us 02</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=23"> About Us 03</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=25"> Become An
                                Instructor</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac15b0694fe06abbba610"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac15b0694fe06abbba610">
                            Pages
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac15b0694fe06abbba610"
                            aria-labelledby="drop-down-694fe06ac15b0694fe06abbba610">
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=26"> Pricing Plan</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=24"> Testimonials</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=35"> Success Story</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=36"> Membership
                                Levels</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=33"> Events</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=34"> Event Details</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=32"> FAQ's</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=37"> Purchase Guide</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=38"> Privacy Policy</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=39"> Terms &amp;
                                Conditions</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac16d3694fe06abbba611"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac16d3694fe06abbba611">
                            Instructors
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac16d3694fe06abbba611"
                            aria-labelledby="drop-down-694fe06ac16d3694fe06abbba611">
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=30"> Instructors
                                Filtering</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=27"> Instructors 01</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=28"> Instructors 02</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=29"> Instructors 03</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/mod/page/view.php?id=31"> Instructor
                                Details</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac1757694fe06abbba612"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac1757694fe06abbba612">
                            Courses
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac1757694fe06abbba612"
                            aria-labelledby="drop-down-694fe06ac1757694fe06abbba612">
                            <a class="dropdown-item" role="menuitem"
                                href="/course/index.php?categoryid=2"> Courses</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/course/view.php?id=12"> Single Courses</a>
                            <a class="dropdown-item" role="menuitem" href="/course/">
                                Categories</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/login/index.php"> Login</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/login/signup.php"> Register</a>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" id="drop-down-694fe06ac17d1694fe06abbba613"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"
                            aria-controls="drop-down-menu-694fe06ac17d1694fe06abbba613">
                            Blog
                        </a>
                        <div class="dropdown-menu" role="menu" id="drop-down-menu-694fe06ac17d1694fe06abbba613"
                            aria-labelledby="drop-down-694fe06ac17d1694fe06abbba613">
                            <a class="dropdown-item" role="menuitem" href="/blog/">
                                Blog 01</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/blog/?column=3"> Blog 02</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/blog/?column=2"> Blog 03</a>
                            <a class="dropdown-item" role="menuitem"
                                href="/blog/index.php?entryid=9"> Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mod/page/view.php?id=40">Contact
                            Us</a>
                    </li>
                </ul>

                <div class="others-options">
                    <div class="option-item">

                        <a href="/login/index.php" class="btn btn-primary">
                            Login/Signup
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>

                </div>


            </div>
        </div>
        <!-- End Mobile Navbar Area -->


        <div class="drawer drawer-left drawer-primary d-print-none" data-region="fixed-drawer"
            id="theme_boost-drawers-primary" data-preference="" data-state="show-drawer-primary" data-forceopen="0"
            data-close-on-resize="1" aria-hidden="true">
            <div class="drawerheader">
                <button class="btn btn-icon drawertoggle hidden" data-toggler="drawers" data-action="closedrawer"
                    data-target="theme_boost-drawers-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-aria-hidden-tab-index="" tabindex="-1" aria-label="Close drawer"
                    data-bs-original-title="Close drawer">
                    <i class="icon fa fa-xmark fa-fw " aria-hidden="true"></i>
                </button>
                <a href="/" title="Olan" data-region="site-home-link"
                    class="aabtn text-reset d-flex align-items-center py-1 h-100" data-aria-hidden-tab-index=""
                    tabindex="-1">
                    <span class="sitename" title="Olan">Olan</span>
                </a>

                <div class="drawerheadercontent hidden">

                </div>
            </div>
            <div class="drawercontent drag-container" data-usertour="scroller">
                <div class="list-group">
                    <a href="/" class="list-group-item list-group-item-action  "
                        data-aria-hidden-tab-index="" tabindex="-1">
                        Home
                    </a>
                    <a id="drop-down-1" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-1" aria-expanded="true"
                        aria-controls="drop-down-menu-1" data-aria-hidden-tab-index="" tabindex="-1">
                        Home
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse show list-group-item p-0 border-0" role="menu" id="drop-down-menu-1"
                        aria-labelledby="drop-down-1">
                        <a href="/?redirect=0"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> eLearning School</a>
                        <a href="/mod/page/view.php?id=16"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Distance Learning</a>
                        <a href="/mod/page/view.php?id=17"
                            class="ps-5 active list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Online Training</a>
                    </div>
                    <a id="drop-down-6" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-6" aria-expanded="false"
                        aria-controls="drop-down-menu-6" data-aria-hidden-tab-index="" tabindex="-1">
                        About Us
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-6"
                        aria-labelledby="drop-down-6">
                        <a href="/mod/page/view.php?id=21"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> About Us 01</a>
                        <a href="/mod/page/view.php?id=22"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> About Us 02</a>
                        <a href="/mod/page/view.php?id=23"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> About Us 03</a>
                        <a href="/mod/page/view.php?id=25"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Become An Instructor</a>
                    </div>
                    <a id="drop-down-12" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-12" aria-expanded="false"
                        aria-controls="drop-down-menu-12" data-aria-hidden-tab-index="" tabindex="-1">
                        Pages
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-12"
                        aria-labelledby="drop-down-12">
                        <a href="/mod/page/view.php?id=26"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Pricing Plan</a>
                        <a href="/mod/page/view.php?id=24"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Testimonials</a>
                        <a href="/mod/page/view.php?id=35"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Success Story</a>
                        <a href="/mod/page/view.php?id=36"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Membership Levels</a>
                        <a href="/mod/page/view.php?id=33"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Events</a>
                        <a href="/mod/page/view.php?id=34"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Event Details</a>
                        <a href="/mod/page/view.php?id=32"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> FAQ's</a>
                        <a href="/mod/page/view.php?id=37"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Purchase Guide</a>
                        <a href="/mod/page/view.php?id=38"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Privacy Policy</a>
                        <a href="/mod/page/view.php?id=39"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Terms &amp; Conditions</a>
                    </div>
                    <a id="drop-down-24" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-24" aria-expanded="false"
                        aria-controls="drop-down-menu-24" data-aria-hidden-tab-index="" tabindex="-1">
                        Instructors
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-24"
                        aria-labelledby="drop-down-24">
                        <a href="/mod/page/view.php?id=30"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Instructors Filtering</a>
                        <a href="/mod/page/view.php?id=27"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Instructors 01</a>
                        <a href="/mod/page/view.php?id=28"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Instructors 02</a>
                        <a href="/mod/page/view.php?id=29"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Instructors 03</a>
                        <a href="/mod/page/view.php?id=31"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Instructor Details</a>
                    </div>
                    <a id="drop-down-31" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-31" aria-expanded="false"
                        aria-controls="drop-down-menu-31" data-aria-hidden-tab-index="" tabindex="-1">
                        Courses
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-31"
                        aria-labelledby="drop-down-31">
                        <a href="/course/index.php?categoryid=2"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Courses</a>
                        <a href="/course/view.php?id=12"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Single Courses</a>
                        <a href="/course/"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Categories</a>
                        <a href="/login/index.php"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Login</a>
                        <a href="/login/signup.php"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Register</a>
                    </div>
                    <a id="drop-down-37" href="#"
                        class="list-group-item list-group-item-action icons-collapse-expand collapsed d-flex"
                        data-bs-toggle="collapse" data-bs-target="#drop-down-menu-37" aria-expanded="false"
                        aria-controls="drop-down-menu-37" data-aria-hidden-tab-index="" tabindex="-1">
                        Blog
                        <span class="ms-auto expanded-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-down fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Collapse
                            </span>
                        </span>
                        <span class="ms-auto collapsed-icon icon-no-margin mx-2">
                            <i class="icon fa fa-chevron-right fa-fw " aria-hidden="true"></i>
                            <span class="visually-hidden">
                                Expand
                            </span>
                        </span>
                    </a>
                    <div class="collapse list-group-item p-0 border-0" role="menu" id="drop-down-menu-37"
                        aria-labelledby="drop-down-37">
                        <a href="/blog/"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Blog 01</a>
                        <a href="/blog/?column=3"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Blog 02</a>
                        <a href="/blog/?column=2"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Blog 03</a>
                        <a href="#"
                            class="ps-5 bg-light list-group-item list-group-item-action" data-aria-hidden-tab-index=""
                            tabindex="-1"> Blog Details</a>
                    </div>
                    <a href="#"
                        class="list-group-item list-group-item-action  " data-aria-hidden-tab-index="" tabindex="-1">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>


        <div id="page" data-region="mainpage" data-usertour="scroller"
            class="olan-page-drawers drawers   drag-container">
            <div class=" drag-container" id="yui_3_18_1_1_1766842491326_16">
                <div class="drawer-toggles d-flex">
                </div>


                <div class="olan-fullwidth-top" aria-label="Blocks" id="yui_3_18_1_1_1766842491326_15">
                    <aside id="block-region-fullwidth-top" class="block-region" data-blockregion="fullwidth-top"
                        data-droptarget="1" aria-labelledby="fullwidth-top-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-top-block-region-heading">Blocks</h2><a href="#sb-1"
                            class="visually-hidden-focusable">Skip [Olan] Banner Three</a>

                        <section id="inst99" class=" block_olan_banner_three block  card mb-3" role="region"
                            data-block="olan_banner_three" data-instance-id="99" aria-labelledby="instance-99-header">

                            <div class="card-body p-3" id="yui_3_18_1_1_1766842491326_14">

                                <h3 id="instance-99-header" class="h5 card-title d-inline">[Olan] Banner Three</h3>


                                <div class="card-text content mt-3" id="yui_3_18_1_1_1766842491326_13">
                                    <div class="online-training-banner-area"
                                        style="background-image:url(/landing/images/rectangle-bg.jpg);"
                                        id="yui_3_18_1_1_1766842491326_12">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center g-4 align-items-center"
                                                data-cues="slideInUp" data-duration="1000" data-disabled="true">
                                                <div class="col-lg-3 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="online-training-banner-left-image"><img
                                                            src="landing/images/smile1.png"
                                                            alt="image"></div>
                                                </div>
                                                <div class="col-xl-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div
                                                        class="online-training-banner-content section-title-animation animation-style3">
                                                        <span class="sub"><img
                                                                src="landing/images/cape2.png"
                                                                alt="image">Level Up with Flexible Online
                                                            Training</span>
                                                        <h1 class="title-animation" style="perspective: 400px;">
                                                            <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="display:inline-block;">
                                                                Level
                                                                </div>
                                                                <div style="display:inline-block;">
                                                                 Up
                                                                </div>
                                                                <div style="display:inline-block;">
                                                                 With
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="split-line"
                                                                style="display: block; text-align: center; position: relative;">
                                                                <div style="display:inline-block;">
                                                                 Expert-Led
                                                                </div>
                                                                <span>
                                                                    <div style="display:inline-block;">
                                                                    Online 
                                                                    </div>
                                                                    <div style="display:inline-block;">
                                                                      Training
                                                                    </div> 
                                                                    <img
                                                                        src="landing/images/title-line.png"
                                                                        alt="image">
                                                                </span>
                                                            </div>
                                                        </h1>
                                                        <p>Flexible, career-focused courses designed to help individuals
                                                            and teams grow their skills anytime, anywhere.</p>
                                                        <ul class="banner-btn">
                                                            <li><a href="#"
                                                                    class="default-btn">Start Learning Now<svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="18"
                                                                        height="14" viewBox="0 0 18 14" fill="none">
                                                                        <path opacity="0.5"
                                                                            d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                                            fill="white" stroke="white"></path>
                                                                        <path d="M10.75 1L16.75 7L10.75 13"
                                                                            stroke="white" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"></path>
                                                                    </svg></a></li>
                                                            <li><a href="#"
                                                                    class="default-btn"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="15" viewBox="0 0 14 15" fill="none">
                                                                        <mask id="mask0_7904_1990"
                                                                            style="mask-type:luminance"
                                                                            maskUnits="userSpaceOnUse" x="0" y="0"
                                                                            width="14" height="15">
                                                                            <path
                                                                                d="M6.45017 12.9531C9.59829 12.9531 12.1503 10.401 12.1503 7.25291C12.1503 4.10479 9.59829 1.55273 6.45017 1.55273C3.30205 1.55273 0.75 4.10479 0.75 7.25291C0.75 10.401 3.30205 12.9531 6.45017 12.9531Z"
                                                                                stroke="#808080" stroke-width="1.5">
                                                                            </path>
                                                                            <path d="M10.6499 11.4526L12.75 13.5527"
                                                                                stroke="white" stroke-width="1.5"
                                                                                stroke-linecap="round"></path>
                                                                        </mask>
                                                                        <g mask="url(#mask0_7904_1990)">
                                                                            <path
                                                                                d="M-0.450195 0.352539H13.9502V14.753H-0.450195V0.352539Z"
                                                                                fill="#1C43FE"></path>
                                                                        </g>
                                                                    </svg>Browse Courses</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="online-training-banner-right-image">
                                                        <div class="wrap"><img
                                                                src="landing/images/smile2.jpg"
                                                                alt="image"></div>
                                                        <div class="wrap wrap2"><img
                                                                src="landing/images/smile3.jpg"
                                                                alt="image"></div>
                                                        <div class="fun">
                                                            <div class="image"><img
                                                                    src="landing/images/users.png"
                                                                    alt="image"></div>
                                                            <div class="content">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="counter">6</h3>
                                                                    <h3 class="sub">.</h3>
                                                                    <h3 class="counter">8</h3>
                                                                    <h3 class="sub">+</h3>
                                                                </div>
                                                                <p>Active Learners</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="online-training-banner-arrow"><a
                                                href="#"
                                                class="arrow-btn"><svg xmlns="http://www.w3.org/2000/svg" width="46"
                                                    height="46" viewBox="0 0 46 46" fill="none">
                                                    <path opacity="0.5"
                                                        d="M24.4375 7.6665C24.4375 7.28526 24.286 6.91962 24.0165 6.65004C23.7469 6.38045 23.3812 6.229 23 6.229C22.6188 6.229 22.2531 6.38045 21.9835 6.65004C21.714 6.91962 21.5625 7.28526 21.5625 7.6665H24.4375ZM21.5625 7.6665V38.3332H24.4375V7.6665H21.5625Z"
                                                        fill="#1C43FE"></path>
                                                    <path d="M34.5 26.833L23 38.333L11.5 26.833" stroke="#1C43FE"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg></a></div>
                                        <div class="online-training-banner-rectangle"><img
                                                src="landing/images/rectangle2.png"
                                                alt="image"></div>
                                    </div>
                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-1"></span><a href="#sb-2" class="visually-hidden-focusable">Skip [Olan] Funfacts
                            Three</a>

                        <section id="inst100" class=" block_olan_funfacts_three block  card mb-3" role="region"
                            data-block="olan_funfacts_three" data-instance-id="100"
                            aria-labelledby="instance-100-header">

                            <div class="card-body p-3">

                                <h3 id="instance-100-header" class="h5 card-title d-inline">[Olan] Funfacts Three</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-fun-area pt-140">
                                        <div class="container">
                                            <div class="ot-fun-inner">
                                                <div class="row justify-content-center g-5" data-cues="slideInUp"
                                                    data-duration="1000" data-disabled="true">
                                                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp"
                                                        data-duration="1000" data-show="true"
                                                        style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                        <div class="ot-fun-card">
                                                            <div class="icon"><img
                                                                    src="landing/images/fun1.svg"
                                                                    alt="image"></div>
                                                            <div class="content">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="counter">8000</h3>
                                                                    <h3 class="sub">+</h3>
                                                                </div>
                                                                <p>Courses Certified</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp"
                                                        data-duration="1000" data-show="true"
                                                        style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                                        <div class="ot-fun-card">
                                                            <div class="icon"><img
                                                                    src="landing/images/fun2.svg"
                                                                    alt="image"></div>
                                                            <div class="content">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="counter">5000</h3>
                                                                    <h3 class="sub">+</h3>
                                                                </div>
                                                                <p>Instructors Verified</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp"
                                                        data-duration="1000" data-show="true"
                                                        style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                                        <div class="ot-fun-card">
                                                            <div class="icon"><img
                                                                    src="landing/images/fun3.svg"
                                                                    alt="image"></div>
                                                            <div class="content">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="counter">500</h3>
                                                                    <h3 class="sub">+</h3>
                                                                </div>
                                                                <p>Companies Trained</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6" data-cue="slideInUp"
                                                        data-duration="1000" data-show="true"
                                                        style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                                        <div class="ot-fun-card">
                                                            <div class="icon"><img
                                                                    src="landing/images/fun4.svg"
                                                                    alt="image"></div>
                                                            <div class="content">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="counter">100</h3>
                                                                    <h3 class="sub">%</h3>
                                                                </div>
                                                                <p>Mobile Access</p>
                                                            </div>
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

                        <span id="sb-2"></span><a href="#sb-3" class="visually-hidden-focusable">Skip [Olan] About
                            One</a>

                        <section id="inst101" class=" block_olan_about block  card mb-3" role="region"
                            data-block="olan_about" data-instance-id="101" aria-labelledby="instance-101-header">

                            <div class="card-body p-3">

                                <h3 id="instance-101-header" class="h5 card-title d-inline">[Olan] About One</h3>


                                <div class="card-text content mt-3">
                                    <div class="education-about-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-delay="0"
                                                data-disabled="true">
                                                <div class="col-xl-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-delay="0" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="education-about-image">
                                                        <img src="landing/images/about2.jpg"
                                                            alt="image">

                                                        <div class="fun-wrap">
                                                            <div class="icon">
                                                                <img src="landing/images/about-icon2.svg"
                                                                    alt="image">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <h3 class="counter">60</h3>
                                                                <h3 class="sub">K+</h3>
                                                            </div>
                                                            <p>Active Learners</p>
                                                        </div>

                                                        <div class="fun-color-wrap">
                                                            <div class="icon">
                                                                <img src="landing/images/about-icon1.svg"
                                                                    alt="image">
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <h3 class="counter">4500</h3>
                                                                <h3 class="sub">+</h3>
                                                            </div>
                                                            <p>Expert Instructors</p>
                                                        </div>

                                                        <div class="shape1" data-speed="0.03" data-revert="true"
                                                            style="translate: none; rotate: none; scale: none; transform: translate(-6.335px, 57.355px);">
                                                            <img src="landing/images/about-shape1.png"
                                                                alt="image"></div>
                                                        <div class="shape2" data-speed="0.03" data-revert="true"
                                                            style="translate: none; rotate: none; scale: none; transform: translate(-6.335px, 57.355px);">
                                                            <img src="landing/images/about-shape2.png"
                                                                alt="image"></div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-delay="0" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div
                                                        class="education-about-content  section-title-animation animation-style1">
                                                        <span class="sub">About Olan</span>
                                                        <h2 class="title-animation" style="perspective: 400px;">
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <div style="display:inline-block;">
                                                                 Olan
                                                                </div>
                                                                <div style="display:inline-block;">
                                                                 Platform.
                                                                </div>
                                                                
                                                                <div style="display:inline-block;">
                                                                  Infinite
                                                                </div>
                                                            </div>
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <span>
                                                                    <div style="display:inline-block;">
                                                                      Learning
                                                                    </div>
                                                                    <div style="display:inline-block;">
                                                                     Possibilities.
                                                                    </div>
                                                                     
                                                                    <img
                                                                        src="landing/images/title-line.png"
                                                                        alt="image">
                                                                </span>
                                                            </div>
                                                        </h2>
                                                        <p></p>
                                                        <p>At Olan, we believe quality education should be accessible,
                                                            engaging, and empowering—for everyone, everywhere.</p>
                                                        <p></p>

                                                        <ul class="list" data-cues="fadeIn" data-duration="1000"
                                                            data-delay="0" data-stagger="120" data-disabled="true">
                                                            <li data-cue="fadeIn" data-duration="1000" data-delay="0"
                                                                data-show="true"
                                                                style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                                <div class="icon">
                                                                    <img src="landing/images/about-list-icon.svg"
                                                                        alt="image">
                                                                </div>
                                                                <div class="content">
                                                                    <h3>Learn from Anywhere</h3>
                                                                    <p>Access your courses anytime, on any device—at
                                                                        home, at work, or on the go.</p>
                                                                </div>
                                                            </li>
                                                            <li data-cue="fadeIn" data-duration="1000" data-delay="0"
                                                                data-show="true"
                                                                style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                                <div class="icon">
                                                                    <img src="landing/images/about-list-icon.svg"
                                                                        alt="image">
                                                                </div>
                                                                <div class="content">
                                                                    <h3>Teach with Confidence</h3>
                                                                    <p>All the tools you need to build, launch, and
                                                                        scale your courses—stress-free.</p>
                                                                </div>
                                                            </li>
                                                            <li data-cue="fadeIn" data-duration="1000" data-delay="0"
                                                                data-show="true"
                                                                style="animation-name: fadeIn; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                                <div class="icon">
                                                                    <img src="landing/images/about-list-icon.svg"
                                                                        alt="image">
                                                                </div>
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
                                                                        fill="white" stroke="white"></path>
                                                                    <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--/.row-->
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-3"></span><a href="#sb-4" class="visually-hidden-focusable">Skip [Olan] Funfacts
                            Four</a>

                        <section id="inst102" class=" block_olan_funfacts_four block  card mb-3" role="region"
                            data-block="olan_funfacts_four" data-instance-id="102"
                            aria-labelledby="instance-102-header">

                            <div class="card-body p-3">

                                <h3 id="instance-102-header" class="h5 card-title d-inline">[Olan] Funfacts Four</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-fun-box-area pb-140">
                                        <div class="container">
                                            <div class="row justify-content-center g-0" data-cues="slideInUp"
                                                data-duration="1000" data-disabled="true">
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-fun-box-item">
                                                        <div class="content">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <h3 class="counter">6</h3>
                                                                <h3 class="sub">.</h3>
                                                                <h3 class="counter">8</h3>
                                                                <h3 class="sub">M+</h3>
                                                            </div>
                                                            <p>ACTIVE LEARNERS</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-fun-box-item wrap2">
                                                        <div class="content">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <h3 class="counter">7</h3>
                                                                <h3 class="sub">.</h3>
                                                                <h3 class="counter">5</h3>
                                                                <h3 class="sub">K+</h3>
                                                            </div>
                                                            <p>COURSES AVAILABLE</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-fun-box-item wrap3">
                                                        <div class="content">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <h3 class="counter">120</h3>
                                                                <h3 class="sub">+</h3>
                                                            </div>
                                                            <p>COUNTRIES REACHED</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-fun-box-item wrap4">
                                                        <div class="content">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <h3 class="counter">4</h3>
                                                                <h3 class="sub">.</h3>
                                                                <h3 class="counter">9</h3>
                                                            </div>
                                                            <p>AVERAGE COURSE RATING</p>
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

                        <span id="sb-4"></span><a href="#sb-5" class="visually-hidden-focusable">Skip [Olan] Course Area
                            Two</a>

                        <section id="inst108" class=" block_olan_course_area_two block  card mb-3" role="region"
                            data-block="olan_course_area_two" data-instance-id="108"
                            aria-labelledby="instance-108-header">

                            <div class="card-body p-3">

                                <h3 id="instance-108-header" class="h5 card-title d-inline">[Olan] Course Area Two</h3>


                                <div class="card-text content mt-3">

                                    <div class="ot-courses-area pb-140 ">
                                        <div class="container">
                                            <div class="section-title " "="">
                    <span class=" sub">Featured Courses</span>
                                                <h2 class="title-animation">
                                                    Affordable Learning. Real-World Skills.<img
                                                        src="landing/images/title-line.png"
                                                        alt="Affordable Learning. Real-World Skills.">
                                                </h2>
                                                <p></p>
                                                <p>Explore high-quality, expert-led courses designed to help you grow
                                                    your skills and advance your career.</p>
                                                <p></p>
                                            </div>
                                            <div class="row justify-content-center g-4">
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="ot-courses-card">
                                                        <div class="image">
                                                            <a
                                                                href="#">
                                                                <img class="img-whp"
                                                                    src="landing/images/courses8.jpg"
                                                                    alt="Mastering Python for Data Science and Real-World Analytics">
                                                            </a>
                                                            <ul class="info-list">
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="17" viewBox="0 0 14 17" fill="none">
                                                                        <path
                                                                            d="M1 5.5C1 3.379 1 2.31775 1.65925 1.65925C2.31775 1 3.379 1 5.5 1H8.5C10.621 1 11.6823 1 12.3408 1.65925C13 2.31775 13 3.379 13 5.5V11.5C13 13.621 13 14.6823 12.3408 15.3408C11.6823 16 10.621 16 8.5 16H5.5C3.379 16 2.31775 16 1.65925 15.3408C1 14.6823 1 13.621 1 11.5V5.5Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path
                                                                            d="M12.9235 11.4995H3.9235C3.226 11.4995 2.87725 11.4995 2.59075 11.576C2.20923 11.6783 1.86137 11.8793 1.58213 12.1586C1.3029 12.438 1.10212 12.7859 1 13.1675"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M4 4.74951H10M4 7.37451H7.75M12.625 13.7495H4"
                                                                            stroke="#1C43FE" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                    </svg>
                                                                    <span>4/09/25</span>
                                                                </li>
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="19" viewBox="0 0 14 19" fill="none">
                                                                        <path
                                                                            d="M6.99986 7.85714C8.8934 7.85714 10.4284 6.32212 10.4284 4.42857C10.4284 2.53502 8.8934 1 6.99986 1C5.10631 1 3.57129 2.53502 3.57129 4.42857C3.57129 6.32212 5.10631 7.85714 6.99986 7.85714Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                    </svg>
                                                                    <span>1 Learners</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#"
                                                                class="tag-btn">Data Science</a>
                                                            <h3>
                                                                <a
                                                                    href="#">Mastering
                                                                    Python for Data Science and Real-World Analytics</a>
                                                            </h3>
                                                            <div class="profile-btn">
                                                                <a
                                                                    href="#">Jeku
                                                                    Smit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="ot-courses-card">
                                                        <div class="image">
                                                            <a
                                                                href="#">
                                                                <img class="img-whp"
                                                                    src="landing/images/courses9.jpg"
                                                                    alt="Complete Digital Marketing Strategy: From Fundamentals to Funnels">
                                                            </a>
                                                            <ul class="info-list">
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="17" viewBox="0 0 14 17" fill="none">
                                                                        <path
                                                                            d="M1 5.5C1 3.379 1 2.31775 1.65925 1.65925C2.31775 1 3.379 1 5.5 1H8.5C10.621 1 11.6823 1 12.3408 1.65925C13 2.31775 13 3.379 13 5.5V11.5C13 13.621 13 14.6823 12.3408 15.3408C11.6823 16 10.621 16 8.5 16H5.5C3.379 16 2.31775 16 1.65925 15.3408C1 14.6823 1 13.621 1 11.5V5.5Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path
                                                                            d="M12.9235 11.4995H3.9235C3.226 11.4995 2.87725 11.4995 2.59075 11.576C2.20923 11.6783 1.86137 11.8793 1.58213 12.1586C1.3029 12.438 1.10212 12.7859 1 13.1675"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M4 4.74951H10M4 7.37451H7.75M12.625 13.7495H4"
                                                                            stroke="#1C43FE" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                    </svg>
                                                                    <span>4/09/25</span>
                                                                </li>
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="19" viewBox="0 0 14 19" fill="none">
                                                                        <path
                                                                            d="M6.99986 7.85714C8.8934 7.85714 10.4284 6.32212 10.4284 4.42857C10.4284 2.53502 8.8934 1 6.99986 1C5.10631 1 3.57129 2.53502 3.57129 4.42857C3.57129 6.32212 5.10631 7.85714 6.99986 7.85714Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                    </svg>
                                                                    <span>1 Learners</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#"
                                                                class="tag-btn">Digital Marketing</a>
                                                            <h3>
                                                                <a
                                                                    href="#">Complete
                                                                    Digital Marketing Strategy: From Fundamentals to
                                                                    Funnels</a>
                                                            </h3>
                                                            <div class="profile-btn">
                                                                <a
                                                                    href="#">Jeku
                                                                    Smit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="ot-courses-card">
                                                        <div class="image">
                                                            <a
                                                                href="#">
                                                                <img class="img-whp"
                                                                    src="landing/images/courses10.jpg"
                                                                    alt="UI/UX Bootcamp: Create Stunning Interfaces and User Experiences">
                                                            </a>
                                                            <ul class="info-list">
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="17" viewBox="0 0 14 17" fill="none">
                                                                        <path
                                                                            d="M1 5.5C1 3.379 1 2.31775 1.65925 1.65925C2.31775 1 3.379 1 5.5 1H8.5C10.621 1 11.6823 1 12.3408 1.65925C13 2.31775 13 3.379 13 5.5V11.5C13 13.621 13 14.6823 12.3408 15.3408C11.6823 16 10.621 16 8.5 16H5.5C3.379 16 2.31775 16 1.65925 15.3408C1 14.6823 1 13.621 1 11.5V5.5Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path
                                                                            d="M12.9235 11.4995H3.9235C3.226 11.4995 2.87725 11.4995 2.59075 11.576C2.20923 11.6783 1.86137 11.8793 1.58213 12.1586C1.3029 12.438 1.10212 12.7859 1 13.1675"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M4 4.74951H10M4 7.37451H7.75M12.625 13.7495H4"
                                                                            stroke="#1C43FE" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                    </svg>
                                                                    <span>4/09/25</span>
                                                                </li>
                                                                <li>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        height="19" viewBox="0 0 14 19" fill="none">
                                                                        <path
                                                                            d="M6.99986 7.85714C8.8934 7.85714 10.4284 6.32212 10.4284 4.42857C10.4284 2.53502 8.8934 1 6.99986 1C5.10631 1 3.57129 2.53502 3.57129 4.42857C3.57129 6.32212 5.10631 7.85714 6.99986 7.85714Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                        <path opacity="0.5"
                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                            stroke="#1C43FE" stroke-width="1.5"></path>
                                                                    </svg>
                                                                    <span>1 Learners</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="content">
                                                            <a href="#"
                                                                class="tag-btn">Design Bootcamp</a>
                                                            <h3>
                                                                <a
                                                                    href="#">UI/UX
                                                                    Bootcamp: Create Stunning Interfaces and User
                                                                    Experiences</a>
                                                            </h3>
                                                            <div class="profile-btn">
                                                                <a
                                                                    href="#">Jeku
                                                                    Smit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ot-courses-all-btn">
                                                <a href="/course"
                                                    class="default-btn">
                                                    View All Courses
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                        viewBox="0 0 18 14" fill="none">
                                                        <path opacity="0.5" d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                            fill="white" stroke="white"></path>
                                                        <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-5"></span><a href="#sb-6" class="visually-hidden-focusable">Skip [Olan] CTA</a>

                        <section id="inst109" class=" block_olan_cta block  card mb-3" role="region"
                            data-block="olan_cta" data-instance-id="109" aria-labelledby="instance-109-header">

                            <div class="card-body p-3">

                                <h3 id="instance-109-header" class="h5 card-title d-inline">[Olan] CTA</h3>


                                <div class="card-text content mt-3">
                                    <div class="education-cta-area ">
                                        <div class="container" data-cues="slideInUp" data-duration="1000"
                                            data-disabled="true">
                                            <div class="education-cta-inner  wrap-style3" data-cue="slideInUp"
                                                data-duration="1000" data-show="true"
                                                style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                <div class="content section-title-animation animation-style1">
                                                    <h2 class="title-animation" style="perspective: 400px;">
                                                        <div class="split-line"
                                                            style="display: block; text-align: center; position: relative;">
                                                            <div style="position:relative;display:inline-block;">
                                                             Start
                                                            </div>
                                                            <div style="position:relative;display:inline-block;">
                                                             Your
                                                            </div>
                                                            <div style="position:relative;display:inline-block;">
                                                             Journey
                                                            </div>
                                                            <div style="position:relative;display:inline-block;">
                                                              Toward
                                                            </div>
                                                            
                                                            <div style="position:relative;display:inline-block;">
                                                              In
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="split-line"
                                                            style="display: block; text-align: center; position: relative;">
                                                            <div style="position:relative;display:inline-block;">
                                                                <div style="position:relative;display:inline-block;">
                                                                   Demand
                                                                </div>
                                                            </div> 
                                                            <span>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Skills
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Today
                                                                </div>
                                                                 <img
                                                                    src="landing/images/title-line.png"
                                                                    alt="image">
                                                            </span>
                                                        </div>
                                                    </h2>
                                                    <p>Enroll now and learn from certified industry experts.</p>
                                                    <a href="#"
                                                        class="default-btn">
                                                        Get Started Now
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                            viewBox="0 0 18 14" fill="none">
                                                            <path opacity="0.5" d="M16.375 6.75V7.25H1.375V6.75H16.375Z"
                                                                fill="#1C43FE" stroke="#1C43FE"></path>
                                                            <path d="M10.875 1L16.875 7L10.875 13" stroke="#1C43FE"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="cta-shape1" data-speed="0.02" data-revert="true">
                                                    <img src="landing/images/cta-shape5.png"
                                                        alt="image">
                                                </div>
                                                <div class="cta-shape2" data-speed="0.02" data-revert="true">
                                                    <img src="landing/images/cta-shape6.png"
                                                        alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-6"></span><a href="#sb-7" class="visually-hidden-focusable">Skip [Olan] Partners
                            Three</a>

                        <section id="inst111" class=" block_olan_partners_three block  card mb-3" role="region"
                            data-block="olan_partners_three" data-instance-id="111"
                            aria-labelledby="instance-111-header">

                            <div class="card-body p-3">

                                <h3 id="instance-111-header" class="h5 card-title d-inline">[Olan] Partners Three</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-partner-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-5"
                                                data-cues="slideInUp" data-duration="1000" data-disabled="true">
                                                <div class="col-lg-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div
                                                        class="ot-partner-content section-title-animation animation-style3">
                                                        <span class="sub">Our Partners</span>
                                                        <h2 class="title-animation" style="perspective: 400px;">
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                    Trusted
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    By
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Leading
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <span>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                       Organizations
                                                                    </div> <img
                                                                        src="landing/images/title-line.png"
                                                                        alt="image">
                                                                </span>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Worldwide
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <p>Our platform supports organizations of all sizes in
                                                            upskilling their workforce through expert-led training.</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-partner-items">
                                                        <div class="item">
                                                            <img src="landing/images/award1.png"
                                                                alt="award1.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award2.png"
                                                                alt="award2.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award3.png"
                                                                alt="award3.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award4.png"
                                                                alt="award4.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award5.png"
                                                                alt="award5.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award6.png"
                                                                alt="award6.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award7.png"
                                                                alt="award7.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award8.png"
                                                                alt="award8.png">
                                                        </div>
                                                        <div class="item">
                                                            <img src="landing/images/award9.png"
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

                        <span id="sb-7"></span><a href="#sb-8" class="visually-hidden-focusable">Skip [Olan]
                            Feedback</a>

                        <section id="inst114" class=" block_olan_feedback block  card mb-3" role="region"
                            data-block="olan_feedback" data-instance-id="114" aria-labelledby="instance-114-header">

                            <div class="card-body p-3">

                                <h3 id="instance-114-header" class="h5 card-title d-inline">[Olan] Feedback</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-feedback-area pb-140">
                                        <div class="container" data-cues="slideInUp" data-duration="1000"
                                            data-disabled="true">
                                            <div class="ot-feedback-inner" data-cue="slideInUp" data-duration="1000"
                                                data-show="true"
                                                style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                <div class="inner-top">
                                                    <div
                                                        class="swiper ot-feedback-slider swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden">
                                                        <div class="swiper-wrapper"
                                                            id="swiper-wrapper-7ea1f9410e364bb6f" aria-live="off"
                                                            style="height: 544px; transition-duration: 0ms; transform: translate3d(-981px, 0px, 0px); transition-delay: 0ms;">


                                                            <div class="swiper-slide swiper-slide-next swiper-slide-prev"
                                                                role="group" aria-label="2 / 2"
                                                                data-swiper-slide-index="1"
                                                                style="width: 956px; margin-right: 25px;">
                                                                <div class="row justify-content-center g-4">
                                                                    <div class="col-lg-4 col-md-12">
                                                                        <div class="ot-feedback-image"
                                                                            style="background-image: url(landing/images/feedback2.jpg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-12">
                                                                        <div class="ot-feedback-content">
                                                                            <div class="top">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <img src="landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="quote">
                                                                                    <img src="landing/images/quote.svg"
                                                                                        alt="quote">
                                                                                </div>
                                                                            </div>
                                                                            <p>Olan made it incredibly easy to fit
                                                                                learning into my busy schedule. The
                                                                                platform's structure, high-quality
                                                                                instructors, and relevant course
                                                                                material helped me gain the skills I
                                                                                needed to lead digital campaigns
                                                                                confidently. I've already applied what I
                                                                                learned to real projects and seen great
                                                                                results.</p>
                                                                            <div class="info">
                                                                                <h3>Maria Jackson</h3>
                                                                                <span>UX/UI Design Mentor</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-slide swiper-slide-active" role="group"
                                                                aria-label="1 / 2" data-swiper-slide-index="0"
                                                                style="width: 956px; margin-right: 25px;">
                                                                <div class="row justify-content-center g-4">
                                                                    <div class="col-lg-4 col-md-12">
                                                                        <div class="ot-feedback-image"
                                                                            style="background-image: url(/landing/images/feedback.jpg);">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-8 col-md-12">
                                                                        <div class="ot-feedback-content">
                                                                            <div class="top">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <img src="/landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="/landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="/landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="/landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                    <li>
                                                                                        <img src="/landing/images/star.svg"
                                                                                            alt="star">
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="quote">
                                                                                    <img src="/landing/images/quote.svg"
                                                                                        alt="quote">
                                                                                </div>
                                                                            </div>
                                                                            <p>Olan made it incredibly easy to fit
                                                                                learning into my busy schedule. The
                                                                                platform's structure, high-quality
                                                                                instructors, and relevant course
                                                                                material helped me gain the skills I
                                                                                needed to lead digital campaigns
                                                                                confidently. I've already applied what I
                                                                                learned to real projects and seen great
                                                                                results.</p>
                                                                            <div class="info">
                                                                                <h3>Sarah Mitchell</h3>
                                                                                <span>Marketing Manager</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="swiper-notification" aria-live="assertive"
                                                            aria-atomic="true"></span>
                                                    </div>
                                                    <div class="ot-feedback-nav-buttons">
                                                        <div class="ot-button-prev" tabindex="0" role="button"
                                                            aria-label="Previous slide"
                                                            aria-controls="swiper-wrapper-7ea1f9410e364bb6f">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <g fill="none">
                                                                    <path fill="#1C43FE"
                                                                        d="M20 12.75a.75.75 0 0 0 0-1.5zm0-1.5H4v1.5h16z"
                                                                        opacity="0.5"></path>
                                                                    <path stroke="#1C43FE" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1.5"
                                                                        d="m10 6l-6 6l6 6"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="ot-button-next" tabindex="0" role="button"
                                                            aria-label="Next slide"
                                                            aria-controls="swiper-wrapper-7ea1f9410e364bb6f">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24">
                                                                <g fill="none">
                                                                    <path fill="#1C43FE"
                                                                        d="M4 11.25a.75.75 0 0 0 0 1.5zm0 1.5h16v-1.5H4z"
                                                                        opacity="0.5"></path>
                                                                    <path stroke="#1C43FE" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="1.5"
                                                                        d="m14 6l6 6l-6 6"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="inner-bottom section-title-animation animation-style3">
                                                    <h2 class="title-animation" style="perspective: 400px;">
                                                        <div class="split-line"
                                                            style="display: block; text-align: start; position: relative;">
                                                            <div style="position:relative;display:inline-block;">
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                                                                    S</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    t</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    u</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    d</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    e</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    n</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    t</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    s</div>
                                                            </div>
                                                            <div style="position:relative;display:inline-block;">
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    F</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    e</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    e</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    d</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    b</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    a</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    c</div>
                                                                <div
                                                                    style="position: relative; display: inline-block; opacity: 0;">
                                                                    k</div>
                                                            </div>
                                                        </div>
                                                    </h2> <a
                                                        href="/mod/page/view.php?id=24"
                                                        class="default-btn">
                                                        View All Feedback <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="18" height="14" viewBox="0 0 18 14" fill="none">
                                                            <path opacity="0.5" d="M16.25 6.75V7.25H1.25V6.75H16.25Z"
                                                                fill="#1C43FE" stroke="#1C43FE"></path>
                                                            <path d="M10.75 1L16.75 7L10.75 13" stroke="#1C43FE"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-8"></span><a href="#sb-9" class="visually-hidden-focusable">Skip [Olan] Team
                            Two</a>

                        <section id="inst116" class=" block_olan_team_two block  card mb-3" role="region"
                            data-block="olan_team_two" data-instance-id="116" aria-labelledby="instance-116-header">

                            <div class="card-body p-3">

                                <h3 id="instance-116-header" class="h5 card-title d-inline">[Olan] Team Two</h3>


                                <div class="card-text content mt-3">
                                    <div class="ot-team-area pb-140">
                                        <div class="container">
                                            <div class="section-title section-title-animation animation-style1"
                                                data-cues="slideInUp" data-duration="1000" data-disabled="true"><span
                                                    class="sub" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">Meet
                                                    Our Instructors</span>
                                                <h2 class="title-animation" data-cue="slideInUp" data-duration="1000"
                                                    style="perspective: 400px; animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
                                                    data-show="true">
                                                    <div class="split-line"
                                                        style="display: block; text-align: center; position: relative;">
                                                        <div style="position:relative;display:inline-block;">
                                                            Your
                                                        </div>
                                                        <div style="position:relative;display:inline-block;">
                                                            Learning
                                                        </div>
                                                        <div style="position:relative;display:inline-block;">
                                                            Guides
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="split-line"
                                                        style="display: block; text-align: center; position: relative;">
                                                        <img src="/landing/images/title-line.png"
                                                            alt="image"></div>
                                                </h2>
                                            </div>
                                            <div class="row justify-content-center g-4" data-cues="slideInUp"
                                                data-duration="1000" data-disabled="true">
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-team-card ">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="landing/images/team5.jpg"
                                                                    alt="image"></a>
                                                            <div class="share-btn">
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="shape1"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
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
                                                                    Patel </a></h3><span>UX/UI Design Mentor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-team-card  wrap-style">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="landing/images/team6.jpg"
                                                                    alt="image"></a>
                                                            <div class="share-btn">
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="shape1"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
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
                                                                    Jackson</a></h3><span>Senior Web Developer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-team-card ">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="landing/images/team7.jpg"
                                                                    alt="image"></a>
                                                            <div class="share-btn">
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="shape1"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
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
                                                                    Chen </a></h3><span>Personal Productivity
                                                                Coach</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6" data-cue="slideInUp" data-duration="1000"
                                                    data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="ot-team-card  wrap-style">
                                                        <div class="image"><a
                                                                href="#"><img
                                                                    src="landing/images/team8.jpg"
                                                                    alt="image"></a>
                                                            <div class="share-btn">
                                                                <ul class="list">
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-facebook-fill"></i></a></li>
                                                                    <li><a href="#" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                    <li><a href="#" target="_blank"><i
                                                                                class="ri-linkedin-fill"></i></a></li>
                                                                    <li><a href="" target="_blank"><i class=""></i></a>
                                                                    </li>
                                                                </ul>
                                                                <div class="shape1"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        class="w-10 h-10">
                                                                        <path
                                                                            d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="shape2"
                                                                    style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                    <svg viewBox="0 0 10 10" fill="none"
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
                                                                    Kim</a></h3><span>Lead Data Science Educator</span>
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

                        <span id="sb-9"></span><a href="#sb-10" class="visually-hidden-focusable">Skip [Olan] FAQ</a>

                        <section id="inst118" class=" block_olan_faq block  card mb-3" role="region"
                            data-block="olan_faq" data-instance-id="118" aria-labelledby="instance-118-header">

                            <div class="card-body p-3">

                                <h3 id="instance-118-header" class="h5 card-title d-inline">[Olan] FAQ</h3>


                                <div class="card-text content mt-3">
                                    <div class="faq-area ptb-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-4"
                                                data-cues="slideInUp" data-duration="1000" data-disabled="true">
                                                <div class="col-lg-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="faq-image">
                                                        <img src="landing/images/faq.png"
                                                            alt="image">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="faq-content section-title-animation animation-style3">
                                                        <div class="title">
                                                            <span class="sub"><a class="autolink" title="FAQ"
                                                                    href="#">FAQ</a>'s</span>
                                                            <h2 class="title-animation" style="perspective: 400px;">
                                                                <div class="split-line"
                                                                    style="display: block; text-align: start; position: relative;">
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        Everything
                                                                    </div>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        You
                                                                    </div>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        Need
                                                                    </div>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        to
                                                                    </div>
                                                                </div>
                                                                <div class="split-line"
                                                                    style="display: block; text-align: start; position: relative;">
                                                                    <span>
                                                                        <div
                                                                            style="position:relative;display:inline-block;">
                                                                            Know
                                                                        </div>
                                                                        <div
                                                                            style="position:relative;display:inline-block;">
                                                                            About
                                                                        </div> <img
                                                                            src="landing/images/title-line.png"
                                                                            alt="image">
                                                                    </span>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        olan
                                                                    </div>
                                                                </div>
                                                            </h2>
                                                        </div>
                                                        <div class="faq-accordion">
                                                            <div class="accordion" id="faqAccordion118">
                                                                <div class="accordion-item">
                                                                    <button class="accordion-button" type="button"
                                                                        data-toggle="collapse"
                                                                        data-target="#collapse_1_118"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapse_1_118">
                                                                        How do I enroll in a course on Olan? </button>
                                                                    <div id="collapse_1_118"
                                                                        class="accordion-collapse collapse show"
                                                                        data-parent="#faqAccordion118">
                                                                        <div class="accordion-body">
                                                                            <p>Simply browse our course catalog, select
                                                                                a course that fits your goals, and click
                                                                                “Enroll Now.” You'll be guided through a
                                                                                quick and secure checkout process.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-toggle="collapse"
                                                                        data-target="#collapse_2_118"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse_2_118">
                                                                        Are the courses self-paced or scheduled?
                                                                    </button>
                                                                    <div id="collapse_2_118"
                                                                        class="accordion-collapse collapse"
                                                                        data-parent="#faqAccordion118">
                                                                        <div class="accordion-body">
                                                                            <p>Simply browse our course catalog, select
                                                                                a course that fits your goals, and click
                                                                                “Enroll Now.” You'll be guided through a
                                                                                quick and secure checkout process.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-toggle="collapse"
                                                                        data-target="#collapse_3_118"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse_3_118">
                                                                        Will I receive a certificate after completing a
                                                                        course? </button>
                                                                    <div id="collapse_3_118"
                                                                        class="accordion-collapse collapse"
                                                                        data-parent="#faqAccordion118">
                                                                        <div class="accordion-body">
                                                                            <p>Simply browse our course catalog, select
                                                                                a course that fits your goals, and click
                                                                                “Enroll Now.” You'll be guided through a
                                                                                quick and secure checkout process.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-toggle="collapse"
                                                                        data-target="#collapse_4_118"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapse_4_118">
                                                                        Can I access Olan courses on mobile devices?
                                                                    </button>
                                                                    <div id="collapse_4_118"
                                                                        class="accordion-collapse collapse"
                                                                        data-parent="#faqAccordion118">
                                                                        <div class="accordion-body">
                                                                            <p>Simply browse our course catalog, select
                                                                                a course that fits your goals, and click
                                                                                “Enroll Now.” You'll be guided through a
                                                                                quick and secure checkout process.</p>
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

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-10"></span><a href="#sb-11" class="visually-hidden-focusable">Skip [Olan] Blog</a>

                        <section id="inst119" class=" block_olan_blog block  card mb-3" role="region"
                            data-block="olan_blog" data-instance-id="119" aria-labelledby="instance-119-header">

                            <div class="card-body p-3">

                                <h3 id="instance-119-header" class="h5 card-title d-inline">[Olan] Blog</h3>


                                <div class="card-text content mt-3">
                                    <div class="education-blog-area pt-140">
                                        <div class="container">
                                            <div class="row justify-content-center align-items-center g-4"
                                                data-cues="slideInUp" data-duration="1000" data-disabled="true">
                                                <div class="col-lg-5 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div
                                                        class="education-blog-content section-title-animation animation-style1">
                                                        <span class="sub">Our Blog</span>
                                                        <h2 class="title-animation" style="perspective: 400px;">
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <div style="position:relative;display:inline-block;">
                                                                    Insights
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    <div
                                                                        style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform: translate(50px, 0px); opacity: 0;">
                                                                        &amp;</div>
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Ideas
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                   From
                                                                </div>
                                                            </div>
                                                            <div class="split-line"
                                                                style="display: block; text-align: start; position: relative;">
                                                                <span>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        The
                                                                    </div>
                                                                    <div
                                                                        style="position:relative;display:inline-block;">
                                                                        World
                                                                    </div> <img
                                                                        src="landing/images/title-line.png"
                                                                        alt="image">
                                                                </span>
                                                                <div style="position:relative;display:inline-block;">
                                                                   of
                                                                </div>
                                                                <div style="position:relative;display:inline-block;">
                                                                    Learning
                                                                </div>
                                                            </div>
                                                        </h2>
                                                        <p></p>
                                                        <p>Stay informed, inspired, and ahead of the curve with expert
                                                            articles, study tips, industry updates, and real success
                                                            stories.</p>
                                                        <p></p> <a href="/blog"
                                                            class="default-btn">
                                                            View All Insights <svg xmlns="http://www.w3.org/2000/svg"
                                                                width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                aria-hidden="true">
                                                                <path opacity="0.5"
                                                                    d="M16.25 6.75V7.25H1.25V6.75H16.25Z" fill="white"
                                                                    stroke="white"></path>
                                                                <path d="M10.75 1L16.75 7L10.75 13" stroke="white"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-12" data-cue="slideInUp"
                                                    data-duration="1000" data-show="true"
                                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                                    <div class="row justify-content-center g-5" data-cues="slideInUp"
                                                        data-duration="1000" data-disabled="true">
                                                        <div class="col-lg-6 col-md-6" data-cue="slideInUp"
                                                            data-duration="1000" data-show="true"
                                                            style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                                            <div class="education-blog-card wrap-style">
                                                                <div class="image">
                                                                    <a
                                                                        href="/blog/index.php?entryid=1">
                                                                        <img src="landing/images/blog2.jpg"
                                                                            alt="image"> </a>
                                                                    <a href="/blog/index.php?entryid=1"
                                                                        class="arrow-btn" aria-label="Read more">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" aria-hidden="true">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE"></path>
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </svg>
                                                                        <div class="shape1"
                                                                            style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10" aria-hidden="true">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2"
                                                                            style="translate: none; rotate: none; scale: none; transform: rotate(-90deg);">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10" aria-hidden="true">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="/blog"
                                                                        class="tag-btn">Success Stories</a>
                                                                    <h3>
                                                                        <a
                                                                            href="/blog/index.php?entryid=1">Real
                                                                            Stories from Olan Students</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE" stroke-width="1.5">
                                                                                </path>
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 13Z"
                                                                                    fill="#1C43FE"></path>
                                                                            </svg>
                                                                            <span>September 9, 2025</span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                aria-hidden="true">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE" stroke-width="1.5">
                                                                                </path>
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
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
                                                        <div class="col-lg-6 col-md-6" data-cue="slideInUp"
                                                            data-duration="1000" data-show="true"
                                                            style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                                            <div class="education-blog-card">
                                                                <div class="image">
                                                                    <a
                                                                        href="/blog/index.php?entryid=2">
                                                                        <img src="landing/images/blog1.jpg"
                                                                            alt="image"> </a>
                                                                    <a href="/blog/index.php?entryid=2"
                                                                        class="arrow-btn" aria-label="Read more">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" aria-hidden="true">
                                                                            <path opacity="0.5"
                                                                                d="M5.47015 17.4697C5.39647 17.5384 5.33736 17.6212 5.29637 17.7132C5.25538 17.8052 5.23334 17.9045 5.23156 18.0052C5.22979 18.1059 5.24831 18.2059 5.28603 18.2993C5.32375 18.3927 5.3799 18.4775 5.45112 18.5488C5.52233 18.62 5.60717 18.6761 5.70056 18.7139C5.79394 18.7516 5.89397 18.7701 5.99468 18.7683C6.09538 18.7665 6.19469 18.7445 6.28669 18.7035C6.37869 18.6625 6.46149 18.6034 6.53015 18.5297L5.47015 17.4697ZM6.53015 18.5297L18.5302 6.52973L17.4702 5.46973L5.47015 17.4697L6.53015 18.5297Z"
                                                                                fill="#1C43FE"></path>
                                                                            <path d="M9 6H18V15" stroke="#1C43FE"
                                                                                stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </svg>
                                                                        <div class="shape1"
                                                                            style="translate: none; rotate: none; scale: none; transform: rotate(180deg) skew(360deg, 0deg);">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10" aria-hidden="true">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="shape2"
                                                                            style="translate: none; rotate: none; scale: none; transform: rotate(-90deg);">
                                                                            <svg viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-10 h-10" aria-hidden="true">
                                                                                <path
                                                                                    d="M11 1.54972e-06L0 0L2.38419e-07 11C1.65973e-07 4.92487 4.92487 1.62217e-06 11 1.54972e-06Z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="content">
                                                                    <a href="/blog"
                                                                        class="tag-btn">Learning Tips</a>
                                                                    <h3>
                                                                        <a
                                                                            href="/blog/index.php?entryid=2">How
                                                                            to Stay Motivated While Learning Online</a>
                                                                    </h3>
                                                                    <ul class="meta">
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M2 12C2 8.229 2 6.343 3.172 5.172C4.344 4.001 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.999 6.344 22 8.229 22 12V14C22 17.771 22 19.657 20.828 20.828C19.656 21.999 17.771 22 14 22H10C6.229 22 4.343 22 3.172 20.828C2.001 19.656 2 17.771 2 14V12Z"
                                                                                    stroke="#1C43FE" stroke-width="1.5">
                                                                                </path>
                                                                                <path opacity="0.5"
                                                                                    d="M7 4V2.5M17 4V2.5M2.5 9H21.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"></path>
                                                                                <path
                                                                                    d="M18 17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18C16.7348 18 16.4804 17.8946 16.2929 17.7071C16.1054 17.5196 16 17.2652 16 17C16 16.7348 16.1054 16.4804 16.2929 16.2929C16.4804 16.1054 16.7348 16 17 16C17.2652 16 17.5196 16.1054 17.7071 16.2929C17.8946 16.4804 18 16.7348 18 17ZM18 13C18 13.2652 17.8946 13.5196 17.7071 13.7071C17.5196 13.8946 17.2652 14 17 14C16.7348 14 16.4804 13.8946 16.2929 13.7071C16.1054 13.5196 16 13.2652 16 13C16 12.7348 16.1054 12.4804 16.2929 12.2929C16.4804 12.1054 16.7348 12 17 12C17.2652 12 17.5196 12.1054 17.7071 12.2929C17.8946 12.4804 18 12.7348 18 13ZM13 17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17C11 16.7348 11.1054 16.4804 11.2929 16.2929C11.4804 16.1054 11.7348 16 12 16C12.2652 16 12.5196 16.1054 12.7071 16.2929C12.8946 16.4804 13 16.7348 13 17ZM13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13ZM8 17C8 17.2652 7.89464 17.5196 7.70711 17.7071C7.51957 17.8946 7.26522 18 7 18C6.73478 18 6.48043 17.8946 6.29289 17.7071C6.10536 17.5196 6 17.2652 6 17C6 16.7348 6.10536 16.4804 6.29289 16.2929C6.48043 16.1054 6.73478 16 7 16C7.26522 16 7.51957 16.1054 7.70711 16.2929C7.89464 16.4804 8 16.7348 8 13Z"
                                                                                    fill="#1C43FE"></path>
                                                                            </svg>
                                                                            <span>September 9, 2025</span>
                                                                        </li>
                                                                        <li>
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                aria-hidden="true">
                                                                                <path opacity="0.5"
                                                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                                                    stroke="#1C43FE" stroke-width="1.5">
                                                                                </path>
                                                                                <path d="M12 8V12L14.5 14.5"
                                                                                    stroke="#1C43FE" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer"></div>

                                </div>

                            </div>

                        </section>

                        <span id="sb-11"></span>
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
                    src="/lib/javascript.php/1757783192/lib/polyfills/polyfill.js"></script>
                <script
                    src="/theme/yui_combo.php?rollup/3.18.1/yui-moodlesimple-min.js"></script>
                <script src="/theme/jquery.php/core/jquery-3.7.1.min.js"></script>
                <script
                    src="/lib/javascript.php/1757783192/lib/javascript-static.js"></script>
                <script src="/theme/javascript.php/olan/1757783192/head"></script>
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
                                                                                src="/theme/image.php/olan/page/1757783192/monologo">
                                                                        </div>
                                                                    </div>
                                                                    <div class="page-header-headings">
                                                                        <div
                                                                            class="text-muted text-uppercase small line-height-3">
                                                                            Page</div>
                                                                        <h3 id="" class="h2">Online Training</h3>
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
                                                                                href="/">
                                                                                Home
                                                                            </a>
                                                                        </li>

                                                                        <li class="breadcrumb-item">
                                                                            <span>
                                                                                Site pages
                                                                            </span>
                                                                        </li>

                                                                        <li class="breadcrumb-item">
                                                                            <a href="/mod/page/view.php?id=17"
                                                                                aria-current="page" title="Page">
                                                                                Online Training
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
                                                            data-activityname="Online Training"
                                                            class="activity-information">


                                                        </div>
                                                    </div>


                                                    <div class="box py-3 generalbox center clearfix">
                                                        <div class="no-overflow">
                                                            <p>Online Training</p>
                                                        </div>
                                                    </div>
                                                    <div class="modified">Last modified: Thursday, 4 September 2025,
                                                        1:43 PM</div>


                                                    <div class="mt-5 mb-1 activity-navigation container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="float-start">
                                                                    <a href="/mod/page/view.php?id=16&amp;forceview=1"
                                                                        id="prev-activity-link" class="btn btn-link">◄
                                                                        Distance Learning</a>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mdl-align">
                                                                    <div class="urlselect">
                                                                        <form method="post"
                                                                            action="/course/jumpto.php"
                                                                            class="d-flex flex-wrap align-items-center"
                                                                            id="url_select_f694fe06abbba614">
                                                                            <input type="hidden" name="sesskey"
                                                                                value="4nBXJPBjLY">
                                                                            <label for="jump-to-activity"
                                                                                class="visually-hidden">
                                                                                Jump to...
                                                                            </label>
                                                                            <select id="jump-to-activity"
                                                                                class="form-select urlselect"
                                                                                name="jump">
                                                                                <option value="" selected="">Jump to...
                                                                                </option>
                                                                                <option
                                                                                    value="/mod/forum/view.php?id=4&amp;forceview=1">
                                                                                    Site announcements</option>
                                                                                <option
                                                                                    value="/mod/page/view.php?id=16&amp;forceview=1">
                                                                                    Distance Learning</option>
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
                                                                    <a href="/mod/page/view.php?id=21&amp;forceview=1"
                                                                        id="next-activity-link"
                                                                        class="btn btn-link">About Us 01 ►</a>

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

                <footer class="footer-area wrap-style2">



                    <div class="container">
                        <div class="pb-140">
                            <div class="row justify-content-center g-5" data-cues="slideInUp" data-duration="1000"
                                data-disabled="true">
                                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-duration="1000"
                                    data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">
                                        <a class="widget-logo" href="/">
                                            <img src="/pluginfile.php/1/theme_olan/main_footer_logo/1757783192/olan-main-logo.svg"
                                                alt="Olan">

                                        </a>

                                        <p>Empowering learners and educators worldwide through flexible, expert-led
                                            online courses. Learn anytime, anywhere — with tools that help you grow.</p>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6" data-cue="slideInUp" data-duration="1000"
                                    data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget left-gap">
                                        <h3>Follow Us</h3>
                                        <ul class="social-list">
                                            <li><a class="d-block" target="_self" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="d-block" target="_self" href="#"><svg
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                                                        </path>
                                                    </svg></a></li>
                                            <li><a class="d-block" target="_self" href="#"><i
                                                        class="fa fa-instagram"></i></a></li>
                                            <li><a class="d-block" target="_self" href="#"><i
                                                        class="fa fa-graduation-cap"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12" data-cue="slideInUp" data-duration="1000"
                                    data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">
                                        <h3>Subscribe Our Newsletter</h3>
                                        <div class="newsletter-form">
                                            <p>Get the latest courses, tips &amp; stories delivered to your inbox.</p>

                                            <form class="mailchimp2 newsletter-form" method="post" novalidate="true">
                                                <input type="email" class="form-control memail2" name="EMAIL"
                                                    placeholder="Enter your email address" required="">

                                                <button type="submit" class="default-btn">
                                                    Subscribe
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14"
                                                        viewBox="0 0 18 14" fill="none">
                                                        <path opacity="0.5"
                                                            d="M16.25 6.74902V7.24902H1.25V6.74902H16.25Z" fill="white"
                                                            stroke="white"></path>
                                                        <path d="M10.75 0.999023L16.75 6.99902L10.75 12.999"
                                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <p class="mchimp-errmessage2 alert alert-danger mt-1"
                                                style="display: none;"></p>
                                            <p class="mchimp-sucmessage2 alert alert-primary mt-1"
                                                style="display: none;"></p>

                                            <script>
                                                ; (function ($) {
                                                    "use strict";
                                                    $(document).ready(function () {
                                                        // MAILCHIMP
                                                        if ($(".mailchimp2").length > 0) {
                                                            $(".mailchimp2").ajaxChimp({
                                                                callback: mailchimpCallback2,
                                                                url: "https://envytheme.us13.list-manage.com/subscribe/post?u=1f4dcefed57b9c394873f34d2&id=b093890ff6"
                                                            });
                                                        }

                                                        $(".memail2").on("focus", function () {
                                                            $(".mchimp-errmessage2").fadeOut();
                                                            $(".mchimp-sucmessage2").fadeOut();
                                                        });
                                                        $(".memail2").on("keydown", function () {
                                                            $(".mchimp-errmessage2").fadeOut();
                                                            $(".mchimp-sucmessage2").fadeOut();
                                                        });
                                                        $(".memail2").on("click", function () {
                                                            $(".memail2").val("");
                                                        });

                                                        function mailchimpCallback2(resp) {
                                                            if (resp.result === "success") {
                                                                $(".mchimp-sucmessage2").html(resp.msg).fadeIn(1000);
                                                                $(".mchimp-sucmessage2").fadeOut(500);
                                                            } else if (resp.result === "error") {
                                                                $(".mchimp-errmessage2").html(resp.msg).fadeIn(1000);
                                                            }
                                                        }
                                                    });
                                                })(jQuery)
                                            </script>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="pb-140">
                            <div class="row justify-content-center g-5" data-cues="slideInUp" data-duration="1000"
                                data-disabled="true">
                                <div class="col-lg-3 col-sm-6 col-lg-3 col-sm-6" data-cue="slideInUp"
                                    data-duration="1000" data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">

                                        <h3>Quick Links</h3>

                                        <ul class="links-list">
                                            <li>
                                                <a href="/mod/page/view.php?id=21">About Us</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=2">All Courses</a>
                                            </li>
                                            <li>
                                                <a href="/mod/page/view.php?id=25">Become An Instructor</a>
                                            </li>
                                            <li>
                                                <a href="/blog/">Our Blog</a>
                                            </li>
                                            <li>
                                                <a href="/mod/page/view.php?id=40">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="/mod/page/view.php?id=40">Help Center</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-lg-3 col-sm-6" data-cue="slideInUp"
                                    data-duration="1000" data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">

                                        <h3>Top Categories</h3>

                                        <ul class="links-list">
                                            <li>
                                                <a href="/course/index.php?categoryid=2">Data Science</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=3">Web Development</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=18">Graphic Design</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=13">Business &amp; Marketing</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=7">Personal Growth</a>
                                            </li>
                                            <li>
                                                <a href="/course/index.php?categoryid=9">Science &amp; Research</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-lg-3 col-sm-6" data-cue="slideInUp"
                                    data-duration="1000" data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 600ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">

                                        <h3>Legal</h3>

                                        <ul class="links-list">
                                            <li>
                                                <a href="#">Terms of Service</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Instructors</a>
                                            </li>
                                            <li>
                                                <a href="#">Success Story</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-lg-3 col-sm-6" data-cue="slideInUp"
                                    data-duration="1000" data-show="true"
                                    style="animation-name: slideInUp; animation-duration: 1000ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                                    <div class="single-footer-widget">

                                        <h3>Get in Touch</h3>

                                        <ul class="info-list">
                                            <li>
                                                <span>Email:</span>
                                                <a href="mailto:support@olan.com">support@olan.com</a>
                                            </li>
                                            <li>
                                                <span>Phone:</span>
                                                <a href="tel:18001234567">+1 (800) 123-4567</a>
                                            </li>
                                            <li>
                                                <span>Address:</span>
                                                123 Learning Lane, Online City, World
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- Copyright Area -->
                        <div class="copyright-area">
                            <p>
                               © <span id="currentYear"></span> <span>Aungsecurity</span>. All rights reserved. </p>
                        </div>


                    </div>


                    <div class="footer-rectangle">
                        <img src="landing/images/rectangle1.png" alt="image">
                    </div>

                </footer>



                <!-- Start Go Top Area -->
                <button type="button" id="back-to-top" class="position-fixed text-center border-0 p-0">
                    <i class="ri-arrow-up-s-line"></i>
                </button>
                <!-- End Go Top Area -->



                
                <script src="landing/js/require.min.js"></script>
                
                <script>
                document.getElementById("currentYear").textContent = new Date().getFullYear();
                </script>

                
            </div>
        </div>
    </div>
    <div id="yui3-css-stamp" style="position: absolute !important; visibility: hidden !important" class=""></div>



    <div></div>

    <script>
const backToTop = document.getElementById("back-to-top");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTop.classList.add("show");
  } else {
    backToTop.classList.remove("show");
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
</script>

</body>

</html>