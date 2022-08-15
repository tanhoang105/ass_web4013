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
        <form action=" {{ route('route_BE_Admin_Update_Tai_Khoan') }} " method="post" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-6">
                    <div class="mb-3">
                        <label for="chuyenBay" class="form-label">Tên tài khoản </label>
                        <input value="{{ old('name') ?? $taikhoan->name }}" type="text" name="name" class="form-control" id="chuyenBay"
                            aria-describedby="emailHelp">
                        @error('name')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input value="{{ old('email') ?? $taikhoan->email }}" type="email" name="email" class="form-control"
                            id="">
                    </div>
                    @error('email')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror





                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>


                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Mật khẩu</label>
                        <input  value="{{ old('password')   }}" type="password" name="password" class="form-control"
                            id="">
                    </div>
                    @error('password')
                        <span style="color: red"> {{ $message }} </span>
                    @enderror

                    <div class="mb-3">
                        <label for="" class="form-label">Vai trò</label>
                        <select name="role_id" id="" class="form-control">
                            <option value="">Vai trò</option>

                            @if (!empty($list_role))
                                @foreach ($list_role as $item)
                                    <option value="{{ $item->id ?? old('cb_id') ?? $taikhoan->role_id }}" {{ $item->id == $taikhoan->role_id ? 'selected' : false}}>
                                        {{ $item->ten_role ?? $taikhoan->ten_role }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('role_id')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>



            </div>



    </div>
    </form>
    </div>
@endsection
