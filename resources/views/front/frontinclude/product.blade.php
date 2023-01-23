<section class="products-area pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Product</h2>
        </div>
        <div class="products-slides owl-carousel owl-theme">
            @foreach ($product as $p)
            <div class="single-products-box">

                <div class="image">
                    <a href="{{url('/product_detail/'.$p->id)}}" class="d-block"><img
                            src="{{url('upload/'.$p->product_image)}}" alt="image"></a>
                    <div class="new">New</div>
                    <div class="buttons-list">

                    </div>
                </div>
                <div class="content">
                    <h3><a href="{{url('/product_detail/'.$p->id)}}">{{$p->product_name}}</a></h3>
                    <div class="price">
                        <span class="new-price">₹{{$p->product_price}}</span>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>


<section class="products-promotions-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-products-promotions-box">
                    <img src="assets/img/promotions/promotions-img1.jpg" alt="image">
                    <div class="content">
                        <span class="sub-title">Special Deal</span>
                        <h3>Mega Sale Mela</h3>
                        <span class="discount"><span>up to</span> 70% OFF</span>
                        <a href="products-left-sidebar.html" class="link-btn">Shop Now <i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-products-promotions-box">
                    <img src="assets/img/promotions/promotions-img2.jpg" alt="image">
                    <div class="content">
                        <span class="sub-title">New Arrivals</span>
                        <h3>Hand Washer</h3>
                        <span class="discount"><span>up to</span> ₹ 49.00</span>
                        <a href="products-left-sidebar.html" class="link-btn">Shop Now <i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-products-promotions-box">
                    <img src="assets/img/promotions/promotions-img3.jpg" alt="image">
                    <div class="content">
                        <span class="sub-title">Hot Collection</span>
                        <h3>Glucose Meter</h3>
                        <span class="discount"><span>up to</span> 20% OFF</span>
                        <a href="products-left-sidebar.html" class="link-btn">Shop Now <i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-area pb-40">
    <div class="container">
        <div class="section-title">
            <h2>New Arrivals</h2>
        </div>

        <div class="row">
            @foreach ($product as $p)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="single-products-1.html" class="d-block"><img
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
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
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
                        <div class="price">
                            <span class="new-price">₹{{$p->product_price}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>




