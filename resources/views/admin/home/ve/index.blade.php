@extends('admin.layout')
@section('css')
@endsection
@section('action_form')
    {{ route('route_BE_Admin_List_Ve') }}
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
                                            <h4>Tổng Vé Bay</h4>
                                            <span>{{ $list_ve->count() }}</span>
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
            <h3 class="m-0">All Courses</h3>
            <h3 class="m-0"> <a href="{{ route('route_BE_Admin_Loc_Ve') }}" class="btn btn-success btn-sm">Lọc Vé  </a>

            {{-- <a href="{{ route('route_BE_Admin_Add_Ve') }}" class="btn btn-primary btn-sm">Thêm Vé </a> --}}
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card all-crs-wid p-2">
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span> --}}
                            {{-- <span class="sr-only">Close</span> --}}
                            </button>
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            {{-- <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only flex-rigth">Close</span> --}}
                            </button>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã vé</th>
                                <th scope="col">Chuyến Bay</th>
                                <th scope="col">Giá vé</th>
                                <th scope="col">Số ghế</th>
                                <th scope="col">Ngày Đi</th>
                                <th scope="col">Ngày Đến</th>
                                <th scope="col">Giảm giá </th>
                                
                                <th scope="col">Chỉnh</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($list_ve))
                                @foreach ($list_ve as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $item->ma_ve }}</td>
                                        <td>{{ $item->ma_cb }}</td>
                                        <td>{{ $item->gia_ve }}</td>
                                        <td>{{ $item->so_ghe }}</td>
                                        <td>{{ $item->gio_di_ve }}</td>
                                        <td>{{ $item->gio_den_ve }}</td>
                                        <td>{{ number_format($item->giam_gia, 0, '.', '.') }}</td>
                                        <td>
                                            <a href=" {{ route('route_BE_Admin_Detail_Ve', ['ma_ve' => $item->ma_ve]) }} "><button
                                                    class="btn btn-warning">Chỉnh</button></a>
                                        </td>
                                        <td><a href=" {{ route('route_BE_Admin_Delete_Ve', ['ma_ve' => $item->ma_ve]) }} "><button
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
                {{ $list_ve->appends('extParams')->links() }}
            </div>
        </div>
    </div>
@endsection
