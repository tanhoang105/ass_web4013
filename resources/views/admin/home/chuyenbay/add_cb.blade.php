 @extends('admin.layout')

 @section('content')
     <div class="container">

         @if (Session::has('error'))
             <div class="alert alert-danger alert-dismissible" role="alert">
                 <strong>{{ Session::get('error') }}</strong>
             </div>
         @endif

         @if (Session::has('success'))
             <div class="alert alert-success alert-dismissible" role="alert">
                 <strong>{{ Session::get('success') }}</strong>
             </div>
         @endif
         <form action=" {{ route('route_BE_Admin_Add_Chuyen_Bay') }}" method="post" enctype="multipart/form-data">

             <div class="row">
                 @csrf
                 <div class="col-6">

                     {{--  --}}
                     {{-- <div class="mb-3">
                         <label for="chuyenBay" class="form-label">Mã chuyến bay</label>
                         <input value="{{ old('ma_cb') }}" type="text" name="ma_cb" class="form-control"
                             id="chuyenBay" aria-describedby="emailHelp">
                         @error('ma_cb')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div> --}}

                     <div class="mb-3">
                         <label for="chuyenBay" class="form-label">Giá</label>
                         <input value="{{ old('gia_chuyenbay') ?? request()->gia_chuyenbay }}" type="text" name="gia_chuyenbay" class="form-control"
                             id="chuyenBay" aria-describedby="emailHelp">
                         @error('gia_chuyenbay')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div>

                     <div class="mb-3">
                         <label for="chuyenBay" class="form-label"> Giảm Giá</label>
                         <input value="{{ old('giam_gia_cb') ?? request()->giam_gia_cb  }}" type="text" name="giam_gia_cb" class="form-control"
                             id="chuyenBay" aria-describedby="emailHelp">
                         @error('giam_gia_cb')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div>

                     <div class="mb-3">
                         <label for="" class="form-label">Nơi đi</label>
                         <input value="{{ old('noi_di_cb') ?? request()->noi_di_cb  }}" type="text" name="noi_di_cb" class="form-control"
                             id="" aria-describedby="emailHelp">
                         @error('noi_di_cb')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div>
                     <div class="mb-3">
                         <label for="" class="form-label">Nơi đến</label>
                         <input value="{{ old('noi_den_cb') ?? request()->noi_den_cb  }}" type="text" name="noi_den_cb" class="form-control"
                             id="" aria-describedby="emailHelp">
                         @error('noi_den_cb')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div>

                     <div class="mb-3">
                         <label for="" class="form-label">Sân bay</label>
                         <select name="sb_id" id="" class="form-control">
                             <option value="">Sân bay</option>

                             @if (!empty($list_sb))
                                 @foreach ($list_sb as $item)
                                     <option value="{{ $item->id ?? old('sb_id') }} ">{{ $item->ten_sb ?? old('ten_sb') }}
                                     </option>
                                 @endforeach
                             @endif

                         </select>
                         @error('sb_id')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                     </div>


                     <div class="mb-3">
                         <label for="" class="form-label">Mô tả chuyến bay</label>
                         <textarea value="{{ old('mo_ta_cb')  }}" class="form-control" name="mo_ta_cb" id=""></textarea>

                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 <div class="col-6">
                     <div class="mb-3">
                         <label for="" class="form-label">Giờ đi</label>
                         <input value="{{ old('gio_di')  }}" type="datetime-local" name="gio_di" class="form-control"
                             id="">
                         @error('gio_di')
                             <span style="color: red"> {{ $message }} </span>
                         @enderror

                         @if (Session::has('msg'))
                             <span style="color: red">{{ Session::get('msg') }}</span>
                         @endif
                     </div>
                
                 <div class="mb-3">
                     <label for="" class="form-label">Giờ đến</label>
                     <input value="{{ old('gio_den') }}" type="datetime-local" name="gio_den" class="form-control"
                         id="">
                     @error('gio_den')
                         <span style="color: red"> {{ $message }} </span>
                     @enderror
                 </div>

                 <div class="mb-3">
                     <label for="" class="form-label">Máy bay </label>
                     <select name="mb_id" id="" class="form-control">
                         <option value="">Chọn máy bay</option>
                         @if (!empty($list_mb))
                             @foreach ($list_mb as $item)
                                 <option value="{{ old('mb_id') ?? $item->id }}">{{ $item->so_hieu_mb }}</option>
                             @endforeach
                         @endif
                     </select>
                     @error('mb_id')
                         <span style="color: red"> {{ $message }} </span>
                     @enderror
                 </div>

                 <div class="mb-3">
                     <label for="" class="form-label">Ảnh Chuyến Bay</label>
                     <input type="file" class="form-control" name="anh_chuyen_bay" id="">
                     @error('anh_chuyen_bay')
                         <span style="color: red"> {{ $message }} </span>
                     @enderror
                 </div>


             </div>



     </div>
     </form>
     </div>
 @endsection
