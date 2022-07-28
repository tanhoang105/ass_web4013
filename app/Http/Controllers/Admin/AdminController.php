<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChuyenBayRequest;
use App\Models\Chuyen_bay;
use App\Models\May_bay;
use App\Models\San_bay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
        // show ra giao diện admin
        $title_page = 'Trang quản trị';
        $this->v['title_page'] = $title_page;
        $this->v['extParams']  = $request->all();


        $this->v['list_cb'] = $this->chuyen_bay->list_cb($this->v['extParams'], 5);


        return view('admin.home.chuyenbay.index', $this->v);
    }

    public function add_ChuyenBay(ChuyenBayRequest $request)
    {

        $title_page = 'Trang thêm chuyến bay';
        $this->v['extParams']  = $request->all();
        $this->v['list_sb'] = $this->san_bay->list_sb($this->v['extParams']);
        $this->v['list_mb'] = $this->may_bay->list_mb($this->v['extParams'] , false);
        // dd($this->v['list_sb']);
        $this->v['title_page'] = $title_page;

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

            if ($request->gio_di >  $request->gio_den) {
                Session::flash('error', 'Thời đi phải trước thời gian đến');

                return redirect()->back();
            }

            $res = $this->chuyen_bay->saveNew($params);
            if ($res == null) {
                return redirect()->route('route_BE_Admin_Add_Chuyen_Bay');
            } elseif ($res > 0) {
                Session::flash('success', 'Thêm mới thành công chuyến bay');

            } else {
                Session::flash('error', 'Lỗi thêm người dùng');
                return redirect()->route('route_BE_Admin_Add_Chuyen_Bay');
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
        $this->v['list_sb'] = $this->san_bay->list_sb();
        $this->v['list_mb'] = $this->may_bay->list_mb();
        // dd($objItem->gio_di);
        $this->v['objItem'] = $objItem;
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
}
