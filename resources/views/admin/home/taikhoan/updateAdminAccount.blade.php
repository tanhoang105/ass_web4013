@php
$objItem = \Illuminate\Support\Facades\Auth::user();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/logdy-html/HTML/main/register-28.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 20:33:45 GMT -->

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TAGCODE');
    </script>
    <!-- End Google Tag Manager -->
    <title>{{$title_page}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="../assets/login/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/login/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/login/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="../assets/login/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="../assets/login/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="../assets/login/css/skins/default.css">
</head>

<body id="top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="page_loader"></div>

    <!-- Login 28 start -->
    <div class="login-28">
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-section">
                        <div class="form-inner">
                            <div class="logo">
                                <a href="login-28.html">
                                    <img src="../assets/login/img/logos/logo-2.png" alt="logo">
                                </a>
                            </div>
                            <div class="details">
                                <h3>Create An Cccount
                                </h3>
                                <form action="{{ route('route_BE_Admin_Update_Account_Post') }}" method="post">
                                    @csrf
                                    <div class="form-group clearfix">
                                        <input name="name" type="text" class="form-control"
                                            value=" {{ $objItem->name }} " placeholder="Full Name"
                                            aria-label="Full Name">
                                    </div>
                                    <div class="form-group clearfix">
                                        <input name="email" type="email" class="form-control"
                                            value=" {{ $objItem->email }} " placeholder="Email Address"
                                            aria-label="Email Address">
                                    </div>
                                    <div class="form-group clearfix">
                                        <input name="password" type="password" class="form-control" autocomplete="off"
                                            placeholder="Password"
                                            aria-label="Password">
                                    </div>
                                    <div class="form-group d-flex">


                                        <a href=" {{ route('admin-index') }} ">Quay lại trang</a>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit"
                                            class="btn btn-lg btn-primary btn-theme"><span>Register</span></button>
                                    </div>
                                    <div class="clearfix"></div>

                                </form>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login 28 end -->


    <!-- External JS libraries -->
    <script src="../assets/login/js/jquery.min.js"></script>
    <script src="../assets/login/js/popper.min.js"></script>
    <script src="../assets/login/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS Script -->

</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/logdy-html/HTML/main/register-28.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 20:33:45 GMT -->

</html>
