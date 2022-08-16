<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from themehut.co/html/geair/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:34 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Geair - Air Ticket Booking System HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body class="white-background">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header>
        @include('client.block.header')
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb-content text-center">
                            <h2 class="title">Vé của bạn</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-40">
                            <span class="sub-title">contact us now</span>
                            <h2 class="title">Vé của bạn</h2>
                        </div>
                        <div class="contact-form">
                            {{-- table --}}
                            @if (!empty($info))
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mã vé</th>
                                            <th scope="col">Giá </th>
                                            <th scope="col">Số ghế</th>
                                            <th scope="col">Thời gian đi</th>
                                            <th scope="col">Ngày hết hạn</th>
                                            <th scope="col">Thanh toán</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($info as $key => $item)
                                            <tr>
                                                <th scope="row"> {{ $key + 1 }} </th>
                                                <td> {{ $item->ma_ve }} </td>
                                                <td> {{ $item->gia_ve }} </td>
                                                <td>{{ $item->so_ghe }}</td>
                                                <td>{{ $item->gio_di_ve }}</td>
                                                <td>{{ $item->ngay_het_han }}</td>
                                                <td><button class="btn btn-warning">Thanh Toán</button></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <div id="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd"
                allowfullscreen loading="lazy"></iframe>
        </div>
        <!-- contact-map-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer>
        <div class="footer-area footer-bg">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-content">
                                    <p>Online to make your journey even more memorable access or meet</p>
                                    <ul class="footer-social">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <div class="fw-title">
                                    <h4 class="title">Explore</h4>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">Travel alerts</a></li>
                                        <li><a href="contact.html">Awards</a></li>
                                        <li><a href="contact.html">Qatarisation</a></li>
                                        <li><a href="contact.html">Careers</a></li>
                                        <li><a href="contact.html">Beyond</a></li>
                                        <li><a href="contact.html">Press release</a></li>
                                        <li><a href="contact.html">Airways Cargo</a></li>
                                        <li><a href="contact.html">Sponsorship</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-4">
                            <div class="footer-widget privacy">
                                <div class="fw-title">
                                    <h4 class="title">Privacy</h4>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="booking-list.html">Airline fees</a></li>
                                        <li><a href="booking-list.html">Airline guides</a></li>
                                        <li><a href="booking-list.html">Airport guides</a></li>
                                        <li><a href="booking-list.html">Low fare tips</a></li>
                                        <li><a href="booking-list.html">Flights</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-8">
                            <div class="footer-widget">
                                <div class="fw-title">
                                    <h4 class="title">Contacts</h4>
                                </div>
                                <div class="footer-contact">
                                    <p>PO Box W75 Street lan West new queens</p>
                                    <h2 class="title"><a href="tel:0123456789">+1 246 333 - 0079</a></h2>
                                    <a href="#">geair@company.com</a>
                                    <form action="#">
                                        <input type="email" placeholder="Enter your email">
                                        <button type="submit"><i class="flaticon-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>Copyright © 2022.All Rights Reserved By <span>Geair</span></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-img text-end">
                                <img src="assets/img/images/cart.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

<!-- Mirrored from themehut.co/html/geair/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:34 GMT -->

</html>
