  <!-- START HEADER AREA -->
  <header class="header-area header-wrapper">
        <!-- header-top-bar -->
        <div class="header-top-bar plr-185">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div class="call-us">
                            <p class="mb-0 roboto">(+1) 512766-4912</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-link clearfix">
                            <ul class="link f-right">
                                <li>
                                    <a href="{{ url('/account') }}">
                                        <i class="zmdi zmdi-account"></i>
                                        My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/wishlist') }}">
                                        <i class="zmdi zmdi-favorite"></i>
                                        Wish List (0)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/login') }}">
                                        <i class="zmdi zmdi-lock"></i>
                                        Login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-middle-area -->
        <div id="sticky-header" class="header-middle-area plr-185">
            <div class="container-fluid">
                <div class="full-width-mega-dropdown">
                    <div class="row">
                        <!-- logo -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="logo">
                                <a href="{{ url('/') }}">4in1 Telecom</a>
                            </div>
                        </div>
                        <!-- primary-menu -->
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <nav id="primary-menu">
                                <ul class="main-menu text-center">
                                    <li><a href="{{ url('/index') }}">Home</a></li>
                                    <li class="mega-parent"><a href="{{ url('/shop') }}">Products</a>
                                        <div class="mega-menu-area clearfix">
                                            <div class="mega-menu-link f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Smart Phone</li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">All Mobile Phones</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Smart phones</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Android Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Windows Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Refurbished Mobiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">All Mobile Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Note Book</li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">All Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Smart notebooks</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Android Note Book</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Windows Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Refurbished Note Books</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Note Books Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">Tablets</li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">All Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Smart tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Android Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Windows Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Refurbished Tablets</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Tablets Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Cases & Covers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu-photo f-left">
                                                <a href="{{ url('/#') }}">
                                                    <img src="{{ asset('frontend/img/mega-menu/1.jpg') }}" alt="mega menu image">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mega-parent"><a href="{{ url('/#') }}">Pages</a>
                                        <div class="mega-menu-area mega-menu-area-2 clearfix">
                                            <div class="mega-menu-link mega-menu-link-2  f-left">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="{{ url('/shop') }}">Shop</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/SingleProduct') }}">Single Product</a>
                                                    </li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li class="menu-title">page list</li>
                                                    <li>
                                                        <a href="{{ url('/cart') }}">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/wishlist') }}">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/checkout') }}">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/order') }}">Order</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/login') }}">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/account') }}">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/about') }}">About us</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/error') }}">404</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="{{ url('/blog') }}">Blog</a>
                                        <ul class="dropdwn">
                                            <li><a href="{{ url('/blog-left-sidebar') }}">Dropdown Repeat</a>
                                                <ul class="dropdwn-repeat">
                                                    <li>
                                                        <a href="{{ url('/blog') }}">Blog</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/#') }}">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ url('/blog') }}">Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/SingleBlog') }}">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about') }}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header-search & total-cart -->
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="search-top-cart  f-right">
                                <!-- header-search -->
                                <div class="header-search f-left">
                                    <div class="header-search-inner">
                                       <button class="search-toggle">
                                        <i class="zmdi zmdi-search"></i>
                                       </button>
                                        <form action="#">
                                            <div class="top-search-box">
                                                <input type="text" placeholder="Search here your product...">
                                                <button type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                                <!-- total-cart -->
                                <div class="total-cart f-left">
                                    <div class="total-cart-in">
                                        <div class="cart-toggler">
                                            <a href="{{ url('/#') }}">
                                                <span class="cart-quantity">02</span><br>
                                                <span class="cart-icon">
                                                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                </span>
                                            </a>                            
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="top-cart-inner your-cart">
                                                    <h5 class="text-capitalize">Your Cart</h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-cart-pro">
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="{{ url('/#') }}">
                                                                <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="Cart Product" />
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="{{ url('/#') }}">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="{{ url('/#') }}">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- single-cart -->
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-img f-left">
                                                            <a href="{{ url('/#') }}">
                                                                <img src="{{ asset('frontend/img/cart/1.jpg') }}" alt="Cart Product" />
                                                            </a>
                                                            <div class="del-icon">
                                                                <a href="{{ url('/#') }}">
                                                                    <i class="zmdi zmdi-close"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="cart-info f-left">
                                                            <h6 class="text-capitalize">
                                                                <a href="{{ url('/#') }}">Dummy Product Name</a>
                                                            </h6>
                                                            <p>
                                                                <span>Brand <strong>:</strong></span>Brand Name
                                                            </p>
                                                            <p>
                                                                <span>Model <strong>:</strong></span>Grand s2
                                                            </p>
                                                            <p>
                                                                <span>Color <strong>:</strong></span>Black, White
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner subtotal">
                                                    <h4 class="text-uppercase g-font-2">
                                                        Total  =  
                                                        <span>$ 500.00</span>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner view-cart">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('/#') }}">View cart</a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="top-cart-inner check-out">
                                                    <h4 class="text-uppercase">
                                                        <a href="{{ url('/#') }}">Check out</a>
                                                    </h4>
                                                </div>
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
    </header>
    <!-- END HEADER AREA -->

    <!-- START MOBILE MENU AREA -->
    <div class="mobile-menu-area hidden-lg hidden-md">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{ url('/index') }}">Home</a></li>
                                <li>
                                    <a href="{{ url('/shop') }}">Products</a>
                                </li>
                                <li><a href="{{ url('/#') }}">Pages</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('/shop') }}">Shop</a>
                                        <li>
                                            <a href="{{ url('/SingleProduct') }}">Single Product</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/cart') }}">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/wishlist') }}">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/checkout') }}">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/order') }}">Order</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/login') }}">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/account') }}">My Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/about') }}">About us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/error') }}">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/blog') }}">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('/blog') }}">Blog</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/SingleBlog') }}">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MOBILE MENU AREA -->