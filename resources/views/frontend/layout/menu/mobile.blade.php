<div class="sidebar-menu-area offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a class="logo d-inline-block" href="/">
                    <img class="main-logo"
                        src="{{asset('aung_logo_blue.png')}}"
                        alt="AungSolution" style="width: 100px;">

                </a>
                <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="close-btn">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <ul class="mobile-menu">
                    <li class="dropdown nav-item">
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
                </ul>

                <div class="others-options">
                    <div class="option-item">

                        <a href="{{route('tenant_create')}}" class="default-btn">
                            Login/Signup
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>

                </div>


            </div>
        </div>