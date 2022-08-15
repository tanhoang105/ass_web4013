<!-- slider-area -->
<section class="slider-area">
    <div class="slider-active">
        <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10">
                        <div class="slider-content">
                            <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts? It's
                                Genius.</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock instant
                                savings of 10% or more with a free Geairinfo.com account</p>
                            <a href="contact.html" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in /
                                Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10">
                        <div class="slider-content">
                            <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts? It's
                                Genius.</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock instant
                                savings of 10% or more with a free Geairinfo.com account</p>
                            <a href="contact.html" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in /
                                Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-bg" data-background="assets/img/slider/slider_bg03.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10">
                        <div class="slider-content">
                            <h2 class="title" data-animation="fadeInUp" data-delay=".2s">A Lifetime of Discounts? It's
                                Genius.</h2>
                            <p data-animation="fadeInUp" data-delay=".4s">Get rewarded for your travels – unlock instant
                                savings of 10% or more with a free Geairinfo.com account</p>
                            <a href="contact.html" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in /
                                Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider-area-end -->

<!-- booking-area -->
<div class="booking-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking-tag">
                    <ul>
                        <li><a href="booking-list.html"><i class="flaticon-flight"></i>Flights</a></li>
                        <li><a href="booking-list.html"><i class="flaticon-car-1"></i>Car Rentals</a></li>
                        <li><a href="booking-list.html"><i class="flaticon-eiffel-tower"></i>Attractions</a></li>
                        <li><a href="booking-list.html"><i class="flaticon-taxi"></i>Airport Taxis</a></li>
                    </ul>
                </div>
                <div class="booking-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab"
                                data-bs-target="#bOOKing-tab-pane" type="button" role="tab"
                                aria-controls="bOOKing-tab-pane" aria-selected="true"><i class="flaticon-flight"></i>air
                                BOOKing</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="trips-tab" data-bs-toggle="tab"
                                data-bs-target="#trips-tab-pane" type="button" role="tab"
                                aria-controls="trips-tab-pane" aria-selected="false"><i class="flaticon-file"></i> my
                                trips</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="check-tab" data-bs-toggle="tab"
                                data-bs-target="#check-tab-pane" type="button" role="tab"
                                aria-controls="check-tab-pane" aria-selected="false"><i class="flaticon-tick"></i>
                                check-in</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="flight-tab" data-bs-toggle="tab"
                                data-bs-target="#flight-tab-pane" type="button" role="tab"
                                aria-controls="flight-tab-pane" aria-selected="false"><i class="flaticon-clock"></i>
                                Flight status</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel"
                            aria-labelledby="bOOKing-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content-wrap">
                                        <div class="content-top">
                                            <ul>
                                                <li>Flights</li>
                                                <li><span>Just from $12</span>Geair Stopover</li>
                                            </ul>
                                        </div>
                                        <form action=" {{ route('client-index') }} " method=""
                                            class="booking-form">
                                            <ul>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="From" name="noi_di_cb">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="To" name="noi_den_cb">
                                                        <button class="exchange-icon"><i
                                                                class="flaticon-exchange-1"></i></button>
                                                    </div>
                                                </li>

                                                <li style="width: 301px;">
                                                    <div class="form-grp date">
                                                        <ul>
                                                            <li>
                                                                <label for="shortBy">Thời gian đi</label>
                                                                <input type="date" class=""
                                                                    placeholder="Select Date" name="gio_di">
                                                            </li>
                                                            <li>
                                                                <label for="shortBy">Thời gian đến </label>
                                                                <input type="date" class=""
                                                                    placeholder="Select Date" name="gio_den">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp economy">
                                                        <label for="text">Giá</label>
                                                        <input type="text" id="text" placeholder="Giá"
                                                            name="gia_chuyenbay">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp select">
                                                        <button class="btn btn-warning" type="submit">Tìm kiếm <i
                                                                class="flaticon-flight-1"></i> </button>
                                                    </div>
                                                </li>
                                            </ul>
                                            {{-- <div class="content-bottom p-5">
                                                <button class="btn btn-warning" type="submit">Tìm kiếm <i
                                                        class="flaticon-flight-1"></i> </button>
                                            </div> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="trips-tab-pane" role="tabpanel" aria-labelledby="trips-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content-wrap">
                                        <div class="content-top">
                                            <ul>
                                                <li>Fligths</li>
                                                <li><span>Just from $12</span>Geair Stopover</li>
                                            </ul>
                                        </div>
                                        <form action="#" class="booking-form">
                                            <ul>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="From">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="To">
                                                        <button class="exchange-icon"><i
                                                                class="flaticon-exchange-1"></i></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp select">
                                                        <label for="shortByTwo">Trip</label>
                                                        <select id="shortByTwo" name="select" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="">Tour type</option>
                                                            <option>Adventure Travel</option>
                                                            <option>Family Tours</option>
                                                            <option>Newest Item</option>
                                                            <option>Nature & wildlife</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp date">
                                                        <ul>
                                                            <li>
                                                                <label for="shortBy">Depart</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                            <li>
                                                                <label for="shortBy">Return</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp economy">
                                                        <label for="textTwo">Passenger/ Class</label>
                                                        <input type="text" id="textTwo"
                                                            placeholder="1 Passenger, Economy">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                            <a href="booking-details.html" class="btn">Show Flights <i
                                                    class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="check-tab-pane" role="tabpanel" aria-labelledby="check-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content-wrap">
                                        <div class="content-top">
                                            <ul>
                                                <li>Flights</li>
                                                <li><span>Just from $12</span>Geair Stopover</li>
                                            </ul>
                                        </div>
                                        <form action="#" class="booking-form">
                                            <ul>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="From">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="To">
                                                        <button class="exchange-icon"><i
                                                                class="flaticon-exchange-1"></i></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp select">
                                                        <label for="shortByThree">Trip</label>
                                                        <select id="shortByThree" name="select" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="">Tour type</option>
                                                            <option>Adventure Travel</option>
                                                            <option>Family Tours</option>
                                                            <option>Newest Item</option>
                                                            <option>Nature & wildlife</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp date">
                                                        <ul>
                                                            <li>
                                                                <label for="shortBy">Depart</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                            <li>
                                                                <label for="shortBy">Return</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp economy">
                                                        <label for="textThree">Passenger/ Class</label>
                                                        <input type="text" id="textThree"
                                                            placeholder="1 Passenger, Economy">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                            <a href="booking-details.html" class="btn">Show Flights <i
                                                    class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content-wrap">
                                        <div class="content-top">
                                            <ul>
                                                <li>Flights</li>
                                                <li><span>Just from $12</span>Geair Stopover</li>
                                            </ul>
                                        </div>
                                        <form action="#" class="booking-form">
                                            <ul>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="From">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp">
                                                        <input type="text" placeholder="To">
                                                        <button class="exchange-icon"><i
                                                                class="flaticon-exchange-1"></i></button>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp select">
                                                        <label for="shortByFour">Trip</label>
                                                        <select id="shortByFour" name="select" class="form-select"
                                                            aria-label="Default select example">
                                                            <option value="">Tour type</option>
                                                            <option>Adventure Travel</option>
                                                            <option>Family Tours</option>
                                                            <option>Newest Item</option>
                                                            <option>Nature & wildlife</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp date">
                                                        <ul>
                                                            <li>
                                                                <label for="shortBy">Depart</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                            <li>
                                                                <label for="shortBy">Return</label>
                                                                <input type="text" class="date"
                                                                    placeholder="Select Date">
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-grp economy">
                                                        <label for="textFour">Passenger/ Class</label>
                                                        <input type="text" id="textFour"
                                                            placeholder="1 Passenger, Economy">
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                            <a href="booking-details.html" class="btn">Show Flights <i
                                                    class="flaticon-flight-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- booking-area-end -->

<!-- features-area -->

<!-- features-area-end -->

<!-- flight-offer-area -->
<section class="flight-offer-area">
    <div class="container">


        {{-- phần hiển thị chuyến bay ra cho client --}}
        <section class="fly-next-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <span class="sub-title">Flynext Package</span>
                            <h2 class="title">Your Great Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="fly-next-nav">
                            <button class="active flaticon-car-1" data-filter="*"><a style="color:#000"
                                    href=" {{ route('client-index') }} ">Fligths</a> <i
                                    class="flaticon-flight"></i></button>

                        </div>
                    </div>
                </div>
                <div class="row fly-next-active justify-content-center">
                    @foreach ($list_chuyenbay as $item)
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item ">
                                <div class="flight-offer-item">
                                    <form action=" {{ route('route_FE_Client_Dat_Ve') }}  " method="POST">
                                        @csrf
                                        <input type="hidden" name="ma_cb" value="{{$item->ma_cb}} ">
                                        <div class="fly-next-item">
                                            <div class="fly-next-thumb">
                                                <a href=""><img width="236" height="137"
                                                        src="{{ Storage::url($item->anh_chuyen_bay) }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="fly-next-content">
                                                <input style="outline: none ; border: none ; text-align: center;"
                                                    type="text" name="gio_di_ve" value=" {{ $item->gio_di }} ">
                                                <input style="outline: none ; border: none ;text-align: center;"
                                                    type="text" name="gio_den_ve" value=" {{ $item->gio_den }} ">

                                                <h4 class="title">{{ $item->noi_di_cb }}</h4>
                                                <a href="#" class="exchange-btn"><i
                                                        class="flaticon-exchange-1"></i></a>
                                                <h4 class="title">{{ $item->noi_den_cb }}</h4>





                                                <div class="content-bottom">
                                                    <input style="outline: none ; border: none ; text-align: center;"
                                                        type="text" name="gia_ve"
                                                        value=" {{ number_format($item->gia_chuyenbay, 0, '.', '.') . ' VND/vé' }} ">

                                                </div>
                                            </div>
                                            <div class="overlay-content">
                                                <button type="submit" style=" "
                                                    class="btn btn-primary">Đặt Vé</button>
                                                    <p>Sân bay :  {{ $item->ten_sb}}</p>
                                                    <p></p>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    {{ $list_chuyenbay->appends('extParams')->links() }}
                </div>
            </div>
        </section>
    </div>
</section>
<!-- flight-offer-area-end -->

<!-- destination-area -->
<section class="destination-area destination-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title">
                    <span class="sub-title">Offer Deals</span>
                    <h2 class="title">Your Great Destination</h2>
                </div>
                <div class="destination-content">
                    <p>Get rewarded for your travels – unlock instant savings of 10% or more with a free
                        <span>Geairinfo.com</span> account
                    </p>
                    <ul>
                        <li>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer" data-count="5830"></span>+</h2>
                                    <p>Happy Customers</p>
                                </div>
                                <div class="counter-icon">
                                    <i class="flaticon-group"></i>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-item">
                                <div class="counter-content">
                                    <h2 class="count"><span class="odometer" data-count="100"></span>%</h2>
                                    <p>Client Setisfied</p>
                                </div>
                                <div class="counter-icon">
                                    <i class="flaticon-globe"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="content-bottom">
                        <p>Discover the latest offers & news and start planning</p>
                        <a href="contact.html">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- destination-area-end -->


<!-- brand-area -->
<div class="brand-area brand-bg">
    <div class="container">
        <div class="row brand-active">
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img01.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img02.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img03.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img04.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img05.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img06.png" alt="">
                </div>
            </div>
            <div class="col-12">
                <div class="brand-item">
                    <img src="assets/img/brand/brand_img03.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand-area-end -->

<!-- service-area -->
<section class="service-area">
    <div class="container">
        <div class="row align-items-end mb-50">
            <div class="col-md-8">
                <div class="section-title">
                    <span class="sub-title">Why Air geair</span>
                    <h2 class="title">Our Great Flight Options</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-nav"></div>
            </div>
        </div>
        <div class="row service-active">
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <img src="{{ asset('assets/img/icon/service_icon01.png') }}" alt="">
                    </div>
                    <div class="service-content">
                        <span>Service 01</span>
                        <h2 class="title">Pre-Book Your Baggage</h2>
                        <div class="service-list">
                            <ul>
                                <li>Pre-book your baggage <i class="flaticon-check-mark"></i></li>
                                <li>Allowance now and save up <i class="flaticon-check-mark"></i></li>
                                <li>90% of baggage charges <i class="flaticon-check-mark"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <img src="assets/img/icon/service_icon02.png" alt="">
                    </div>
                    <div class="service-content">
                        <span>Service 02</span>
                        <h2 class="title">Reserve preferred seat!</h2>
                        <div class="service-list">
                            <ul>
                                <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <img src="assets/img/icon/service_icon03.png" alt="">
                    </div>
                    <div class="service-content">
                        <span>Service 03</span>
                        <h2 class="title">Enjoy stress-free travel</h2>
                        <div class="service-list">
                            <ul>
                                <li>Travel stress-free by getting<i class="flaticon-check-mark"></i></li>
                                <li>Covered for flight modification <i class="flaticon-check-mark"></i></li>
                                <li>Cancellation, accident & medical <i class="flaticon-check-mark"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-item">
                    <div class="service-icon">
                        <img src="assets/img/icon/service_icon02.png" alt="">
                    </div>
                    <div class="service-content">
                        <span>Service 02</span>
                        <h2 class="title">Reserve preferred seat!</h2>
                        <div class="service-list">
                            <ul>
                                <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-area-end -->

<!-- blog-area -->
<section class="blog-area blog-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <span class="sub-title">our News Feeds</span>
                    <h2 class="title">Latest News Update</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-53">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_img01.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog-details.html">Depending on your departure point and
                                destination flights</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-47">
                <div class="blog-item small-item">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_img02.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog-details.html">Happy International Country Flight Attendant
                                Day</a></h2>
                    </div>
                </div>
                <div class="blog-item small-item">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_img03.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog-details.html">The US is a Large Country and Climate Varies by
                                Region</a></h2>
                    </div>
                </div>
                <div class="blog-item small-item">
                    <div class="blog-thumb">
                        <a href="blog-details.html"><img src="assets/img/blog/blog_img04.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                            </ul>
                        </div>
                        <h2 class="title"><a href="blog-details.html">But There are Dozen of Low-cost Airlines
                                Including</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->
