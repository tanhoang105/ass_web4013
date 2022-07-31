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
        <form action=" {{ route('route_BE_Admin_Add_Ve') }} " method="post" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Mã vé</label>
                        <input value="{{ old('ma_ve') }}" type="text" name="ma_ve" class="form-control" id="chuyenBay"
                            aria-describedby="emailHelp">
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
                                    <option value="{{ $item->id ?? old('cb_id') }} ">
                                        {{ $item->ma_cb }}</option>
                                @endforeach
                            @endif

                        </select>
                        @error('cb_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả ve</label>
                            <textarea value="{{ old('mo_ta_ve') }}" class="form-control" name="mo_ta_ve" id=""></textarea>

                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Giá ve</label>
                        <input value="{{ old('gia_ve') }}" type="text" name="gia_ve" class="form-control"
                            id="">
                        @error('gia_ve')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Giảm giá</label>
                        <input value="{{ old('giam_gia') }}" type="text" name="giam_gia" class="form-control"
                            id="">
                        @error('giam_gia')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Số ghế</label>
                        <input value="{{ old('so_ghe') }}" type="text" name="so_ghe" class="form-control"
                            id="">
                        @error('so_ghe')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Loại vé</label>
                        <select class="form-control" name="loai_ve" id="">
                            <option value="">Chọn loại vé</option>
                            <option value="binhthuong">Bình thường</option>
                            <option value="hangsang">Hạng sang</option>
                        </select>
                        @error('loai_ve')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Khứ hồi</label>
                        <select class="form-control" name="khu_hoi" id="">
                            <option value="">Chọn</option>
                            <option value="0">Vé 1 chiều</option>
                            <option value="1">Vé 2 chiều</option>
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
