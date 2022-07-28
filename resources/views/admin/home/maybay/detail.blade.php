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
        <form action=" {{ route('route_BE_Admin_Update_May_Bay') }} " method="post" enctype="multipart/form-data">

            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Số hiệu máy bay</label>
                        <input value="{{ old('so_hieu_mb') ?? $list_mb->so_hieu_mb }}" type="text" name="so_hieu_mb"
                            class="form-control" id="chuyenBay" aria-describedby="emailHelp">
                        @error('so_hieu_mb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Loại máy bay</label>
                        <select name="ma_loai_mb_id" id="" class="form-control">
                            <option value="">Loại máy bay</option>

                            @if (!empty($list_loai_mb))
                                @foreach ($list_loai_mb as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $list_mb->ma_loai_mb_id == $item->id ? 'selected' : 'false' }}>
                                        {{ $item->ten_loai_mb }}
                                    </option>
                                @endforeach
                            @endif

                        </select>
                        @error('ma_loai_mb_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả chuyến bay</label>
                            <textarea value="{{ old('mo_ta_mb') }}" class="form-control" name="mo_ta_mb" id="">{{ $list_mb->mo_ta_mb }}</textarea>

                        </div>


                    </div>

                    <button type="submit" class="btn btn-success">Cập Nhập</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Ảnh máy bay</label><br>
                        <img src="{{ asset('assets/admin/img_maybay/' . $list_mb->anh_mb) }}" alt="">
                        <input value="{{ old('anh_mb') }}" type="file" name="anh_mb" class="form-control"
                            id="">
                        @error('anh_mb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
