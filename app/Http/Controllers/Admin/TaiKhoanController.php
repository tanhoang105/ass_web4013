<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaiKhoanController extends Controller
{
    protected $v;
    protected $user;
    public function __construct()
    {
        $this->user = new Users();
        $this->v = [];
    }

    public function index(Request $request)
    {
        $this->v['title_page']  = 'Trang quản trị tài khoản';
        $this->v['exsParams'] = $request->all();
        $list_user = $this->user->list_user(true, $this->v['exsParams'], 2);
        $this->v['list_user']  = $list_user;
        // dd($list_user[1]);
        return view('admin.home.taikhoan.index', $this->v);
    }

    public function delete_TaiKhoan($email)
    {
        if (!empty($email)) {
            $res  = $this->user->delete_user($email);
            if ($res > 0) {
                // xóa thành công
                Session::flash('success', 'Xóa thành công');
            } else {
                Session::flash('error', 'Xóa không thành công');
            }
            return redirect()->route('route_BE_Admin_List_Tai_Khoan');
        }
    }
}
