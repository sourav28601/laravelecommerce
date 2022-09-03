@extends('front.master')
@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Checkout</h1>
                <ul>
                    <li><a href="{{ '#' }}">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="checkout-area ptb-70">
        <div class="container">
            <form  method="post" action="{{url('/place_order')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label> Name <span class="required">*</span></label>
                                        <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" name="user_email" value="{{Auth::user()->email}}" class="form-control">

                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" name="address" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" name="city" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" name="state" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" name="pin_code" class="form-control" required="">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone_num" class="form-control" required="">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <h3 class="title">Your Order</h3>
                            <div class="order-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $total_amount = 0; ?>
                                        @foreach ($cart as $cat)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">{{ $cat->product_name }}</a>
                                                </td>
                                                <td class="product-total">
                                                    <span class="subtotal-amount">
                                                        {{ $cat->product_price * $cat->product_quantity }}</span>
                                                </td>
                                            </tr>
                                            <?php $total_amount = $total_amount + $cat->product_price * $cat->product_quantity; ?>
                                        @endforeach
                                        <tr>
                                            <td class="total-price">
                                                <span>Order Total</span>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount"><?php echo $total_amount; ?></span>
                                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="form-control">
                                                <input type="hidden" name="grand_total" value="{{ $total_amount}}" >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment-box">
                                <div class="payment-method">

                                    <p>
                                        <input type="radio" id="paytm"  name="payment_method" class="paytm" value="paytm">
                                        <label for="paytm">Paytm</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="cod" name="payment_method" class="cod" value="cod">
                                        <label for="cod">Cash on Delivery</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="razorpay" name="payment_method" class="razorpay" value="razorpay">
                                        <label for="razorpay">RazorPay</label>
                                    </p>
                                </div>
                                    <input type="hidden" name="submit" value="submit"  >
                                <button class="btn btn-outline-info" onclick="confirmation()">place order</button>
                            </div>
                        </div>
                    </div>
               </div>
            </form>
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
