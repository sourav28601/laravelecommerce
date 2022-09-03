@extends('front.master')
@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Cart</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="cart-area ptb-70">
        <div class="container">

            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total_amount = 0; ?>
                        @foreach ($cart as $ct)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="{{ url('/upload/' . $ct->product_image) }}" alt="item">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">{{ $ct->product_name }}</a>
                                </td>
                                <td class="product-price">
                                    <span class="unit-amount">Rs.{{ $ct->product_price }}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="input-counter bg-dark text-white">
                                        <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                        <input type="text" min="1" value="{{ $ct->product_quantity }}">
                                        <span class="plus-btn"><i class='bx bx-plus'></i></span>

                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span
                                        class="subtotal-amount">Rs.{{ $ct->product_price * $ct->product_quantity }}</span>
                                    <a href="{{ url('/cart/delete/' . $ct->id) }}" class="remove"><i
                                            class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                            <?php $total_amount = $total_amount + $ct->product_price * $ct->product_quantity; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="cart-buttons">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-sm-7 col-md-7">
                        <form action="{{ url('/add_to_cart') }}" method="post">
                            @csrf
                            @isset($valueCoupon)
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code"
                                        value="{{ $valueCoupon }}" readonly>
                                    <button type="button" >Coupon applied!</button>
                                </div>
                            @else
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon_code"
                                        id="coupon_code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            @endisset

                            {{-- @isset($valueCoupon)
                            <p>{{$valueCoupon}}</p>  
                            @endisset --}}

                            @if (session('message'))
                                <div class="alert alert-danger">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </form>


                    </div>
                    <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                        <a href="#" class="default-btn"><i class="flaticon-view"></i> Update Cart</a>
                    </div>

                </div>
            </div>

            <div class="cart-totals">
                <h3>Cart Totals</h3>
                <ul>
                    @isset($valueCoupon)
                        <li>Total <span><?php echo $total_amount - $valueCoupon; ?></span></li>
                    @else
                        <li>Total <span><?php echo $total_amount; ?></span></li>
                    @endisset
                </ul>

                <a href="{{ url('/checkout') }}" class="default-btn"><i class="flaticon-trolley"></i> Proceed to
                    Checkout</a>
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
