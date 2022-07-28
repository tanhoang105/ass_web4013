@extends('admin.layout')

@section('content')
    <div class="container">

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
        <form action=" {{ route('route_BE_Admin_Add_Loai_May_Bay') }} " method="post" enctype="multipart/form-data">

            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Mã loại máy bay</label>
                        <input value="{{ old('ma_loai_mb') }}" type="text" name="ma_loai_mb" class="form-control"
                            id="chuyenBay" aria-describedby="emailHelp">
                        @error('ma_loai_mb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Tên Loại Máy Bay</label>
                        <input value="{{ old('ten_loai_mb') }}" type="text" name="ten_loai_mb" class="form-control"
                            id="chuyenBay" aria-describedby="emailHelp">
                        @error('ten_loai_mb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả loại máy bay</label>
                            <textarea value="{{ old('mo_ta_mb') }}" class="form-control" name="mo_ta_mb" id=""></textarea>

                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Ảnh máy bay</label>
                        <input value="{{ old('anh_loai_mb') }}" type="file" name="anh_loai_mb" class="form-control"
                            id="">
                        @error('anh_loai_mb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
