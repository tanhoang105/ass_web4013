<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpKernel\Event\RequestEvent;

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

    public function admin_Update_Account($id, Request $request)
    {

        $request->session()->put('id_account', $id);
        // hiên thị ra form thông tin tk của admin để update
        $this->v['title_page'] = 'Quản lý tài khoản admin';


        return view('admin.home.taikhoan.updateAdminAccount', $this->v);
    }

    public function admin_Update_Account_Post(Request $request)
    {
        $id = session('id_account');
        $params  = [];
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
                
            }

            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->post());
        unset($params['cols']['_token']);
        $params['cols']['id'] = $id;

        if ($request->password) {
            $params['cols']['password'] = Hash::make($params['cols']['password']);
        } else {
            unset($params['cols']['password']);
        }

        $res = $this->user->update_user($params);
        if ($res ==  null) {
            return redirect()->route('route_BE_Admin_Update_Account');
        } else if ($res ==  1) {
            return redirect()->route('admin-index');
            Session::flash('success', 'Cập nhập bản ghi thành công');
        } else {
            Session::flash('error', "Lỗi cập nhập bản ghi");
            return redirect()->route('route_BE_Admin_Update_Account');
        }
    }
}
