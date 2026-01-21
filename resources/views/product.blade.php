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
                                        <a href="https://olan-moodle.hibootstrap.com/">
                                            Home
                                        </a>
                                    </li>

                                    

                                    <li class="breadcrumb-item">
                                        <a href="https://olan-moodle.hibootstrap.com/course/index.php?categoryid=2"
                                            aria-current="page">
                                            Product
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

                
               
                <script type="text/javascript" charset="utf-8" src="{{asset('landing/js/jquery-3.7.1.min.js')}}"></script>
                
               <script src="{{asset('landing/js/head.js')}}"></script>
                

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
                                                                    <h3 id='' class='h2'>Data Science</h3>
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
                                                                        <a
                                                                            href="https://olan-moodle.hibootstrap.com/course/index.php">
                                                                            Courses
                                                                        </a>
                                                                    </li>

                                                                    <li class="breadcrumb-item">
                                                                        <a href="https://olan-moodle.hibootstrap.com/course/index.php?categoryid=2"
                                                                            aria-current="page">
                                                                            Data Science
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


                                                <span id="maincontent"></span><span></span>
                                                <div class="container-fluid tertiary-navigation" id="action_bar">
                                                    <div class="d-flex">
                                                        <div class="navitem">
                                                            <div class="urlselect text-truncate w-100">
                                                                <form method="post"
                                                                    action="https://olan-moodle.hibootstrap.com/course/jumpto.php"
                                                                    class="d-flex flex-wrap align-items-center"
                                                                    id="url_select_f6970df480e53c1">
                                                                    <input type="hidden" name="sesskey"
                                                                        value="rsCxNdAjm9">
                                                                    <label for="url_select6970df480e53c2"
                                                                        class="visually-hidden">
                                                                        Course categories
                                                                    </label>
                                                                    <select id="url_select6970df480e53c2"
                                                                        class="form-select urlselect text-truncate w-100"
                                                                        name="jump">
                                                                        <option value="/course/index.php?categoryid=2"
                                                                            selected>Data Science</option>
                                                                        <option value="/course/index.php?categoryid=3">
                                                                            Tech &amp; Development</option>
                                                                        <option value="/course/index.php?categoryid=4">
                                                                            Health &amp; Wellness</option>
                                                                        <option value="/course/index.php?categoryid=5">
                                                                            Academic Tutoring</option>
                                                                        <option value="/course/index.php?categoryid=6">
                                                                            Language Learning</option>
                                                                        <option value="/course/index.php?categoryid=7">
                                                                            Personal Growth</option>
                                                                        <option value="/course/index.php?categoryid=8">
                                                                            Marketing &amp; SEO</option>
                                                                        <option value="/course/index.php?categoryid=9">
                                                                            Science &amp; Research</option>
                                                                        <option value="/course/index.php?categoryid=10">
                                                                            Design &amp; Creativity</option>
                                                                        <option value="/course/index.php?categoryid=13">
                                                                            Business &amp; Marketing</option>
                                                                        <option value="/course/index.php?categoryid=14">
                                                                            Featured Courses</option>
                                                                        <option value="/course/index.php?categoryid=15">
                                                                            Featured Courses / Data Science</option>
                                                                        <option value="/course/index.php?categoryid=16">
                                                                            Featured Courses / Digital Marketing
                                                                        </option>
                                                                        <option value="/course/index.php?categoryid=17">
                                                                            Featured Courses / Design Bootcamp</option>
                                                                        <option value="/course/index.php?categoryid=18">
                                                                            Graphic Design</option>
                                                                    </select>
                                                                    <noscript>
                                                                        <input type="submit"
                                                                            class="btn btn-secondary ms-1" value="Go">
                                                                    </noscript>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="navitem">
                                                            <div class="simplesearchform ">
                                                                <form autocomplete="off"
                                                                    action="https://olan-moodle.hibootstrap.com/course/search.php"
                                                                    method="get" accept-charset="utf-8"
                                                                    class="mform d-flex flex-wrap align-items-center simplesearchform">
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            id="searchinput-6970df48100806970df480e53c3"
                                                                            class="form-control"
                                                                            placeholder="Search courses"
                                                                            aria-label="Search courses" name="search"
                                                                            data-region="input" autocomplete="off"
                                                                            value="">
                                                                        <label
                                                                            for="searchinput-6970df48100806970df480e53c3">
                                                                            <span class="visually-hidden">Search
                                                                                courses</span>
                                                                        </label>
                                                                        <button type="submit"
                                                                            class="btn  btn-primary search-icon">
                                                                            <i class="icon fa fa-magnifying-glass fa-fw "
                                                                                aria-hidden="true"></i>
                                                                            <span class="visually-hidden">Search
                                                                                courses</span>
                                                                        </button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="course_category_tree clearfix ">
                                                    <div class="content">
                                                        <div class="courses row category-browse category-browse-2">
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=23">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/286/course/overviewfiles/courses17.jpg"
                                                                                    alt="Mastering Excel for Adv Business  ">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=23"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=23">Mastering
                                                                                    Excel for Adv Business </a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $33
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=23">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/286/course/overviewfiles/courses17.jpg"
                                                                                    alt="Mastering Excel for Adv Business  ">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=23"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=23">Mastering
                                                                                    Excel for Adv Business </a>
                                                                            </h3>
                                                                            <p>Moodle Complete Guideline is a practical,
                                                                                step-by-step course that shows you how
                                                                                to install, configure,</p>
                                                                            <div class="price">
                                                                                $33
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=23"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=22">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/284/course/overviewfiles/courses15.jpg"
                                                                                    alt="Data Analysis with Pandas &amp; NumPy">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=22"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=22">Data
                                                                                    Analysis with Pandas &amp; NumPy</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $49
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=22">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/284/course/overviewfiles/courses15.jpg"
                                                                                    alt="Data Analysis with Pandas &amp; NumPy">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=22"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=22">Data
                                                                                    Analysis with Pandas &amp; NumPy</a>
                                                                            </h3>
                                                                            <p>Moodle Complete Guideline is a practical,
                                                                                step-by-step course that shows you how
                                                                                to install, configure,</p>
                                                                            <div class="price">
                                                                                $49
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=22"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=21">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/283/course/overviewfiles/courses16.jpg"
                                                                                    alt="Ntro To Machine Learning (Scikit-Learn)">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=21"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=21">Ntro
                                                                                    To Machine Learning
                                                                                    (Scikit-Learn)</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $24
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=21">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/283/course/overviewfiles/courses16.jpg"
                                                                                    alt="Ntro To Machine Learning (Scikit-Learn)">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=21"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=21">Ntro
                                                                                    To Machine Learning
                                                                                    (Scikit-Learn)</a>
                                                                            </h3>
                                                                            <p>Moodle Complete Guideline is a practical,
                                                                                step-by-step course that shows you how
                                                                                to install, configure,</p>
                                                                            <div class="price">
                                                                                $24
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=21"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=20">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/282/course/overviewfiles/courses19.jpg"
                                                                                    alt="Project Management Fundamentals (Agile)">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=20"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=20">Project
                                                                                    Management Fundamentals (Agile)</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $30
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=20">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/282/course/overviewfiles/courses19.jpg"
                                                                                    alt="Project Management Fundamentals (Agile)">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=20"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=20">Project
                                                                                    Management Fundamentals (Agile)</a>
                                                                            </h3>
                                                                            <p>Moodle Complete Guideline is a practical,
                                                                                step-by-step course that shows you how
                                                                                to install, configure,</p>
                                                                            <div class="price">
                                                                                $30
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=20"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=16">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/97/course/overviewfiles/courses20.jpg"
                                                                                    alt="Build a Data Science Website with PHP">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=16"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=16">Build
                                                                                    a Data Science Website with PHP</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $20
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=16">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/97/course/overviewfiles/courses20.jpg"
                                                                                    alt="Build a Data Science Website with PHP">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=16"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=16">Build
                                                                                    a Data Science Website with PHP</a>
                                                                            </h3>
                                                                            <p>Moodle Complete Guideline is a practical,
                                                                                step-by-step course that shows you how
                                                                                to install, configure,</p>
                                                                            <div class="price">
                                                                                $20
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=16"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=15">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/96/course/overviewfiles/courses14.jpg"
                                                                                    alt="Olan Mastering in Data Science ">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=15"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=15">Olan
                                                                                    Mastering in Data Science </a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $19
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=15">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/96/course/overviewfiles/courses14.jpg"
                                                                                    alt="Olan Mastering in Data Science ">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=15"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=15">Olan
                                                                                    Mastering in Data Science </a>
                                                                            </h3>
                                                                            <p>Course Overview
                                                                                Moodle Complete Guideline is a
                                                                                practical, step-by-step course that
                                                                                shows you how to install,</p>
                                                                            <div class="price">
                                                                                $19
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>10/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=15"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=14">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/95/course/overviewfiles/courses22.jpg"
                                                                                    alt="Data Visualization with Tableau">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=14"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=14">Data
                                                                                    Visualization with Tableau</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $33
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>1/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=14">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/95/course/overviewfiles/courses22.jpg"
                                                                                    alt="Data Visualization with Tableau">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=14"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=14">Data
                                                                                    Visualization with Tableau</a>
                                                                            </h3>
                                                                            <p>Course Overview
                                                                                Moodle Complete Guideline is a
                                                                                practical, step-by-step course that
                                                                                shows you how to install,</p>
                                                                            <div class="price">
                                                                                $33
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>1/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=14"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-md-6">
                                                                <div class="courses-show-hide-style">
                                                                    <div class="education-courses-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=5">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/81/course/overviewfiles/courses4.jpg"
                                                                                    alt="Numpy Essentials for Data Science">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=5"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="Course White Shape">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=5">Numpy
                                                                                    Essentials for Data Science</a>
                                                                            </h3>
                                                                            <div class="price">
                                                                                $35
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>1/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>
                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="education-courses-hover-card wrap-bg">
                                                                        <div class="image">
                                                                            <a
                                                                                href="https://olan-moodle.hibootstrap.com/course/view.php?id=5">
                                                                                <img class="img-whp"
                                                                                    src="https://olan-moodle.hibootstrap.com/pluginfile.php/81/course/overviewfiles/courses4.jpg"
                                                                                    alt="Numpy Essentials for Data Science">
                                                                            </a>
                                                                            <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=5"
                                                                                class="tag-btn wrap">Data Science</a>
                                                                            <div class="vector">
                                                                                <img src="https://olan-moodle.hibootstrap.com/theme/olan/pix/courses/vector2.png"
                                                                                    alt="image">
                                                                            </div>
                                                                        </div>
                                                                        <div class="content">
                                                                            <h3>
                                                                                <a
                                                                                    href="https://olan-moodle.hibootstrap.com/course/view.php?id=5">Numpy
                                                                                    Essentials for Data Science</a>
                                                                            </h3>
                                                                            <p>Course Overview
                                                                                Moodle Complete Guideline is a
                                                                                practical, step-by-step course that
                                                                                shows you how to install,</p>
                                                                            <div class="price">
                                                                                $35
                                                                            </div>
                                                                            <ul class="info-list">
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="18"
                                                                                        viewBox="0 0 14 18" fill="none">
                                                                                        <path
                                                                                            d="M1 6.14258C1 4.02158 1 2.96033 1.65925 2.30183C2.31775 1.64258 3.379 1.64258 5.5 1.64258H8.5C10.621 1.64258 11.6823 1.64258 12.3408 2.30183C13 2.96033 13 4.02158 13 6.14258V12.1426C13 14.2636 13 15.3248 12.3408 15.9833C11.6823 16.6426 10.621 16.6426 8.5 16.6426H5.5C3.379 16.6426 2.31775 16.6426 1.65925 15.9833C1 15.3248 1 14.2636 1 12.1426V6.14258Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path
                                                                                            d="M12.9235 12.1426H3.9235C3.226 12.1426 2.87725 12.1426 2.59075 12.2191C2.20923 12.3214 1.86137 12.5223 1.58213 12.8017C1.3029 13.0811 1.10212 13.429 1 13.8106"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M4 5.39258H10M4 8.01758H7.75M12.625 14.3926H4"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5"
                                                                                            stroke-linecap="round" />
                                                                                    </svg>
                                                                                    <span>1/09/25</span>
                                                                                </li>
                                                                                <li>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="14" height="19"
                                                                                        viewBox="0 0 14 19" fill="none">
                                                                                        <path
                                                                                            d="M7.0001 7.85714C8.89365 7.85714 10.4287 6.32212 10.4287 4.42857C10.4287 2.53502 8.89365 1 7.0001 1C5.10656 1 3.57153 2.53502 3.57153 4.42857C3.57153 6.32212 5.10656 7.85714 7.0001 7.85714Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                        <path opacity="0.5"
                                                                                            d="M7 17.2858C10.3137 17.2858 13 15.7508 13 13.8573C13 11.9637 10.3137 10.4287 7 10.4287C3.68629 10.4287 1 11.9637 1 13.8573C1 15.7508 3.68629 17.2858 7 17.2858Z"
                                                                                            stroke="#4B5563"
                                                                                            stroke-width="1.5" />
                                                                                    </svg>

                                                                                    <span>1 Learners</span>
                                                                                </li>
                                                                            </ul>
                                                                            <ul class="info-bottom">
                                                                                <li>
                                                                                    <a href="https://olan-moodle.hibootstrap.com/course/view.php?id=5"
                                                                                        class="default-btn">
                                                                                        Enroll Now
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="18" height="18"
                                                                                            viewBox="0 0 18 18"
                                                                                            fill="none">
                                                                                            <path opacity="0.5"
                                                                                                d="M5.48788 14.1143C5.83716 14.1143 6.17214 14.253 6.41913 14.5C6.66611 14.747 6.80486 15.082 6.80486 15.4313C6.80486 15.7806 6.66611 16.1156 6.41913 16.3626C6.17214 16.6096 5.83716 16.7484 5.48788 16.7484C5.13859 16.7484 4.80361 16.6096 4.55663 16.3626C4.30965 16.1156 4.1709 15.7806 4.1709 15.4313C4.1709 15.082 4.30965 14.747 4.55663 14.5C4.80361 14.253 5.13859 14.1143 5.48788 14.1143ZM13.3898 14.1143C13.739 14.1143 14.074 14.253 14.321 14.5C14.568 14.747 14.7067 15.082 14.7067 15.4313C14.7067 15.7806 14.568 16.1156 14.321 16.3626C14.074 16.6096 13.739 16.7484 13.3898 16.7484C13.0405 16.7484 12.7055 16.6096 12.4585 16.3626C12.2115 16.1156 12.0728 15.7806 12.0728 15.4313C12.0728 15.082 12.2115 14.747 12.4585 14.5C12.7055 14.253 13.0405 14.1143 13.3898 14.1143Z"
                                                                                                stroke="white"
                                                                                                stroke-width="1.5" />
                                                                                            <path
                                                                                                d="M0.877557 0.322971C0.712695 0.264985 0.531552 0.274871 0.373977 0.350452C0.216403 0.426034 0.0953048 0.561121 0.0373235 0.725995C-0.0206579 0.890869 -0.0107731 1.07203 0.0648034 1.22961C0.14038 1.3872 0.275457 1.5083 0.44032 1.56629L0.877557 0.322971ZM17.0404 6.98824L17.6849 7.12083L17.6857 7.11731L17.0404 6.98824ZM3.91452 6.88024V4.49019H2.59753V6.88024H3.91452ZM1.10671 0.403751L0.877557 0.322971L0.44032 1.56629L0.669474 1.64619L1.10671 0.403751ZM8.50639 12.5788H13.1615V11.2617H8.50639V12.5788ZM3.91452 4.49019C3.91452 3.86941 3.91539 3.35136 3.87062 2.93078C3.82233 2.49439 3.72136 2.09663 3.47377 1.73487L2.38594 2.4777C2.46496 2.59361 2.52642 2.75341 2.56066 3.07214C2.59666 3.4058 2.59753 3.84044 2.59753 4.49019H3.91452ZM0.669474 1.64619C1.25597 1.85253 1.64141 1.98951 1.925 2.13C2.19103 2.25995 2.30868 2.36531 2.38594 2.47858L3.47377 1.73487C3.22442 1.36961 2.89166 1.13604 2.50447 0.945507C2.13571 0.764629 1.66336 0.599556 1.10671 0.403751L0.669474 1.64619ZM2.59753 6.88024C2.59753 8.15605 2.60983 9.07537 2.72923 9.7778C2.8583 10.5277 3.11555 11.065 3.59405 11.5708L4.55018 10.6646C4.26922 10.3679 4.11733 10.0781 4.02778 9.55566C3.9312 8.98493 3.91452 8.18766 3.91452 6.88024H2.59753ZM8.50639 11.2617C7.26228 11.2617 6.39922 11.26 5.74863 11.1678C5.12087 11.0791 4.78987 10.9175 4.55018 10.6646L3.59405 11.5708C4.11557 12.1213 4.7767 12.361 5.56338 12.4717C6.32722 12.5805 7.30267 12.5788 8.50639 12.5788V11.2617ZM3.25603 4.34268H13.906V3.02561H3.2569L3.25603 4.34268ZM16.3951 6.85478L15.9561 8.98405L17.2468 9.24922L17.6849 7.12083L16.3951 6.85478ZM13.9078 4.34268C14.6593 4.34268 15.3213 4.34356 15.8437 4.40151C16.1019 4.43195 16.2985 4.47117 16.4337 4.51917C16.5751 4.56922 16.5979 4.60697 16.5865 4.59205L17.6304 3.78951C17.4241 3.52083 17.1344 3.36892 16.8701 3.27673C16.5843 3.18266 16.289 3.12081 15.9895 3.09234C15.3793 3.02473 14.6347 3.02561 13.9078 3.02561V4.34268ZM17.6857 7.11731C17.835 6.37273 17.9614 5.74756 17.9922 5.24707C18.0246 4.73253 17.9658 4.22502 17.6304 3.78951L16.5865 4.59205C16.6409 4.66317 16.7006 4.79048 16.6778 5.16629C16.6541 5.55614 16.5514 6.07683 16.3951 6.85917L17.6857 7.11731ZM13.1615 12.5788C13.8305 12.5788 14.3924 12.5797 14.8455 12.5243C15.3152 12.4673 15.7445 12.3408 16.1185 12.0361L15.2862 11.015C15.1765 11.1045 15.0211 11.1765 14.6848 11.2169C14.331 11.2608 13.8639 11.2617 13.1615 11.2617V12.5788ZM15.9579 8.98405C15.8156 9.67156 15.7208 10.1281 15.6067 10.4662C15.4987 10.7876 15.396 10.9254 15.2862 11.015L16.1185 12.0361C16.4934 11.7306 16.7033 11.3363 16.8543 10.8868C17 10.4548 17.1124 9.90512 17.2476 9.2501L15.9579 8.98405Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
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


                    <aside id="block-region-fullwidth-bottom" class="block-region" data-blockregion="fullwidth-bottom"
                        data-droptarget="1" aria-labelledby="fullwidth-bottom-block-region-heading">
                        <h2 class="visually-hidden" id="fullwidth-bottom-block-region-heading">Blocks</h2>
                    </aside>
                </div>


                
            </div>
        </div>
   
@endsection        