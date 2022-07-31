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
        <form action=" {{ route('route_BE_Admin_Update_Ve') }} " method="post" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Mã vé</label>
                        <input value="{{ old('ma_ve') ?? $detail_ve->ma_ve }}" type="text" name="ma_ve"
                            class="form-control" id="chuyenBay" aria-describedby="emailHelp">
                        @error('ma_ve')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Chuyến bay</label>
                        <select name="cb_id" id="" class="form-control">
                            <option value="">Chuyến bay</option>

                            @if (!empty($list_chuyen_bay))
                                @foreach ($list_chuyen_bay as $item)
                                    <option value="{{ $item->id ?? old('cb_id') }}"
                                        {{ $detail_ve->cb_id == $item->id ? 'selected' : false }}>
                                        {{ $item->ma_cb }}</option>
                                @endforeach
                            @endif

                        </select>
                        @error('cb_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả ve</label>
                            <textarea value="{{ old('mo_ta_ve') }}" class="form-control" name="mo_ta_ve" id="">{{ $detail_ve->mo_ta_ve }}</textarea>

                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Giá ve</label>
                        <input value="{{ old('gia_ve') ?? $detail_ve->gia_ve }}" type="text" name="gia_ve"
                            class="form-control" id="">
                        @error('gia_ve')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Giảm giá</label>
                        <input value="{{ old('giam_gia') ?? $detail_ve->giam_gia }}" type="text" name="giam_gia"
                            class="form-control" id="">
                        @error('giam_gia')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Số ghế</label>
                        <input value="{{ old('so_ghe') ?? $detail_ve->so_ghe }}" type="text" name="so_ghe"
                            class="form-control" id="">
                        @error('so_ghe')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Loại vé</label>
                        <select class="form-control" name="loai_ve" id="">
                            <option value="">Chọn loại vé</option>
                            <option value="0" {{ $detail_ve->loai_ve == '0' ? 'selected' : false }}>Bình thường
                            </option>
                            <option value="1" {{ $detail_ve->loai_ve == '1' ? 'selected' : false }}>Hạng sang</option>
                        </select>
                        @error('loai_ve')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Khứ hồi</label>
                        <select class="form-control" name="khu_hoi" id="">
                            <option value="">Chọn</option>
                            <option value="0" {{ $detail_ve->khu_hoi == '0' ? 'selected' : false }}>Vé 1 chiều
                            </option>
                            <option value="1" {{ $detail_ve->khu_hoi == '1' ? 'selected' : false }}>Vé 2 chiều
                            </option>
                        </select>
                        @error('khu_hoi')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection
