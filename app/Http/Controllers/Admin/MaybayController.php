<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MayBayRequest;
use App\Models\Loai_mb;
use App\Models\May_bay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MaybayController extends Controller
{
    protected $v;
    protected $may_bay;
    protected $loai_mb;
    public function __construct()
    {
        $this->may_bay = new May_bay();
        $this->loai_mb =  new Loai_mb();
        $this->v = [];
    }


    public function index(Request $request)
    {
        $this->v['title_page'] =  "Trang quản lý máy bay";
        $this->v['exparam'] = $request->all();
        $this->v['list_mb'] =  $this->may_bay->list_mb($this->v['exparam'], true, 2);

        return view('admin.home.maybay.index', $this->v);
    }


    public function add_MayBay(MayBayRequest $request)
    {
        $this->v['title_page'] =  "Trang quản lý máy bay";
        $this->v['exParam'] = $request->all();
        $this->v['list_loai_mb'] = $this->loai_mb->list_loai_mb($this->v['exParam'], false);
        // dd($this->v['list_loai_mb']);


        // khi submit form thì thực hiện code trong này
        if ($request->isMethod('POST')) {
            if ($request->file('anh_mb')) {
                $file = $request->file('anh_mb');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/assets/admin/img_maybay'), $filename);
            }
            $params = [];
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
            $res =  $this->may_bay->saveNew($params, $filename);
            if ($res > 0) {
                Session::flash('success', 'thêm máy bay thành công');
                return redirect()->route('route_BE_Admin_List_May_Bay');
            } else {
                Session::flash('success', 'thêm máy bay thành công');
                return back();
            }
        }
        return view('admin.home.maybay.add', $this->v);
    }


    public function delete_MayBay($so_hieu_mb)
    {
        $re =  $this->may_bay->delete_mb($so_hieu_mb);
        // dd($re);
        if ($re > 0) {
            // xóa thành công 
            Session::flash('success', 'Xóa thành công');
            return redirect()->route('route_BE_Admin_List_May_Bay');
        } else {
            Session::flash('error', 'Xóa không thành công');
            return redirect()->route('route_BE_Admin_List_May_Bay');
        }
        // return redirect()->route('route_BE_Admin_List_May_Bay');
    }



    public function detail_MayBay($so_hieu_mb, Request $request)
    {
        // echo 'mạnh';
        
        $this->v['title_page'] = 'Chi tiết máy bay';
        $request->session()->put('so_hieu_mb', $so_hieu_mb);
        $this->v['exParam'] = $request->all();
        $this->v['list_loai_mb'] = $this->loai_mb->list_loai_mb($this->v['exParam'], false);
        // dd($this->v['list_loai_mb']);
        $mb_detail = $this->may_bay->detail_mb($so_hieu_mb);
        $this->v['list_mb'] = $mb_detail;
        return view('admin.home.maybay.detail', $this->v);
    }


    public function update_MayBay(MayBayRequest $request)
    {
        $so_hieu_mb = session('so_hieu_mb');
        // dd($so_hieu_mb);
        if ($request->file('anh_mb')) {
            $file = $request->file('anh_mb');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/assets/admin/img_maybay'), $filename);
        }

        

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

        // dd($params);
        unset($params['cols']['_token']);
        if(!empty($filename)){

            $res =  $this->may_bay->update_mb($so_hieu_mb , $params , $filename);
        }else {
            
            $res =  $this->may_bay->update_mb($so_hieu_mb , $params);
        }
        // dd($res);
        if($res > 0) {
            // updata thành công
            Session::flash('success' , 'Cập nhập thành công');
            return redirect()->route('route_BE_Admin_List_May_Bay');
        }else{
            Session::flash('error' , 'Cập nhập không thành công');
            return back();
        }

    
    }
}
