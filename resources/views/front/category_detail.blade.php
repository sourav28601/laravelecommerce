@extends('front.master')
@section('title', 'products by Category')
@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Products Without Sidebar</h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Products Without Sidebar</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="products-area ptb-70">
        <div class="container">
            <div class="drodo-grid-sorting row align-items-center">
                <div class="col-lg-6 col-md-6 result-count">
                    <p>We found <span class="count">99</span> products available for you</p>
                    <span class="sub-title"><a href="#" data-bs-toggle="modal" data-bs-target="#productsFilterModal"><i
                                class='bx bx-filter-alt'></i> Filter</a></span>
                </div>
                <form method="get" action="{{url('products',$category_id)}}">@csrf
                    <div class="col-lg-6 col-md-6 ordering">
                        <div class="select-box">
                            <label>Sort By:</label>
                            <input type="hidden" id="category_id" value="{{$category_id}}">
                            <select id="sortBy" onchange="sort()">
                                <option value="default">Default</option>
                                <option value="popularity">Popularity</option>
                                <option value="latest">Latest</option>
                                <option value="l_to_h">Price: low to high</option>
                                <option value="h_to_l">Price: high to low</option>
                                
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <script>
                // function sort(){
                //     const data = document.getElementById('sortBy').value;
                //     const category_id = document.getElementById('category_id').value;
                //     console.log(category_id);
                //     {{--location.href="{{url('products'.'/'.$category_id)}}";--}}
                // }
            </script>

            <div class="row">
                @foreach ($products as $p)

                <div class="col-lg-4 col-md-4 col-sm-6">

                        <div class="single-products-box">

                            <div class="image">
                                <a href="{{ url('/product_detail/' . $p->id) }}" class="d-block"><img
                                        src="{{ url('upload/' . $p->product_image) }}" alt="image"></a>
                                <div class="new">New</div>
                                <div class="buttons-list">
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="{{ url('/product_detail/' . $p->id) }}">{{ $p->product_name }}</a></h3>
                                <div class="price">
                                    <span class="new-price">₹{{ $p->product_price }}</span>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach

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
