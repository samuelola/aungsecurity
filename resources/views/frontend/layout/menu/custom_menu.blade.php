 <div class="navbar-area navbar navbar-expand-lg bg-white sticky" id="navbar">
            <div class="   container-fluid">
                <a class="navbar-brand" href="/">
                    <img class="main-logo"
                        src="{{asset('aung_logo_blue.png')}}"
                        alt="AungSolution" style="width: 100px;">
                        

                </a>

                <a class="navbar-toggler toggle-btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
                    role="button" aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
                        <!-- custom_menu -->
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('price')}}">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('product')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="#"></a>
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