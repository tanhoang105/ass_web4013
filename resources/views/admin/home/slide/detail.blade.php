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
        <form action=" {{ route('route_BE_Admin_Update_Slide') }} " method="post" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Tên slide</label>
                        <input value="{{ old('ten_slide') ?? $detail_slide->ten_slide }}" type="text" name="ten_slide"
                            class="form-control" id="chuyenBay" aria-describedby="emailHelp">
                        @error('ten_slide')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Ảnh slide</label><br>
                        <img width="200px" src="{{ asset('assets/admin/img_slide/' . $detail_slide->anh_slide) }}"
                            alt="nothing"><br>
                        <input type="file" name="anh_slide" class="form-control">
                        @error('anh_slide')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả silde</label>
                            <textarea value="{{ old('mo_ta_slide') }}" class="form-control" name="mo_ta_slide" id="">{{ $detail_slide->mo_ta_slide }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
