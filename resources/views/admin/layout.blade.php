@php
    $objUser = \Illuminate\Support\Facades\Auth::user();
    
@endphp
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getskills.dexignzone.com/xhtml/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 15:30:45 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GetSkills  : GetSkills Online Learning Admin Bootstrap 5 Template" />
    <meta property="og:title" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:description" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>{{ $title_page }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/admin/images/favicon.png') }}" />
    <link href="{{ asset('assets/admin/vendor/jquery-nice-select/css/nice-select.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/swiper/css/swiper-bundle.min.css') }} " rel="stylesheet">
    <!-- Style css -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet">

    @yield('css')

    <
   
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        @include('admin.block.load')
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

        {{-- phần hiển thi logo --}}
        <div class="nav-header">
            @include('admin.block.logo')
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        {{-- phần chat box bên trái - hộp thư --}}
        <div class="chatbox">
            @include('admin.block.chatbox')
        </div>
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            @include('admin.block.header')
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            @include('admin.block.sidebar')
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            @yield('content')

        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            @include('admin.block.footer')
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/admin/vendor/global/global.min.js') }}"></>
    <script src="{{ asset('assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/swiper/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dlab.carousel.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/styleSwitcher.js') }}"></script>
    @yield('js')
   
</body>


</html>
