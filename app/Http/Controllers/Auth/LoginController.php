<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;


class LoginController extends Controller
{

    protected $user;
    protected $v;
    public function __construct()
    {
        $this->user =  new Users();
        $this->v = [];
    }
    public function index()
    {
        // Mail::to("hoangnhattan2k2@gmail.com")->send(new OrderShipped(['ma'=>'1232311']));
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
        // 0 là khách hàng
        if (Auth::attempt(['email' => $email, 'password' => $password, ])) {
            $account  = Auth::user(); 
            $this->v['account'] =  $account;
            return redirect()->route('client-index' , $this->v);
        } else {
            return redirect()->route('login');
            
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
                return redirect()->route('route_SignIn');
            } elseif ($res > 0) {
                
                if (Auth::attempt(['email' => $params['cols']['email'], 'password' => $params['cols']['password'], ])) {
                    return redirect()->route('client-index' , $this->v);
                } 
                
            } else {
                Session::flash('error', 'Thêm mới không thành công người dùng');
                return redirect()->route('route_SignIn');
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

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('client-index');
    }
}
