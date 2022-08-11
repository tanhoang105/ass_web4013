<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChuyenBayRequest;
use App\Mail\OrderShipped;
use App\Models\Chuyen_bay;
use App\Models\May_bay;
use App\Models\San_bay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    protected $v;
    protected $chuyen_bay;
    protected $san_bay;
    protected $may_bay;

    public function __construct()
    {
        $this->v = [];
        $this->chuyen_bay = new Chuyen_bay();
        $this->san_bay = new San_bay();
        $this->may_bay =  new May_bay();
    }
    public function index(Request $request)


    {
        $email = Auth::user();
        $email =  $email->email;
        // dd($email);
        // $ma = ramdom();

        // gửi mail 
        // Mail::to($email)->send(new OrderShipped(['ma'=> 123]));

        // show ra giao diện admin
        $title_page = 'Trang quản trị';
        $this->v['title_page'] = $title_page;
        $this->v['extParams']  = $request->all();
        $this->v['tong_cb'] = $this->chuyen_bay->list_cb($this->v['extParams'], false);
        // dd($this->v['tong_cb']);



        $this->v['list_cb'] = $this->chuyen_bay->list_cb($this->v['extParams'], true, 4);


        return view('admin.home.chuyenbay.index', $this->v);
    }

    public function add_ChuyenBay(ChuyenBayRequest $request)
    {


        // dd(123);
        $title_page = 'Trang thêm chuyến bay';
        $this->v['extParams']  = $request->all();
        $this->v['list_sb'] = $this->san_bay->list_sb($this->v['extParams'], false);
        $this->v['list_mb'] = $this->may_bay->list_mb($this->v['extParams'], false);
        // dd($this->v['list_sb']);
        $this->v['title_page'] = $title_page;
        if ($request->isMethod('POST')) {

            // dd(2134);
            // nếu ấn submit
            $params  = [];

            // lọc dữ liệu đầu vào 
            $params['cols'] = array_map(function ($item) {
                if($item == '') {
                    $item = null;
                }

                if(is_string($item)){
                    $item = $item;
                }
                return $item;
            }, $request->post());

            unset($params['cols']['_token']);
            if($request->file('anh_chuyen_bay')){
                $params['cols']['anh_chuyen_bay'] = $this->uploadFile($request->file('anh_chuyen_bay'));
            }

            $res = $this->chuyen_bay->saveNew($params);
            if($res == null){
                Session::flash('error' , 'Thêm chuyên bay không thành công');
                return back();
            }else {
                Session::flash('success' , 'Thêm chuyên bay thành công');
                return redirect()->route('admin-index');
            }
        }
        return view('admin.home.chuyenbay.add_cb', $this->v);
    }


    public function detail_ChuyenBay($ma_cb, Request $request)
    {

        // dd($id); 
        $request->session()->put('ma_cb', $ma_cb);

        $this->v['title_page'] =  'Chi tiết chuyến bay';
        $objItem = $this->chuyen_bay->loadOne($ma_cb);
        $this->v['list_sb'] = $this->san_bay->list_sb(null, false);
        $this->v['list_mb'] = $this->may_bay->list_mb(null, false);
        // dd($objItem->gio_di);
        $this->v['objItem'] = $objItem;
        // dd($objItem ,123);
        return view('admin.home.chuyenbay.detail', $this->v);
    }

    public function edit_ChuyenBay(ChuyenBayRequest $request)
    {

        $ma_cb =  session('ma_cb');

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
        if (!empty($request->file('anh_chuyen_bay'))) {
            $params['cols']['anh_chuyen_bay'] = $this->uploadFile($request->file('anh_chuyen_bay'));
        }
        $res = $this->chuyen_bay->update_cb($ma_cb, $params);
        if ($res == null) {
            return redirect()->route('route_BE_Admin_Detail_Chuyen_Bay');
        } elseif ($res > 0) {
            Session::flash('success', 'Cập nhập thành công chuyến bay');
            return redirect()->route('admin-index');
        } else {
            Session::flash('error', 'Lỗi thêm người dùng');
            return redirect()->route('route_BE_Admin_Detail_Chuyen_Bay');
        }
    }

    public function delete_ChuyenBay($ma_cb)
    {
        $re   =  $this->chuyen_bay->delete_cb($ma_cb);
        if ($re > 0) {
            Session::flash('success', 'Xóa chuyên bay thành công');
        } else {
            Session::flash('error', 'Xóa chuyên bay không thành công');
        }
        return redirect()->route('admin-index');
    }

    // xóa hết những chuyến bay quá hạn
    public function loc_ChuyenBay()
    {
        $res  = $this->chuyen_bay->loc_chuyenbay();

        if ($res > 0) {
            Session::flash('success', 'Lọc thành công');
        } else {
            Session::flash('error', 'Lọc không thành công');
        }
        return redirect()->route('admin-index');
    }

    // upload anh 
    public function uploadFile($file)
    {
        $filename =  time() . '_' . $file->getClientOriginalName();
        return $file->storeAs('img_chuyenbay', $filename,  'public');
    }
}
