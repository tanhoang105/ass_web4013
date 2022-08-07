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
        <form action=" {{ route('route_BE_Admin_Update_San_Bay') }} " method="post" enctype="multipart/form-data">

            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Tên sân bay</label>
                        <input value="{{ old('ten_sb') ?? $detail_sb->ten_sb }}" type="text" name="ten_sb" class="form-control" id="chuyenBay"
                            aria-describedby="emailHelp">
                        @error('ten_sb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Địa chỉ sân bay</label>
                        <input value="{{ old('dia_chi_sb')  ?? $detail_sb->dia_chi_sb }}" type="text" name="dia_chi_sb" class="form-control"
                            id="chuyenBay" aria-describedby="emailHelp">
                        @error('dia_chi_sb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả chuyến bay</label>
                            <textarea value="{{ old('mo_ta_sb')  }}" class="form-control" name="mo_ta_sb" id=""> {{$detail_sb->mo_ta_sb}}</textarea>

                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Ảnh sân bay</label>
                        <img width="200px" src="{{ Storage::url($detail_sb->anh_sb)}}" alt="">
                        <input value="{{ old('anh_sb') }}" type="file" name="anh_sb" class="form-control"
                            id="">
                        @error('anh_sb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Loại sân bay</label>
                        <select class="form-control" name="loai_sb" id="">
                            <option value="">Chọn loại sân bay</option>
                            <option value="0" {{$detail_sb->loai_sb == 0 ? 'selected' : false}} >Sân bay đi</option>
                            <option value="1" {{$detail_sb->loai_sb == 1 ? 'selected' : false}} >Sân bay đến</option>
                        </select>
                        @error('loai_sb')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>


            </div>
    </div>
    </form>
    </div>
@endsection
