<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/drodo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 09:37:47 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ url('assets/img/favicon.png') }}">
</head>

<body>

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    {{-- <ul class="top-header-contact-info">
                        <li><i class='bx bx-phone-call'></i> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                        <li><i class='bx bx-map'></i> <a href="#" target="_blank">6890 Blvd, The Bronx, NY 1058,
                                USA</a>
                        </li>
                    </ul> --}}
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu">
                        <li>
                            @auth
                                {{ Auth::user()->name }}
                            <li><a href="{{ url('/logout') }}">logout</a></li>
                            <li><a href="{{ url('/my_account') }}">My Account</a></li>
                        @else
                            <a href="{{ url('/login') }}">login</a>&nbsp;&nbsp; &nbsp;
                            <li><a href="{{ url('/login') }}">Sign up</a></li>
                        @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{ url('assets/img/logo-moo.png') }}" alt="logo"  width="50px" height="50px">
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- <img src="{{ url('assets/img/logo.png') }}" alt="logo"> --}}
                        <img src="{{ url('assets/img/logo-moo.png') }}" alt="logo" width="50px" height="50px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                            </li>
                            <li class="nav-item megamenu"><a href="#" class="nav-link">Categories<i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="submenu-title">Instruments</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Digital B.P Monitor</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-with-categories.html">Digital
                                                                Thermometer</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">Ear Thermometer</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Smart
                                                                Thermometer
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">PPE Kit</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Reusable PPE Kit</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-with-categories.html">PPE
                                                                Gown</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">PPE Mask</a></li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Disposal
                                                                PPE Kit
                                                            </a></li>

                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Medication</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Vitamin C</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-with-categories.html">VitaminD</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">Vitamin E</a></li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Zinc Tablet
                                                        </a></li>

                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Face Mask</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">3 Ply Mask</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-with-categories.html">N95 Face Mask</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">N99 Face Mask</a>
                                                        </li>
                                                        <li><a href="products-without-sidebar.html">Surgical Mask</a>
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item megamenu"><a href="#" class="nav-link">Products<i
                                        class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="submenu-title">Products 1</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Diagnostics Sets</a>
                                                        </li>
                                                        <li><a
                                                                href="products-left-sidebar-with-categories.html">Antiseptic</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">Microscope</a></li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Pharmacy
                                                            </a></li>
                                                        <li><a href="products-without-sidebar.html">Accessories</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-fullwidth.html">Equipments
                                                            </a></li>
                                                        <li><a href="products-right-sidebar-fullwidth.html">Covid
                                                                Special
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Products 2</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Diagnostics Sets</a>
                                                        </li>
                                                        <li><a
                                                                href="products-left-sidebar-with-categories.html">Antiseptic</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">Microscope</a></li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Pharmacy
                                                            </a></li>
                                                        <li><a href="products-without-sidebar.html">Accessories</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-fullwidth.html">Equipments
                                                            </a></li>
                                                        <li><a href="products-right-sidebar-fullwidth.html">Covid
                                                                Special
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Products 3</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="products-left-sidebar.html">Diagnostics Sets</a>
                                                        </li>
                                                        <li><a
                                                                href="products-left-sidebar-with-categories.html">Antiseptic</a>
                                                        </li>
                                                        <li><a href="products-right-sidebar.html">Microscope</a></li>
                                                        <li><a href="products-right-sidebar-with-categories.html">Pharmacy
                                                            </a></li>
                                                        <li><a href="products-without-sidebar.html">Accessories</a>
                                                        </li>
                                                        <li><a href="products-left-sidebar-fullwidth.html">Equipments
                                                            </a></li>
                                                        <li><a href="products-right-sidebar-fullwidth.html">Covid
                                                                Special
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <ul class="megamenu-submenu">
                                                        <li>
                                                            <div class="aside-trending-products">
                                                                <img src="assets/img/navbar/navbar-img1.jpg"
                                                                    alt="image">
                                                                <div class="category">
                                                                    <h4>Top Trending</h4>
                                                                </div>
                                                                <a href="#" class="link-btn"></a>
                                                            </div>
                                                            <div class="aside-trending-products">
                                                                <img src="assets/img/navbar/navbar-img2.jpg"
                                                                    alt="image">
                                                                <div class="category">
                                                                    <h4>Popular Products</h4>
                                                                </div>
                                                                <a href="#" class="link-btn"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-option">
                            <div class="option-item">
                                <div class="wishlist-btn">
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i></a>
                                </div>
                            </div>
                            {{-- show cart items --}}
                            <?php
                            $session = Session::getId();
                            $r = DB::table('carts')
                                ->where('session_id', $session)
                                ->get();
                            
                            if (Auth::check()) {
                                $c = DB::table('carts')
                                    ->where('user_email', Auth::user()->email)
                                    ->get();
                            }
                            ?>
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='bx bx-shopping-bag'></i><span>
                                            @if (Auth::check())
                                                {{ $c->count() }}
                                            @else
                                                {{ $r->count() }}
                                            @endif

                                        </span></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="search-btn bx bx-search-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form action="{{url('/search')}}" method="get">
                        <input type="text" name="query" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class='bx bx-search-alt'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @yield('content')


    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <a href="#" class="logo d-inline-block">
                            <img src="{{ url('assets/img/logo-moo.png') }}" alt="logo" width="50px" height="50px">
                        <ul class="footer-contact-info">
                            <li><span>Hotline:</span> <a href="#">16768</a></li>
                            <li><span>Phone:</span> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                            <li><span>Email:</span> <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#5d35383131321d392f323932733e3230"><span
                                        class="_cf_email_"
                                        data-cfemail="fd9598919192bd998f929992d39e9290">[email&#160;protected]</span></a>
                            </li>
                            <li><span>Address:</span> <a href="#" target="_blank">6890 Blvd, The Bronx, NY 1058,
                                    USA</a>
                            </li>
                        </ul>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class='bx bxl-facebook-square'></i></a></li>
                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-pinterest'></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Information</h3>
                        <ul class="link-list">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-of-service.html">Terms & Conditions</a></li>
                            <li><a href="customer-service.html">Delivery Information</a></li>
                            <li><a href="customer-service.html">Orders and Returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Customer Care</h3>
                        <ul class="link-list">
                            <li><a href="faq.html">Help & FAQs</a></li>
                            <li><a href="profile-authentication.html">My Account</a></li>
                            <li><a href="cart.html">Order History</a></li>
                            <li><a href="cart.html">Wishlist</a></li>
                            <li><a href="contact.html">Newsletter</a></li>
                            <li><a href="purchase-guide.html">Purchasing Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="single-footer-widget">
                        <h3>Newsletter</h3>
                        <p>Sign up for our mailing list to get the latest updates & offers.</p>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="text" class="input-newsletter" placeholder="Enter your email address"
                                name="EMAIL" required autocomplete="off">
                            <button type="submit" class="default-btn">Subscribe Now</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>Copyright @2021 ANS. Designed By <a href="#" target="_blank">ANS</a></p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-types">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li>We accept payment via:</li>
                                <li><a href="#" target="_blank"><img
                                            src="{{ url('assets/img/payment-types/visa.png') }}"
                                            alt="image"></a>
                                </li>
                                <li><a href="#" target="_blank"><img
                                            src="{{ url('assets/img/payment-types/mastercard.png') }}"
                                            alt="image"></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="{{ url('assets/img/payment-types/paypal.png') }}"
                                            alt="image"></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="{{ url('assets/img/payment-types/descpver.png') }}"
                                            alt="image"></a></li>
                                <li><a href="#" target="_blank"><img
                                            src="{{ url('assets/img/payment-types/american-express.png') }}"
                                            alt="image"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="products-image">
                            <img src="{{ url('assets/img/products/products-img1.jpg') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="products-content">
                            <h3><a href="#">Coronavirus Face Mask</a></h3>
                            <div class="price">
                                <span class="old-price">$45.00</span>
                                <span class="new-price">$39.00</span>
                            </div>
                            <div class="products-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <a href="#" class="rating-count">3 reviews</a>
                            </div>
                            <ul class="products-info">
                                <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                                <li><span>Products Type:</span> <a href="#">Mask</a></li>
                            </ul>
                            <div class="products-color-switch">
                                <h4>Color:</h4>
                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Black" class="color-black"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="White" class="color-white"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Green" class="color-green"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top"
                                            title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div>
                            <div class="products-size-wrapper">
                                <h4>Size:</h4>
                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                                <button type="submit" class="default-btn"><i class="flaticon-trolley"></i> Add to
                                    Cart</button>
                            </div>
                            <a href="#" class="view-full-info">or View Full Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>
                <div class="modal-body">
                    <h3>My Cart </h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/products-img1.jpg"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/products-img2.jpg"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/products-img3.jpg"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="#" class="default-btn">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>
                <div class="modal-body">
                    <h3>My Cart (3)</h3>
                    <?php
                    $session = Session::getId();
                    $cart = DB::table('carts')
                        ->where('session_id', $session)
                        ->get();
                    
                    if (Auth::check()) {
                        $cart = DB::table('carts')
                            ->where('user_email', Auth::user()->email)
                            ->get();
                    }
                    ?>
                    <div class="products-cart-content">
                        <?php $total_amount = 0; ?>
                        <?php $Shipping = 149.0; ?>
                        @if (Auth::check())
                            @foreach ($cart as $ct)
                                <div class="products-cart d-flex align-items-center">
                                    <div class="products-image">
                                        <a href="#"><img src="{{ url('/upload/' . $ct->product_image) }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="products-content">
                                        <h3><a href="#">{{ $ct->product_name }}</a></h3>
                                        <div class="products-price">
                                            <span>{{ $ct->product_quantity }}</span>
                                            <span>x</span>
                                            <span class="price">{{ $ct->product_price }}</span>
                                        </div>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                                <?php $total_amount = $total_amount + $ct->product_price * $ct->product_quantity; ?>
                            @endforeach
                        @else
                            @foreach ($cart as $ct)
                                <div class="products-cart d-flex align-items-center">
                                    <div class="products-image">
                                        <a href="#"><img src="{{ url('/upload/' . $ct->product_image) }}"
                                                alt="image"></a>
                                    </div>
                                    <div class="products-content">
                                        <h3><a href="#">{{ $ct->product_name }}</a></h3>
                                        <div class="products-price">
                                            <span>{{ $ct->product_quantity }}</span>
                                            <span>x</span>
                                            <span class="price">{{ $ct->product_price }}</span>
                                        </div>
                                    </div>
                                    <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                                </div>
                                <?php $total_amount = $total_amount + $ct->product_price * $ct->product_quantity; ?>
                            @endforeach
                        @endif
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Total</span>
                        <span class="Total">Rs.<?php echo $total_amount + $Shipping; ?></span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="#" class="default-btn">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>
                <div class="modal-body">
                    <h3>My Wishlist (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{ url('assets/img/products/products-img1.jpg') }}"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{ url('assets/img/products/products-img2.jpg') }}"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{ url('assets/img/products/products-img3.jpg') }}"
                                        alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="#" class="default-btn">View Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
                </button>
                <div class="modal-body">
                    <div class="woocommerce-widget-area">
                        <div class="woocommerce-widget price-list-widget">
                            <h3 class="woocommerce-widget-title">Filter By Price</h3>
                            <div class="collection-filter-by-price">
                                <input class="js-range-of-price" type="text" data-min="0" data-max="1055"
                                    name="filter_by_price" data-step="10">
                            </div>
                        </div>
                        <div class="woocommerce-widget color-list-widget">
                            <h3 class="woocommerce-widget-title">Color</h3>
                            <ul class="color-list-row">
                                <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                                <li><a href="#" title="Red" class="color-red"></a></li>
                                <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                                <li><a href="#" title="White" class="color-white"></a></li>
                                <li><a href="#" title="Blue" class="color-blue"></a></li>
                                <li><a href="#" title="Green" class="color-green"></a></li>
                                <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                <li><a href="#" title="Pink" class="color-pink"></a></li>
                                <li><a href="#" title="Violet" class="color-violet"></a></li>
                                <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                                <li><a href="#" title="Lime" class="color-lime"></a></li>
                                <li><a href="#" title="Plum" class="color-plum"></a></li>
                                <li><a href="#" title="Teal" class="color-teal"></a></li>
                            </ul>
                        </div>
                        <div class="woocommerce-widget brands-list-widget">
                            <h3 class="woocommerce-widget-title">Brands</h3>
                            <ul class="brands-list-row">
                                <li><a href="#">Gucci</a></li>
                                <li><a href="#">Virgil Abloh</a></li>
                                <li><a href="#">Balenciaga</a></li>
                                <li class="active"><a href="#">Moncler</a></li>
                                <li><a href="#">Fendi</a></li>
                                <li><a href="#">Versace</a></li>
                            </ul>
                        </div>
                        <div class="woocommerce-widget woocommerce-ads-widget">
                            <img src="{{ url('assets/img/ads.jpg') }}" alt="image">
                            <div class="content">
                                <span>New Arrivals</span>
                                <h3>Modern Electronic Thermometer</h3>
                                <a href="#" class="default-btn"><i class="flaticon-trolley"></i> Shop Now</a>
                            </div>
                            <a href="#" class="link-btn"></a>
                        </div>
                        <div class="woocommerce-widget best-seller-widget">
                            <h3 class="woocommerce-widget-title">Best Seller</h3>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Thermometer Gun</a></h4>
                                    <span>$99.00</span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Protective Gloves</a></h4>
                                    <span>$65.00</span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star-half'></i>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall"><a href="#">Cosmetic Container</a></h4>
                                    <span>$139.00</span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star'></i>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

    <script data-cfasync="false" src="{{ url('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/fancybox.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ url('assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ url('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ url('assets/js/rangeSlider.min.js') }}"></script>
    <script src="{{ url('assets/js/sticky-sidebar.min.js') }}"></script>
    <script src="{{ url('assets/js/wow.min.js') }}"></script>
    <script src="{{ url('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ url('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ url('assets/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
    <script>
        function confirmation(){
        //  alert("hello");
		if($('.stripe').is(':checked') || $('.cod').is(':checked') || $('.paytm').is(':checked') || $('.Instamojo').is(':checked') || $('.razorpay').is(':checked') )
			{
				// alert('checked');
			}
        else
        {
        	alert('Please select payment method');
            return false;
        }
        }
    </script>
</body>

<!-- Mirrored from templates.envytheme.com/drodo/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 09:38:17 GMT -->

</html>
