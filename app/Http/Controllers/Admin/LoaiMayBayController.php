<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoaiMayBayRequest;
use App\Models\Loai_mb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoaiMayBayController extends Controller
{
    protected $v;
    protected $loai_mb;
    public function __construct()
    {
        $this->v = [];
        $this->loai_mb =  new Loai_mb();
    }
    public function index(Request $request)
    {
        $this->v['title_page'] = 'Quản trị loại máy bay';
        $this->v['exParam'] = $request->all();
        $list_loai_mb = $this->loai_mb->list_loai_mb($this->v['exParam'], true,  5);
        $this->v['list_loai_mb'] = $list_loai_mb;
        return view('admin.home.loaimaybay.index', $this->v);
    }

    public function delete_Loai_MB($id)
    {
        $res = $this->loai_mb->delete_loai_mb($id);
        if ($res > 0) {
            // xóa thành công
            Session::flash('success', 'Xóa thành công');
        } else {
            Session::flash('error', 'Xóa không thành công');
        }

        return redirect()->rout('route_BE_Admin_List_Loai_May_Bay');
    }

    public function add_Loai_MB(LoaiMayBayRequest $request)
    {
        $this->v['title_page']  = 'Thêm Loại Máy Bay';
        if ($request->isMethod('post')) {
            if($request->file('anh_loai_mb')){
                $file = $request->file('anh_loai_mb');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/assets/admin/img_loai_mb'), $filename);
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
            unset($params['cols']['_token']);
            if(!empty($filename)){
                
                $res = $this->loai_mb->saveNew($params , $filename);
            }else {
                $res = $this->loai_mb->saveNew($params);
            }
            // dd($res);
            if($res > 0){
                // thêm thành công
                Session::flash('success' , 'Thêm thành công');
                return redirect()->route('route_BE_Admin_List_Loai_May_Bay');
            }else  {
                // thêm không thành công
                Session::flash('error' ,  'Thêm không thành công');
                return back();
            }
        }




        return view('admin.home.loaimaybay.add', $this->v);
    }


    public function detail_Loai_MB($id , Request $request){
        $request->session()->put('id' , $id);
        $this->v['title_page'] = 'Chi tiết hãng máy bay';
        $detail_loai_mb = $this->loai_mb->detail_loai_mb($id);
        $this->v['detail_loai_mb'] = $detail_loai_mb;
        return view('admin.home.loaimaybay.detail' , $this->v);
    }

    public function update_Loai_MB(LoaiMayBayRequest $request){
        $id = session('id');
        if(empty($id)){
            Session::flash('error' , 'Cập nhập thất bại');
            return redirect()->route('route_BE_Admin_Detail_Loai_May_Bay');
        }
       
        if($request->file('anh_loai_mb')){
            $file = $request->file('anh_loai_mb');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/assets/admin/img_loai_mb'), $filename);
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
        unset($params['cols']['_token']);
        if(!empty($filename)){
            $res = $this->loai_mb->update_loai_mb($id  , $params , $filename);
        }else {
            // cập nhập khi không có ảnh
            $res = $this->loai_mb->update_loai_mb($id , $params);
           
        }

        if($res > 0) {
            Session::flash('success' , 'Cập nhập thành công');
            return redirect()->route('route_BE_Admin_List_Loai_May_Bay');
        }else{
            Session::flash('error' , 'Cập nhập không thành công');
            return back();
        }
        
    }
}
