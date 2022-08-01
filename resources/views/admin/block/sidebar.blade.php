<div class="dlabnav-scroll">
    <ul class="metismenu" id="menu">
        <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-grid"></i>
                <span class="nav-text">Chuyến Bay</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="index.html">Trong Nước</a></li>
                <li><a href="index-2.html">Quốc Tế</a></li>
                <li><a href="schedule.html">Chuyến bay 1 chiều</a></li>
                <li><a href="instructors.html">Chuyến bay 2 chiều</a></li>

            </ul>

        </li>
        <li><a class="has-arrow " href=" {{ route('route_BE_Admin_List_Loai_May_Bay') }} " aria-expanded="false">
                <i class="bi bi-book"></i>

                <span class="nav-text">Hãng Bay</span>
            </a>


        </li>
        <li><a class="has-arrow " href="{{ route('route_BE_Admin_List_May_Bay') }}" aria-expanded="false">
                <i class="bi bi-people"></i>

                <span class="nav-text">Máy Bay</span>
            </a>


        </li>
        <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-info-circle"></i>
                <span class="nav-text">Vé</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('route_BE_Admin_List_Ve') }}">Tất cả vé</a></li>
                <li><a href="app-profile.html">Bình Dân</a></li>
                <li><a href="post-details.html">Hạng Sang</a></li>

        </li>
    </ul>
    </li>
    <li><a class="has-arrow " href="{{ route('route_BE_Admin_List_Slide') }}" aria-expanded="false">
            <i class="bi bi-pie-chart"></i>
            <span class="nav-text">Slide</span>
        </a>

    </li>

    <li><a class="has-arrow " href="{{ route('route_BE_Admin_List_Dat_Ve') }}" aria-expanded="false">
        <i class="bi bi-pie-chart"></i>
        <span class="nav-text">Đặt Vé
        </span>
    </a>

</li>


    <li><a class="has-arrow " href=" {{route('route_BE_Admin_List_Tai_Khoan')}} " aria-expanded="false">
            <i class="bi bi-info-circle"></i>
            <span class="nav-text">Tài Khoản</span>
        </a>
       
    </li>

    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="bi bi-info-circle"></i>
            <span class="nav-text">Sân bay</span>
        </a>

    </li>



    </ul>
    <div class="plus-box">
        <div class="d-flex align-items-center">
            <h5>Upgrade your Account to Pro</h5>
            <img src="assets/admin/images/medal.png" alt="">
        </div>
        <p>Upgrade to premium to get premium features</p>
        <a href="javascript:void(0);" class="btn btn-primary btn-sm">Upgrade</a>
    </div>
    <div class="copyright">
        <p><strong>GetSkills Online Learning Admin</strong> © 2022 All Rights Reserved</p>
        <p class="fs-12">Made with <span class="heart"></span> by HugeBinarys</p>
    </div>
</div>
