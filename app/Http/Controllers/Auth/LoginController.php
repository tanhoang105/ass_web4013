<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    protected $user;
    public function __construct()
    {

        $this->user =  new Users();
    }
    public function index()
    {

        return view('login.dangnhap');
    }

    public function postLogin(LoginRequest $request)
    {
        // đã không yêu thì thôi (15')
        // dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');

        // dd($email, $password);
        // 2 là admin 1
        // 1 là nhân viên 
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 2])) {
            return redirect()->route('admin-index');
        } else {
            return redirect()->route('login');
            // dd(000);
        }
    }

    public function add_User(LoginRequest $request)
    {
        if ($request->isMethod('post')) {

            $params = [];
            // dd($request->post());
            $params['cols'] = array_map(function ($item) {
                // lọc sạch dữ liệu không có cx đc
                if ($item == '') {
                    $item = null;
                }
                if (is_string($item)) {
                    $item = trim($item);
                }
                return $item;
            }, $request->post());
            unset($params['cols']['_token']);

            $res = $this->user->saveNew($params);
            if ($res == null) {
                return redirect()->route('route_BE_SignIn');
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm mới thành công người dùng');
                return redirect()->route('client-index');
            } else {
                Session::flash('error', 'Thêm mới không thành công người dùng');
                return redirect()->route('route_BE_SignIn');
            }
            // }
        }

        return view('login.dangky');
    }

    public function detail_Users($id){

    }




    public function quen_MK()
    {
        return view('login.quen_mk');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
