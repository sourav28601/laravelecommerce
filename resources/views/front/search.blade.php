@extends('front.master')
@section('content')


<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Search Result</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li>Search result of product</li>
            </ul>
        </div>
    </div>
</section>


<section class="products-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
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
                    {{-- <div class="woocommerce-widget woocommerce-ads-widget">
                        <img src="assets/img/ads.jpg" alt="image">
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
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="drodo-grid-sorting row align-items-center">
                    <div class="col-lg-6 col-md-6 result-count">
                        <p>We found <span class="count">99</span> products available for you</p>
                        <span class="sub-title d-lg-none"><a href="#" data-bs-toggle="modal"
                                data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i>
                                Filter</a></span>
                    </div>
                    <div class="col-lg-6 col-md-6 ordering">
                        <div class="select-box">
                            <label>Sort By:</label>
                            <select>
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Latest</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            @foreach ($product as $p )

                            @endforeach
                            <div class="image">
                                <a href="{{url('/product_detail/'.$p->id)}}" class="d-block"><img
                                    src="{{url('upload/'.$p->product_image)}}" alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">{{$p->product_name}}</a></h3>
                                <div class="discription">
                                    <span class="discription">{{$p->product_description}}</span>
                                </div><br>
                                <div class="price">
                                    <span class="new-price">{{$p->product_price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img6.jpg"
                                        alt="image"></a>
                                <div class="sale">Sale</div>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">New Microscope</a></h3>
                                <div class="price">
                                    <span class="new-price">$350.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img7.jpg"
                                        alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Hearing Aid Device</a></h3>
                                <div class="price">
                                    <span class="new-price">$55.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img8.jpg"
                                        alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Metal Stethoscope</a></h3>
                                <div class="price">
                                    <span class="new-price">$79.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img9.jpg"
                                        alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Medical Glass</a></h3>
                                <div class="price">
                                    <span class="new-price">$39.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img10.jpg"
                                        alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Isometric Equipment</a></h3>
                                <div class="price">
                                    <span class="old-price">$165.00</span>
                                    <span class="new-price">$159.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img11.jpg"
                                        alt="image"></a>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Medical Mask</a></h3>
                                <div class="price">
                                    <span class="new-price">$19.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img12.jpg"
                                        alt="image"></a>
                                <div class="sale">Sale</div>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Blood Pressure Monitor</a></h3>
                                <div class="price">
                                    <span class="new-price">$59.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="assets/img/products/products-img1.jpg"
                                        alt="image"></a>
                                <div class="new">New</div>
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="cart-btn">
                                                <a href="#">
                                                    <i class='bx bxs-cart-add'></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="price">
                                    <span class="new-price">$39.00</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="facility-area bg-f7f8fa pt-70 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class="flaticon-free-shipping"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p>Free shipping world wide</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class="flaticon-headset"></i>
                    </div>
                    <h3>Support 24/7</h3>
                    <p>Contact us 24 hours a day</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class="flaticon-secure-payment"></i>
                    </div>
                    <h3>Secure Payments</h3>
                    <p>100% payment protection</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class="flaticon-return-box"></i>
                    </div>
                    <h3>Easy Return</h3>
                    <p>Simple returns policy</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection