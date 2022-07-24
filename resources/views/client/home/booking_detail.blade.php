<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from themehut.co/html/geair/booking-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Geair - Air Ticket Booking System HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
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
                                <h2 class="title">Booking Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- customer-details-area -->
            <section class="customer-details-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="customer-details-content">
                                <div class="icon">
                                    <img src="assets/img/icon/customer_det_icon.jpg" alt="">
                                </div>
                                <div class="content">
                                    <h2 class="title">Customer Details: Please fill in with valid information.</h2>
                                    <div class="customer-progress-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                        <div class="customer-progress-step">
                                            <ul>
                                                <li>
                                                    <span>1</span>
                                                    <p>Guest Information</p>
                                                </li>
                                                <li>
                                                    <span>2</span>
                                                    <p>Payment</p>
                                                </li>
                                                <li>
                                                    <span>3</span>
                                                    <p>Confirmation</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- customer-details-area-end -->

            <!-- booking-details-area -->
            <section class="booking-details-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-73">
                            <div class="primary-contact">
                                <i class="fa-regular fa-user"></i>
                                <h2 class="title">Passenger 1: Ms (Primary Contact)</h2>
                            </div>
                            <div class="booking-details-wrap">
                                <form action="#">
                                    <div class="form-grp select-form">
                                        <div class="icon">
                                            <i class="flaticon-add-user"></i>
                                        </div>
                                        <div class="form">
                                            <label for="shortBy">Select Travellers from your Favourties List</label>
                                            <select id="shortBy" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Select One..</option>
                                                <option>Select Two..</option>
                                                <option>Select Three..</option>
                                                <option>Select Four..</option>
                                                <option>Select Five..</option>
                                            </select>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-user-1"></i>
                                                </div>
                                                <div class="form">
                                                    <select id="title" name="select" class="form-select" aria-label="Default select example">
                                                        <option value="">Mr.</option>
                                                        <option>Mrs.</option>
                                                        <option>Others..</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-grp">
                                                <input type="text" placeholder="Give Name">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-grp">
                                                <input type="text" placeholder="Sur Name *">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="gender-select">
                                        <h2 class="title">Select Your Gender*</h2>
                                        <ul>
                                            <li class="active"><i class="flaticon-little-kid"></i> Male</li>
                                            <li><i class="flaticon-little-girl"></i> Female</li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-globe-1"></i>
                                                </div>
                                                <div class="form">
                                                    <label for="nationality">Nationality</label>
                                                    <select id="nationality" name="select" class="form-select" aria-label="Default select example">
                                                        <option value="">Bangladesh</option>
                                                        <option>United States</option>
                                                        <option>Dubai</option>
                                                        <option>Saudi Arabia</option>
                                                        <option>Australia</option>
                                                        <option>South Africa</option>
                                                        <option>Pakistan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-telephone-call"></i>
                                                </div>
                                                <div class="form">
                                                    <input type="number" placeholder="Mobile Number *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-calendar"></i>
                                                </div>
                                                <div class="form">
                                                    <label for="shortBy">Date of Birth</label>
                                                    <input type="text" class="date" placeholder="Select Date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-home"></i>
                                                </div>
                                                <div class="form">
                                                    <input type="text" placeholder="Post Code *">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-arroba"></i>
                                                </div>
                                                <div class="form">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" placeholder="youinfo@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-five-stars"></i>
                                                </div>
                                                <div class="form">
                                                    <input type="text" placeholder="FlyerNumber :  98265">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="optional-item">
                                        <div class="form-grp">
                                            <div class="form">
                                                <select id="optional" name="select" class="form-select" aria-label="Default select example">
                                                    <option value="">Select meal type ( optional )</option>
                                                    <option>Select meal type ( optional )</option>
                                                    <option>Select meal type ( optional )</option>
                                                    <option>Select meal type ( optional )</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <div class="form">
                                                <select id="optionalTwo" name="select" class="form-select" aria-label="Default select example">
                                                    <option value="">Request wheelchair ( optional )</option>
                                                    <option>Request wheelchair ( optional )</option>
                                                    <option>Select meal type ( optional )</option>
                                                    <option>Select meal type ( optional )</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp checkbox-grp">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Add this person to passenger quick pick list</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-27">
                            <aside class="booking-sidebar">
                                <h2 class="main-title">Booking Info</h2>
                                <div class="widget">
                                    <ul class="flight-info">
                                        <li><img src="assets/img/icon/sidebar_flight_icon.jpg" alt=""> <p>12:0 (DEK) <span>Dubai</span></p></li>
                                        <li><p>16:30 (DEK) <span>istanbul</span></p></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Select Discount Option</h2>
                                    <form action="#" class="discount-form">
                                        <i class="flaticon-coupon"></i>
                                        <input type="text" placeholder="Enter Code">
                                        <button type="submit"><i class="flaticon-tick-1"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Your Preferred Bank</h2>
                                    <ul class="preferred-bank-wrap">
                                        <li><a href="#"><img src="assets/img/images/bank_logo01.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo02.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo03.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo04.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo05.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo06.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Your price summary</h2>
                                    <div class="price-summary-top">
                                        <ul>
                                            <li>Details</li>
                                            <li>Amount</li>
                                        </ul>
                                    </div>
                                    <div class="price-summary-detail">
                                        <ul>
                                            <li>Adult x 1 <span>$1,056</span></li>
                                            <li>Tax x 1 <span>$35</span></li>
                                            <li>Total Airfare: <span>$1,091</span></li>
                                            <li>Discount<span>- $110</span></li>
                                            <li>Total Payable<span>$981.00</span></li>
                                        </ul>
                                        <a href="#" class="btn">Pay now</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking-details-area-end -->

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
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.odometer.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from themehut.co/html/geair/booking-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jul 2022 19:41:38 GMT -->
</html>
