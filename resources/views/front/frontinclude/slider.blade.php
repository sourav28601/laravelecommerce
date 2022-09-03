<section class="home-slides owl-carousel owl-theme">
    @foreach ($slider as $s)
    <div class="single-banner-item">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="banner-content">
                                <span class="sub-title">New Arrivals</span>
                                <h1>{{$s->title}}<span> Gloves</span></h1>
                                <p>{{$s->description}}</p>
                                <div class="btn-box">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="default-btn"><i class="flaticon-trolley"></i> Add To
                                            Cart</a>
                                        <span class="price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="banner-image text-center">
                                <img src="{{ url('upload/'.$s->image) }}"class="main-image" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</section>

