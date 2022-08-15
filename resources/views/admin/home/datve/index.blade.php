@extends('admin.layout')
@section('css')
@endsection

@section('action_form')
    {{ route('admin-index') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="widget-heading d-flex justify-content-between align-items-center">

            <h3 class="m-0">Về Chúng Tôi</h3>
            <a href="courses.html" class="btn btn-primary btn-sm">View all</a>
        </div>
        <div class="row">
            <!-- Slider main container -->
            <div class="swiper course-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <img src="assets/admin/images/svg/color-palette.svg" alt="">
                                        <div class="flex-1 ms-3">
                                            <h4>Tổng Chuyến Bay</h4>
                                            <span>{{ $list_dv->count() }}</span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <img src="assets/admin/images/svg/education-website.svg" alt="">
                                        <div class="flex-1 ms-3">
                                            <h4>Coading</h4>
                                            <span>Lorem ipsum dolor</span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <img src="assets/admin/images/svg/brain.svg" alt="">
                                        <div class="flex-1 ms-3">
                                            <h4>Soft Skill</h4>
                                            <span>Lorem ipsum dolor</span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="widget-courses align-items-center d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <img src="assets/admin/images/svg/microscope.svg" alt="">
                                        <div class="flex-1 ms-3">
                                            <h4>Science</h4>
                                            <span>Lorem ipsum dolor</span>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"><i class="las la-angle-right text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-heading d-flex justify-content-between align-items-center">
           
            <h3 class="m-0"> <a href="{{ route('route_BE_Admin_Loc_Dat_Ve') }}" class="btn btn-success btn-sm">Lọc Vé Quá Hạn </a>
        </h3>
            {{-- <a href="{{ route('route_BE_Admin_Add_Dat_Ve') }}" class="btn btn-primary btn-sm">Thêm Đặt Vé </a> --}}
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card all-crs-wid p-2">
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span> 
                             <span class="sr-only">Close</span> 
                        </button> --}}
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            {{-- <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only flex-rigth">Close</span>
                        </button> --}}
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã Đặt Vé</th>
                                <th scope="col">Mã Vé</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Ngày Hết Hạn</th>
                                {{-- <th scope="col">Chỉnh Sửa</th> --}}
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($list_dv))
                                @foreach ($list_dv as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->ma_dat_ve }}</td>
                                        <td>{{ $item->ma_ve }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->ngay_het_han}}</td>
                                        {{-- <td>
                                            <a
                                                href="{{ route('route_BE_Admin_Detail_Dat_Ve', ['ma_dat_ve' => $item->ma_dat_ve]) }}"><button
                                                    class="btn btn-warning">Chỉnh</button></a>
                                        </td> --}}
                                        <td><a
                                                href="{{ route('route_BE_Admin_Delete_Dat_Ve', ['ma_dat_ve' => $item->ma_dat_ve]) }}"><button
                                                    class="btn btn-danger">Xóa</button></a></td>

                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <div class="">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                {{ $list_dv->appends('extParams')->links() }}
            </div>
        </div>
    </div>
@endsection
