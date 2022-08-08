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
        <form action="{{ route('route_BE_Admin_Update_Chuyen_Bay') }}" method="post" enctype="multipart/form-data">

            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Mã chuyến bay</label>
                        <input value="{{ old('ma_cb') ?? $objItem->ma_cb }}" type="text" name="ma_cb"
                            class="form-control" id="chuyenBay" aria-describedby="emailHelp">
                        @error('ma_cb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Sân bay đi</label>
                        <select name="sb_id" id="" class="form-control">
                            <option value="">Sân bay đi</option>

                            @if (!empty($list_sb))
                                @foreach ($list_sb as $item)
                                    <option {{ $objItem->sb_id == $item->id ? 'selected' : false }}
                                        value="{{ $item->id }}">{{ $item->ten_sb }}</option>
                                @endforeach
                            @endif

                        </select>
                        @error('sb_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả chuyến bay</label>
                            <textarea value="" class="form-control" name="mo_ta_cb" id="">{{ old('ma_ta_cb') ?? $objItem->mo_ta_cb }}</textarea>

                        </div>

                    </div>


                    <button type="submit" class="btn btn-success">Cập nhập sản phẩm</button>
                </div>
                <div class="col-6">


                    <div class="mb-3">
                        <label for="" class="form-label">Giờ đi</label>
                        <input value="{{ old('gio_di') ?? $objItem->gio_di }}" type="datetime-local" name="gio_di"
                            class="form-control" id="">
                        @error('gio_di')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Giờ đến</label>
                        <input value="{{ old('gio_den') ?? $objItem->gio_den }}" type="datetime-local" name="gio_den"
                            class="form-control" id="">
                        @error('gio_den')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Ảnh</label><br>
                        <img id="anh_chuyen_bay" src=" {{ Storage::url($objItem->anh_chuyen_bay) }}" alt="">
                        <input id="anh_update" value="" type="file" name="anh_chuyen_bay" class="form-control" id="">
                        @error('anh_chuyen_bay')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label for="" class="form-label">Máy bay </label>
                        <select name="mb_id" id="" class="form-control">
                            <option value="">Chọn máy bay</option>
                            @if (!empty($list_mb))
                                @foreach ($list_mb as $item)
                                    <option {{ $objItem->mb_id == $item->id ? 'selected' : false }}
                                        value="{{ $item->id }}">{{ $item->so_hieu_mb }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('mb_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>


                </div>



            </div>
        </form>
    </div>
@endsection

@section('js')
    <script>
        $(function() {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#anh_update").change(function() {
                readURL(this, '#anh_chuyen_bay');
            });

        });
    </script>
@endsection
